<?php session_start();
// Database Connection
include('includes/config.php');
//Validating Session
if(strlen($_SESSION['aid'])==0)
  { 
header('location:index.php');
}
else{
// Code for update faculity details
if(isset($_POST['submit'])){
//Getting Post Values  
 $cid=$_POST['cid'];
$faculityname=$_POST['faculityname'];
$gender=$_POST['gender'];
$emailid=$_POST['emailid'];
$mobilenumber=$_POST['mobilenumber'];
$designation=$_POST['designation'];
$deparment=$_POST['deparment'];
$jobnature=$_POST['jobnature'];
$doj=$_POST['doj'];
$academicqualification=$_POST['academicqualification'];
$faculityid=intval($_GET['fid']);



$query=mysqli_query($con,"update tblfaculity set CollegeID='$cid',FaculityName='$faculityname',FaculityGender='$gender',FaculityEmail='$emailid',FaculityMobileNo='$mobilenumber', FaculityDeignation='$designation', FaculityDepartment='$deparment', FaculityJobnature='$jobnature', FaculityDOJ='$doj',FaculityAcademicQualification='$academicqualification' where ID='$faculityid'");
if($query){
echo "<script>alert('Faculity details updated successfully.');</script>";
echo "<script type='text/javascript'> document.location = 'manage-faculity.php'; </script>";
} else {
echo "<script>alert('Something went wrong. Please try again.');</script>";
}
}


  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Online College Faculty Record Management System  | Update Faculty Details</title>

  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">

  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="../plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="../plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
<?php include_once("includes/navbar.php");?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <?php include_once("includes/sidebar.php");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Faculty Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Update Faculty Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">

<?php
$fid=intval($_GET['fid']);
$query=mysqli_query($con,"select tblfaculity.ID as facid,tblfaculity.CollegeID,tblfaculity.FaculityName,tblfaculity.FaculityGender,tblfaculity.FaculityEmail,tblfaculity.FaculityMobileNo,tblfaculity.FaculityDeignation,tblfaculity.FaculityDepartment,tblfaculity.FaculityJobnature,tblfaculity.FaculityDOJ,tblfaculity.FaculityAcademicQualification,tblfaculity.FaculityPic,tblcollege.ID as cid,tblcollege.CollegeName,tblcollege.CollegeCode 
  from tblfaculity 
  left join tblcollege on tblcollege.ID=tblfaculity.CollegeID where tblfaculity.ID='$fid'");
$cnt=1;
while($result=mysqli_fetch_array($query)){
?>


              <div class="card-header">
                <h3 class="card-title">Faculty Info</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form name="addlawyer" method="post" enctype="multipart/form-data">
                <div class="card-body">

<div class="form-group">
                    <label for="exampleInputFullname">College Name</label>
                    <select class="form-control border-none input-flat bg-ash" name="cid" required="true">
            <option value="<?php echo $result['CollegeID']?>"><?php echo $result['CollegeName']?>(<?php echo $result['CollegeCode']?>)</option>
           <?php $query=mysqli_query($con,"select * from tblcollege");
$cnt=1;
while($row=mysqli_fetch_array($query)){
?>
            <option value="<?php echo $row['ID']?>"><?php echo $row['CollegeName']?>(<?php echo $row['CollegeCode']?>)</option><?php $cnt++;} ?>
        </select>
                  </div>

   <div class="form-group">
                    <label for="exampleInputFullname">Faculty Name</label>
                    <input type="text" class="form-control" id="faculityname" name="faculityname" value="<?php echo $result['FaculityName']?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFullname">Gender</label>
                    <select class="form-control border-none input-flat bg-ash" name="gender" required="true">
            <option value="<?php echo $result['FaculityGender']?>"><?php echo $result['FaculityGender']?></option>
            <option value="Male">Male</option>
           <option value="Female">Female</option></select>
                  </div>
              

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="emailid" name="emailid" value="<?php echo $result['FaculityEmail']?>" required>
                  </div>

                  <div class="form-group">
                    <label for="text">Mobile Number</label>
                    <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" value="<?php echo $result['FaculityMobileNo']?>" pattern="[0-9]{10}" title="10 numeric characters only" required>
                  </div>



                  <div class="form-group">
                    <label for="text">Designation</label>
                    <input type="text" class="form-control" id="designation" name="designation" value="<?php echo $result['FaculityDeignation']?>"  required>
                  </div>
                  <div class="form-group">
                    <label for="text">Deparment</label>
                    <input type="text" class="form-control" id="deparment" name="deparment" value="<?php echo $result['FaculityDepartment']?>"  required>
                  </div>
                  <div class="form-group">
                    <label for="text">Job Nature</label>
                    <select class="form-control border-none input-flat bg-ash" name="jobnature" required="true">
            <option value="<?php echo $result['FaculityJobnature']?>"><?php echo $result['FaculityJobnature']?></option>
            <option value="Contractual">Contractual</option>
           <option value="Permanent">Permanent</option></select>
                  </div>
                  <div class="form-group">
                    <label for="text">Date of Joining</label>
                    <input type="date" class="form-control" id="doj" name="doj" required value="<?php echo $result['FaculityDOJ']?>">
                  </div>
                   <div class="form-group">
                    <label for="text">Academic Qualification</label>
                    <textarea class="form-control" id="academicqualification" name="academicqualification" placeholder="Academic Qualification"  required><?php echo $result['FaculityAcademicQualification']?></textarea>
                  </div>



  <!--Profile Pic---->
  <div class="form-group">
                    <label for="exampleInputFile">Profile Pic </label>
               <img src="teacherspic/<?php echo $result['FaculityPic']?>" width="120">
               <a href="update-faculity-pic.php?fid=<?php echo $result['facid'];?>">Update Profile Pic</a>
                  </div>
  <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit" id="submit">Update</button>
                </div>
      
                </div>
                <!-- /.card-body -->
 <?php } ?>         

            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->








    
              </form>
       
  
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include_once('includes/footer.php');?>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script src="../plugins/select2/js/select2.full.min.js"></script>
<script>
$(function () {
  bsCustomFileInput.init();
});
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
});
</script>
</body>
</html>
<?php } ?>

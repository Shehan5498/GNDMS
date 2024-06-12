<?php session_start();
// Database Connection
include('includes/config.php');
//Validating Session
if (strlen($_SESSION['aid']) == 0) {
  header('location:index.php');
} else {
  // Code for Add New Teacher
  if (isset($_POST['submit'])) {
    //Getting Post Values  
    // $cid = $_POST['cid'];
    $NIC = $_POST['NIC'];
    $Name = $_POST['Fullname'];
    $Address = $_POST['Address'];
    $DateofBirth = $_POST['dob'];
    $Gender = $_POST['gender'];
    $CivilStatus = $_POST['CivilStatus'];
    $Ethnicity = $_POST['Ethnicity'];
    $Religion = $_POST['Religion'];
    $HomeRegCode = $_POST['HRC'];
    $NameofFather = $_POST['NOF'];
    $ElectoralRegNo = $_POST['ERN'];
    $MobileNumber = $_POST['mobilenumber'];
    $HousingSituation = $_POST['hs'];
    $TypeofAidreceived = $_POST['TOAR'];
    $JobNature = $_POST['JN'];

    $dateofjoiningindivision   = $_POST['doj'];

    $addedby = $_SESSION['uname'];
    $BirthCertificatePic = $_FILES["BCpic"]["name"];
    // get the image extension
    $extension = strtolower(pathinfo($BirthCertificatePic, PATHINFO_EXTENSION)); // get the file extension and convert to lowercase

    // allowed extensions
    $allowed_extensions = array("jpg", "jpeg", "png", "gif");
    // Validation for allowed extensions .in_array() function searches an array for a specific value.
    if (!in_array($extension, $allowed_extensions)) {
      echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
    } else {
      //rename the image file
      $newBCpic = md5($BCpic) . time() . $extension;
      // Code for move image into directory
      move_uploaded_file($_FILES["BCpic"]["tmp_name"], "birthcertificates/" . $newBCpic);


      $query = mysqli_query($con, "insert into tblpopulation(NIC,Name,Address,DateofBirth,Gender,CivilStatus,Ethnicity,Religion,HomeRegCode,NameofFather,ElectoralRegNo,MobileNumber,HousingSituation,TypeofAidreceived,JobNature,dateofjoiningindivision,BirthCertificatePic,AddedBy) values('$NIC','$Fullname','$Address','$dob','$gender','$CivilStatus','$Ethnicity','$Religion','$HRC','$NOF','$ERN','$mobilenumber','$hs','$TOAR','$JN','$doj','$BCpic','$addedby')");
      if ($query) {
        echo "<script>alert('Population details has been added successfully.');</script>";
        echo "<script type='text/javascript'> document.location = 'add-population.php'; </script>";
      } else {
        echo "<script>alert('Something went wrong. Please try again.');</script>";
      }
    }
  }


?>
  <!DOCTYPE html>
  <html lang="en">

  <head>

    <title>Online Grama Niladhari Division Management System | Add Population</title>

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
      <?php include_once("includes/navbar.php"); ?>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <?php include_once("includes/sidebar.php"); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Add Population</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active">Add Population</li>
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
                  <div class="card-header">
                    <h3 class="card-title">Persoanl Info</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form name="addlawyer" method="post" enctype="multipart/form-data">
                    <div class="card-body">


                      <div class="form-group">
                        <label for="NIC">ID (NIC)</label>
                        <input type="text" class="form-control" id="NIC" name="NIC" placeholder="Enter your NIC" required>
                      </div>
                      <div class="form-group">
                        <label for="Fullname">Name with Initials</label>
                        <input type="text" class="form-control" id="Fullname" name="Fullname" placeholder="Enter the Full Name" required>
                      </div>
                      <div class="form-group">
                        <label for="Address">Address</label>
                        <input type="text" class="form-control" id="Address" name="Address" placeholder="Enter the Full Name" required>
                      </div>
                      <div class="form-group">
                        <label for="text">Date of Birth</label>
                        <input type="date" class="form-control" id="dob" name="dob" required>
                      </div>

                      <div class="form-group">
                        <label for="Gender">Gender</label>
                        <select class="form-control border-none input-flat bg-ash" name="gender" required>
                          <option value="">Select Gender</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="CivilStatus">Civil Status</label>
                        <input type="text" class="form-control" id="CivilStatus" name="CivilStatus" placeholder="Enter the Full Name" required>
                      </div>
                      <div class="form-group">
                        <label for="Ethnicity">Ethnicity</label>
                        <input type="text" class="form-control" id="Ethnicity" name="Ethnicity" placeholder="Enter the Full Name" required>
                      </div>
                      <div class="form-group">
                        <label for="Religion">Religion</label>
                        <input type="text" class="form-control" id="Religion" name="Religion" placeholder="Enter the Full Name" required>
                      </div>
                      <div class="form-group">
                        <label for="HomeRegCode">Home Reg Code</label>
                        <input type="text" class="form-control" id="HRC" name="HRC" placeholder="Enter the Full Name" required>
                      </div>
                      <div class="form-group">
                        <label for="NameofFather">Name of Father</label>
                        <input type="text" class="form-control" id="NOF" name="NOF" placeholder="Enter the Full Name" required>
                      </div>
                      <div class="form-group">
                        <label for="electoralregno">Electoral_Reg_No</label>
                        <input type="text" class="form-control" id="ERN" name="ERN" placeholder="Enter the Full Name" required>
                      </div>

                      <div class="form-group">
                        <label for="text">Mobile Number</label>
                        <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Enter mobile number" pattern="[0-9]{10}" title="10 numeric characters only" required>
                      </div>

                      <div class="form-group">
                        <label for="housingsituation">Housing Situation</label>
                        <select class="form-control border-none input-flat bg-ash" name="hs" required="true">
                          <option value="">Select Housing Situation</option>
                          <option value="Male">jhbuyt</option>
                          <option value="Female">hwgfyg</option>
                          <option value="Female">jhguydty</option>
                          <option value="Female">Homeless</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFullname">Type of Aid received</label>
                        <select class="form-control border-none input-flat bg-ash" name="TOAR" required="true">
                          <option value="">Select Aid type</option>
                          <option value="Male">ttttttttt</option>
                          <option value="Female">ffffff</option>
                          <option value="Female">kkkkkk</option>
                          <option value="Female">jjjjj</option>
                          <option value="Female">jjjjj</option>
                          <option value="Female">other</option>
                        </select>
                      </div>


                      <div class="form-group">
                        <label for="exampleInputFullname">JobNature</label>
                        <select class="form-control border-none input-flat bg-ash" name="JN" required="true">
                          <option value="">Select job type</option>
                          <option value="Male">ttttttttt</option>
                          <option value="Female">ffffff</option>
                          <option value="Female">kkkkkk</option>
                          <option value="Female">jjjjj</option>
                          <option value="Female">jjjjj</option>
                          <option value="Female">other</option>
                        </select>
                      </div>



                      <div class="form-group">
                        <label for="text">Date of Joining This division</label>
                        <input type="date" class="form-control" id="doj" name="doj" required>
                      </div>


                      <div class="form-group">
                        <label for="exampleInputFile">Birth Certificate pic <span style="font-size:12px;color:red;">(Only jpg / jpeg/ png /gif format allowed)</span></label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="BCpic" name="BCpic" required>
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
                      </div>

                    </div>
                    <!-- /.card-body -->

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
      <?php include_once('includes/footer.php'); ?>

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
      $(function() {
        bsCustomFileInput.init();
      });
      $(function() {
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
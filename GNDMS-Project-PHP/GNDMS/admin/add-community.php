<?php
session_start();
// Database Connection
include('includes/config.php');

// Validating Session
if (strlen($_SESSION['aid']) == 0) {
  header('location:index.php');
} else {
  // Code for Add New Sub Admin
  if (isset($_POST['submit'])) {
    // Get the POST values
    $CommunityCode = $_POST['CommunityCode'];
    $CommunityName = $_POST['CommunityName'];
    $NatureofORG = $_POST['NatureofORG'];
    $addedby = $_SESSION['uname'];

    // Check if the community code already exists
    $ret = mysqli_query($con, "SELECT CommunityCode FROM tblcommunity WHERE CommunityCode='$CommunityCode'");
    $result = mysqli_fetch_array($ret);

    if ($result > 0) {
      echo "<script>alert('This community code already exists.');</script>";
    } else {
      // Insert new community details into the database
      $query = mysqli_query($con, "INSERT INTO tblcommunity(CommunityCode, CommunityName, NatureofORG, Addedby) VALUES('$CommunityCode', '$CommunityName', '$NatureofORG', '$addedby')");

      if ($query) {
        echo "<script>alert('Community details added successfully.');</script>";
        echo "<script type='text/javascript'> document.location = 'add-community.php'; </script>";
      } else {
        echo "<script>alert('Something went wrong. Please try again.');</script>";
      }
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>Online Grama Niladhari Division Management System | Add Community ORG</title>

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
              <h1>Add Community ORG</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Add Community ORG</li>
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
                  <h3 class="card-title">Add Community Detail</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form name="addlawyer" method="post" enctype="multipart/form-data">
                  <div class="card-body">


                    <div class="form-group">
                      <label for="CommunityCode">Community Code</label>
                      <input type="text" class="form-control" id="CommunityCode" name="CommunityCode" placeholder="Enter The Code of Community" required>
                    </div>
                    <div class="form-group">
                      <label for="CommunityName">Community Name</label>
                      <input type="text" class="form-control" id="CommunityName" name="CommunityName" placeholder="Enter The Name of Community" required>
                    </div>
                    <div class="form-group">
                      <label for="NatureofORG">Nature of ORG</label>
                      <input type="text" class="form-control" id="NatureofORG" name="NatureofORG" placeholder="Enter The Nature of Community" required>
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
<?php  ?>
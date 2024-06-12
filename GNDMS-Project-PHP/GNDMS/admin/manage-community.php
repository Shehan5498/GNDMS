<?php session_start();
error_reporting(0);
// Database Connection
include('includes/config.php');
//Validating Session
if (strlen($_SESSION['aid']) == 0) {
  header('location:index.php');
} else {
  // Code for deletion

  if ($_GET['delid']) {
    $rid = intval($_GET['delid']);
    $query = mysqli_query($con, "delete from tblcommunity where ID='$rid'");
    if ($query) {
      echo "<script>alert('Community deleted.');</script>";
      echo "<script>window.location.href ='manage-community.php'</script>";
    } else {
      echo "<script>alert('Something Went Wrong. Please try again.');</script>";
    }
  }

?>
  <!DOCTYPE html>
  <html lang="en">

  <head>

    <title>Online Grama Niladhari Division Management System | Manage Community</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  </head>

  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      <?php include_once("includes/navbar.php"); ?>
      <!-- /.navbar -->

      <?php include_once("includes/sidebar.php"); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Manage Community</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                  <li class="breadcrumb-item active">Manage CommunityORG</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">


                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">CommunityORG Details</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Community Code</th>
                            <th>Community Name</th>
                            <th>Nature of ORG</th>
                            <th>Added By</th>
                            <th>Creation Date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $query = mysqli_query($con, "select * from tblcommunity");
                          $cnt = 1;
                          while ($result = mysqli_fetch_array($query)) {
                          ?>

                            <tr>
                              <td><?php echo $cnt; ?></td>

                              <td><?php echo $result['CommunityCode'] ?></td>
                              <td><?php echo $result['CommunityName'] ?></td>
                              <td><?php echo $result['NatureofORG'] ?></td>
                              <td><?php echo $result['Addedby'] ?></td>
                              <td><?php echo $result['CreationDate'] ?></td>

                              <th>
                                <a href="edit-community.php?cid=<?php echo $result['ID']; ?>" title="Edit Community Details"> <i class="fa fa-edit" aria-hidden="true"></i> </a> |
                                <a href="manage-community.php?delid=<?php echo $result['ID']; ?>" onclick="return confirm('Do you really want to Delete ?');"><i class="fa fa-trash" aria-hidden="true"></i> </a>

                              </th>
                            </tr>
                          <?php $cnt++;
                          } ?>

                        </tbody>
                        <tfoot>
                          <tr>
                            <th>#</th>
                            <th>Community Code</th>
                            <th>Community Name</th>
                            <th>Nature of ORG</th>
                            <th>Added By</th>
                            <th>Creation Date</th>
                            <th>Action</th>
                          </tr>
                          </th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <?php include_once('includes/footer.php'); ?>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../plugins/jszip/jszip.min.js"></script>
    <script src="../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
      $(function() {
        $("#example1").DataTable({
          "responsive": true,
          "lengthChange": false,
          "autoWidth": false,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>
  </body>

  </html>
<?php } ?>
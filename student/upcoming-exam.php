<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Exam Management System</title>
   <!-- Font Awesome -->
   <link rel="stylesheet" href="../asset/fontawesome/css/all.min.css">
   <link rel="stylesheet" href="../asset/css/adminlte.min.css">
   <link rel="stylesheet" href="../asset/css/style.css">
   <link rel="stylesheet" href="../asset/tables/datatables-bs4/css/dataTables.bootstrap4.min.css">
   <style type="text/css">
      td a.btn {
         font-size: 0.7rem;
      }

      td p {
         padding-left: 0.5rem !important;
      }

      th {
         padding: 1rem !important;
      }

      table tr td {
         padding: 0.3rem !important;
         font-size: 13px;
      }

      .bg1 {
         background-color: rgb(160, 20, 79);
         color: rgb(211, 209, 207);
      }

      .bg2 {
         background-color: rgb(20, 83, 154);
         color: rgb(211, 209, 207);
      }

      .bg3 {
         background-color: rgb(4, 91, 98);
         color: rgb(211, 209, 207);
      }

      .bg4 {
         background-color: rgb(109, 65, 161);
      }

      .sidebar {
         background-color: rgb(248, 249, 250);
      }

      .nav-icon {
         color: black;
      }

      .bg-color {
         color: black;
      }

      .main-sidebar {
         background-color: rgb(248, 249, 250);
      }

      .brand-link {
         color: black;
      }

      .main-header {
         background-color: rgb(248, 249, 250);
      }
   </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
   <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light"
         style="background-color: rgb(255, 255, 255);">
         <!-- Left navbar links -->
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"
                     style="color: rgba(24,57,46);"></i></a>
            </li>
         </ul>
         <!-- Right navbar links -->
         <ul class="navbar-nav ml-auto">
            <li class="nav-item">
               <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                  <i class="fas fa-expand-arrows-alt" style="color: rgba(24,57,46);"></i>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-widget="fullscreen" href="../index.html">
                  <i class="fas fa-power-off" style="color: rgba(24,57,46);"></i>
               </a>
            </li>
         </ul>
      </nav>
      <!-- /.navbar -->
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: rgba(39,93,43);">
         <!-- Brand Logo -->
         <a href="index.php" class="brand-link animated swing">
            <img src="../asset/img/logo.png" alt="DSMS Logo" width="200" style="margin-bottom: -50px;">
         </a>
         <!-- Sidebar -->
         <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item">
                     <a href="index.php" class="nav-link">
                        <i class="nav-icon fa fa-tachometer-alt"></i>
                        <p class="bg-color">
                           Dashboard
                        </p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="upcoming-exam.php" class="nav-link">
                        <i class="nav-icon fa fa-file-signature"></i>
                        <p class="bg-color">
                           Upcoming Exam
                        </p class="bg-color">
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="result.php" class="nav-link">
                        <i class="nav-icon fa fa-star"></i>
                        <p class="bg-color">
                           Scores
                        </p>
                     </a>
                  </li>
               </ul>
            </nav>
            <!-- /.sidebar-menu -->
         </div>
         <!-- /.sidebar -->
      </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                     <h1 class="m-0" style="color: rgb(31,108,163);"><span class="fa fa-file-word"></span> Upcoming
                        Exams</h1>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Upcoming Exams</li>
                     </ol>
                  </div>
                  <!-- /.col -->
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
         </div>
         <!-- /.content-header -->
         <!-- Main content -->
         <section class="content">
            <div class="container-fluid">
               <div class="card card-info">
                  <div class="card-body">
                     <div class="col-md-12 table-responsive">
                        <table class="table align-items-center mb-0">
                           <thead>
                              <tr>
                                 <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Exam Name</th>
                                 <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Subject</th>
                                 <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Duration</th>
                                 <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Take Exam</th>
                                 <th class="text-secondary opacity-7"></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>EXAM 1</td>
                                 <td>Mathematics</td>
                                 <td>60 mins</td>
                                 <td>
                                    <a class="btn btn-sm bg3" href="#"><i class="fa fa-file-word"></i> Take Exam</a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>EXAM 2</td>
                                 <td>Programming</td>
                                 <td>75 mins</td>
                                 <td>
                                    <a class="btn btn-sm bg3" href="#"><i class="fa fa-file-word"></i> Take Exam</a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>EXAM 3</td>
                                 <td>English</td>
                                 <td>45 mins</td>
                                 <td>
                                    <a class="btn btn-sm bg3" href="#"><i class="fa fa-file-word"></i> Take Exam</a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>EXAM 4</td>
                                 <td>Science</td>
                                 <td>60 mins</td>
                                 <td>
                                    <a class="btn btn-sm bg3" href="#"><i class="fa fa-file-word"></i> Take Exam</a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>EXAM 5</td>
                                 <td>Data Structure</td>
                                 <td>80 mins</td>
                                 <td>
                                    <a class="btn btn-sm bg3" href="#"><i class="fa fa-file-word"></i> Take Exam</a>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>

      </div>
      <!-- /.card-body -->
   </div>
   </div>
   <!-- /.container-fluid -->
   </section>
   <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->
   </div>
   <!-- ./wrapper -->
   <div id="delete" class="modal animated rubberBand delete-modal" role="dialog">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-body text-center">
               <img src="../asset/img/sent.png" alt="" width="50" height="46">
               <h3>Are you sure want to delete this Result?</h3>
               <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                  <button type="submit" class="btn bg1">Delete</button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- jQuery -->
   <script src="../asset/jquery/jquery.min.js"></script>
   <script src="../asset/js/bootstrap.bundle.min.js"></script>
   <script src="../asset/js/adminlte.js"></script>
   <!-- DataTables  & Plugins -->
   <script src="../asset/tables/datatables/jquery.dataTables.min.js"></script>
   <script src="../asset/tables/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
   <script src="../asset/tables/datatables-responsive/js/responsive.bootstrap4.min.js"></script>s
   <script src="../asset/tables/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
   <script>
      $(function () {
         $("#example1").DataTable();
      });
   </script>
</body>

</html>
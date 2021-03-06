<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Exam Management System</title>
   <!-- Font Awesome -->
   <link rel="stylesheet" href="../asset/fontawesome/css/all.min.css">
   <link rel="stylesheet" href="../asset/css/adminlte.min.css">
   <link rel="stylesheet" href="../asset/css/adminlte.min.css">
   <link rel="stylesheet" href="../stud">
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
      }

      .bg2 {
         background-color: rgb(4, 91, 98);
      }

      .bg3 {
         background-color: rgb(20, 83, 154);
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
         style="background-color: rgb(248,249,250)">
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
                  <i class="fas fa-expand-arrows-alt" style="color: rgba(24,57,46);;"></i>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" data-widget="fullscreen" href="../index.html">
                  <i class="fas fa-power-off" style="color: rgba(24,57,46);;"></i>
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
                     <h1 class="m-0" style="color: rgb(31,108,163);"><span class="fa fa-tachometer-alt"></span>
                        Dashboard</h1>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../webpage.php">Home</a></li>
                        <li class="breadcrumb-item active">Report</li>
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
               <!-- Small boxes (Stat box) -->
               <div class="row">
                  <div class="col-6 col-sm-6 col-md-6">
                     <div class="info-box">
                        <span class="info-box-icon bg1 elevation-1"><i class="fas fa-file-word"
                              style="color: rgb(211, 209, 207);"></i></span>

                        <div class="info-box-content">
                           <span class="info-box-text">Number of Total Exam</span>
                           <span class="info-box-number">
                              20
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                  </div>
                  <div class="col-6 col-sm-6 col-md-6">
                     <div class="info-box">
                        <span class="info-box-icon bg2 elevation-1"><i class="fas fa-file-word"
                              style="color: rgb(211, 209, 207);"></i></span>

                        <div class="info-box-content">
                           <span class="info-box-text">Number of Upcoming Exam</span>
                           <span class="info-box-number">
                              5
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                  </div>
                  <div class="col-6 col-sm-6 col-md-6">
                     <div class="info-box">
                        <span class="info-box-icon bg3 elevation-1"><i class="fas fa-file-word"
                              style="color: rgb(211, 209, 207);"></i></span>

                        <div class="info-box-content">
                           <span class="info-box-text">Number of Passed Exam</span>
                           <span class="info-box-number">
                              5
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                  </div>
                  <div class="col-6 col-sm-6 col-md-6">
                     <div class="info-box">
                        <span class="info-box-icon bg4 elevation-1"><i class="fas fa-file-word"
                              style="color: rgb(211, 209, 207);"></i></span>

                        <div class="info-box-content">
                           <span class="info-box-text">Number of Failed Exam</span>
                           <span class="info-box-number">
                              5
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                  </div>
               </div>
            </div>
            <!-- /.row -->
            <!-- /.row (main row) -->
      </div>
      <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->
   </div>
   <!-- ./wrapper -->
   <!-- jQuery -->
   <script src="../asset/jquery/jquery.min.js"></script>
   <script src="../asset/js/adminlte.js"></script>
</body>

</html>

<!DOCTYPE html>
<html>
<!-- navbar color: #007bff -->

<head>
  <!-- <meta charset="utf-8"> -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Blue Card MIS | All Members</title>
  <link rel="icon" href="img/favicon.ico">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- <script src="https://kit.fontawesome.com/a4c7d859ee.js" crossorigin="anonymous"></script> -->
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="css/toastr.min.css">

  <!-- JQVMap -->
  <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
    .banner-img {
      width: 100%;
      border-radius: 5px 5px 5px 5px;
    }

    .hey {
      left: 0;
      position: fixed;
      right: 0;
      top: 0;
      z-index: 1035;
    }

    .banner {
      margin: 0 auto;
      width: 100%;
    }

    .breadcrumbs {
      padding-top: 8px;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini  sidebar-collapse layout-fixed">

  <div class="wrapper">
    <!-- Navbar -->
    <div class="banner hey">
      <a href="#"><img class="banner-img" src="img/logo4.png" alt=""></a>
    </div>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="margin-top: 70px;">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item breadcrumb-item breadcrumbs"><a href="#">Home</a></li>
        <li class="nav-item breadcrumb-item breadcrumbs"><a href="#">Card Manegement</a></li>
        <li class="nav-item breadcrumb-item active breadcrumbs">All Members</li>
      </ul>
      <!-- Right navbar links -->
      <!-- SEARCH FORM -->
      <form class="form-inline ml-auto" action="logout.php">
        <!-- <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search"> -->
        <button class="btn btn-navbar" type="submit">Log Out
          <i class="fas fa-sign-out-alt"></i>
        </button>
      </form>
    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary elevation-4" style="margin-top: 70px;">
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="img/renz_pic.jpeg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="user-profile.php" class="d-block">Renz Keanu Alfonso</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-child-indent nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
              <a href="dashboard.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>Reference Library</p>
              </a>
            </li> -->
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  User Management
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="all-user.php" class="nav-link">
                    <i class="nav-icon fas fa-user-friends"></i>
                    <p>All Users</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="add-user.php" class="nav-link">
                    <i class="nav-icon fas fa-plus-circle"></i>
                    <p>Add New User</p>
                  </a>
                </li>
                <!-- <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-user-shield nav-icon"></i>
                    <p>Manage Roles</p>
                  </a>
                </li> -->
              </ul>
            </li>
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-id-card"></i>
                <p>
                  Card Management
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="all-member.php" class="nav-link active">
                    <i class="fas fa-users nav-icon"></i>
                    <p>All Members</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="add-member-info.php" class="nav-link">
                    <i class="fas fa-user-plus nav-icon"></i>
                    <p>Add New Member</p>
                  </a>
                </li>
                <!-- <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-user-edit nav-icon"></i>
                    <p>Manage Member</p>
                  </a>
                </li> -->
                <li class="nav-item">
                  <a href="manage-dependents.php" class="nav-link">
                    <i class="far fa-user nav-icon"></i>
                    <p>Manage Dependents</p>
                  </a>
                </li>
                <!-- <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-user-check nav-icon"></i>
                    <p>Validate Member</p>
                  </a>
                </li> -->
                <!-- <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-id-card nav-icon"></i>
                    <p>Print Card</p>
                  </a>
                </li> -->
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Forms
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <!-- <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/forms/general.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>General Elements</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/forms/advanced.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Advanced Elements</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/forms/editors.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Editors</p>
                  </a>
                </li>
              </ul> -->
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
              <h1 class="m-0 text-dark">Card Management</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <!-- Main content -->

      <!-- ----------------------------------------------------- -->
      <!-- ----------------------------------------------------- -->
      <!-- ----------------------------------------------------- -->
      <!-- --------------------CONTENT-------------------------- -->
      <!-- ----------------------------------------------------- -->
      <!-- ----------------------------------------------------- -->
      <!-- ----------------------------------------------------- -->
      <section class="content">
        <!-- /.card-body -->
        <!-- <div class="card card-primary">
                    <div class="card-header">
                        <h3>Member Information</h3>
                    </div>
                    /.card-header
                    form start
                    <div class="card"> -->
        <div class="card card-primary">
          <div class="card-header">
            <h4 class="m-0 text-light">All Members</h4>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Card Number</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Last Name</th>
                  <th>Gender</th>
                  <th>Occupation</th>
                  <th>Category</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                // include('config.php');
                // // session_start();
                // $query = "SELECT * FROM member WHERE flag = '1'";
                // // $result = filterRecord($query);
                // $result = mysqli_query($mysqli, $query);

                // function filterRecord($query)
                // {
                //   include("config.php");
                //   $filter_result = mysqli_query($mysqli, $query);
                //   return $filter_result;
                // }
                // // $query = mysqli_query($conn,"select *  from 'user'");
                // while ($row = mysqli_fetch_array($result)) {
                //   $id = $row['member_id'];
                  ?>
                  {{-- <tr>
                    <td><?php echo $row['card_number']; ?></td>
                    <td><?php echo $row['f_name']; ?></td>
                    <td><?php echo $row['m_name']; ?></td>
                    <td><?php echo $row['l_name']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['occupation']; ?></td>
                    <td><?php echo $row['category']; ?></td>
                    <td>
                      <div class="btn-group ">
                        <a href="print-verify.php?id=<?php echo $id; ?>" target="_blank" class="btn btn-sm btn-primary"><span class="fas fa-user-check"></span> Verify</a>
                        <a href="#edit-member<?php echo $row['member_id']; ?>" data-toggle="modal" class="btn btn-sm btn-warning"><span class="fas fa-pencil-alt"></span> Edit</a>
                        <a href="#delete-member<?php echo $row['member_id']; ?>" data-toggle="modal" class="btn btn-sm btn-danger"><span class="fas fa-trash"></span> Delete</a>
                      </div>
                      <?php include('button-member.php'); ?>

                    </td>
                  </tr> --}}
                <?php

                ?>
              {{-- </tbody>
              <tfoot>
                <tr>
                  <th>Card Number</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Last Name</th>
                  <th>Gender</th>
                  <th>Birthdate</th>
                  <th>Occupation</th>
                  <th>Action</th>
                </tr>
              </tfoot>
            </table> --}}
          </div>
          <!-- /.card-body -->
        </div>
    </div>
    <!-- /.card -->
  </div>
  </section>
  <!-- /.content -->
  <!-- ----------------------------------------------------- -->
  <!-- ----------------------------------------------------- -->
  <!-- ----------------------------------------------------- -->
  <!-- --------------------CONTENT-------------------------- -->
  <!-- ----------------------------------------------------- -->
  <!-- ----------------------------------------------------- -->
  <!-- ----------------------------------------------------- -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="https://twitter.com/renz_alfons" target="_blank">RKAlfonso.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->


   <!-- jQuery -->
   <script src="/plugins/jquery/jquery.min.js"></script>
   <!-- <script src="js/jquery.min.js"></script> -->
   <!-- jQuery UI 1.11.4 -->
   <script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
   <!-- <script src="js/jquery-ui.min.js"></script> -->
   <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
   <script>
   $.widget.bridge('uibutton', $.ui.button)
   </script>
   <!-- Bootstrap 4 -->
   <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- <script src="js/bootstrap.bundle.min.js"></script> -->
   <!-- ChartJS -->
   <script src="/plugins/chart.js/Chart.min.js"></script>
   <!-- <script src="js/Chart.min.js"></script> -->
   <!-- Sparkline -->
   <script src="/plugins/sparklines/sparkline.js"></script>
   <!-- <script src="js/sparkline.js"></script> -->
   <!-- JQVMap -->
   <script src="/plugins/jqvmap/jquery.vmap.min.js"></script>
   <!-- <script src="js/jquery.vmap.min.js"></script> -->
   <script src="/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
   <!-- <script src="js/jquery.vmap.usa.js"></script> -->
   <!-- jQuery Knob Chart -->
   <script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
   <!-- <script src="js/jquery.knob.min.js"></script> -->
   <!-- daterangepicker -->
   <script src="/plugins/moment/moment.min.js"></script>
   <!-- <script src="js/moment.min.js"></script> -->
   <script src="/plugins/daterangepicker/daterangepicker.js"></script>
   <!-- <script src="js/daterangepicker.js"></script> -->
   <!-- Tempusdominus Bootstrap 4 -->
   <script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
   <!-- <script src="js/tempusdominus-bootstrap-4.min.js"></script> -->
   <!-- <script src="js/toastr.min.js"></script> -->
   <!-- Summernote -->
   <script src="/plugins/summernote/summernote-bs4.min.js"></script>
   <!-- <script src="js/summernote-bs4.min.js"></script> -->
   <!-- overlayScrollbars -->
   <script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
   <!-- <script src="js/jquery.overlayScrollbars.min.js"></script> -->
   <!-- AdminLTE App -->
   <script src="/dist/js/adminlte.js"></script>
   <!-- <script src="js/adminlte.js"></script> -->
   <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
   <script src="/dist/js/pages/dashboard.js"></script>
   <!-- <script src="js/dashboard.js"></script> -->
   <!-- AdminLTE for demo purposes -->
   <script src="/dist/js/demo.js"></script>
   <!-- <script src="js/demo.js"></script> -->
   <!-- DataTables -->
   <script src="/plugins/datatables/jquery.dataTables.js"></script>
   <!-- <script src="js/jquery.dataTables.js"></script> -->
   <script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
   <!-- <script src="js/dataTables.bootstrap4.js"></script> -->
   <script>
  <script>
    $(function() {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });
  </script>

</body>

</html>

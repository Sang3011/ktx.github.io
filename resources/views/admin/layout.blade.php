
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trang admin</title>
  <LINK REL="SHORTCUT ICON"  HREF="/admin_assets/dist/img/Logo_Dai_hoc_Can_Tho.png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/admin_assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/admin_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/admin_assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">   
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
      <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-users-cog font" style="font-size: 25px;color: #333"></i>
                   </a>
                  <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout" >
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
          </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
      <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
      <img src="/admin_assets/dist/img/Logo_Dai_hoc_Can_Tho.png" alt="CTU Logo" class="brand-image " style="opacity: .8">
      <span class="brand-text font-weight-light"> KTX ?????i H???c C???n Th??</span>
    </a>
    <!-- Sidebar -->
<div class="sidebar">
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-edit"></i>
                <p>
                     Qu???n L?? ????ng K?? Ph??ng
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/xulydangky" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>X???? Ly?? ????ng Ky??</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/daxulydangky" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh Sa??ch ??a?? X???? Ly??</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
                <a href="/admin/quanlychuyenphong" class="nav-link">
                <i class="nav-icon fas fa-people-carry"></i>
                <p>
                    Qu???n L?? Chuy???n Ph??ng
                </p>
            </a>
          </li>
        <li class="nav-item">
            <a href="/admin/quanlytraphong" class="nav-link">
                <i class="nav-icon fas fa-poll-h"></i>
                    <p>
                        Qu???n L?? Tr??? Ph??ng
                    </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/hoadon" class="nav-link">
                <i class="nav-icon fas fa-dollar-sign"></i>
                    <p>
                        Qu???n L?? Ti???n ??i???n N?????c
                    </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/phong" class="nav-link">
                <i class="nav-icon fas fa-house-user"></i>
                    <p>
                        Qu???n L?? Ph??ng
                    </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/day" class="nav-link">
                <i class="nav-icon fas fa-hotel"></i>
                    <p>
                        Qu???n L?? D??y
                    </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/nhanvien" class="nav-link">
                <i class="nav-icon fas fa-user-tie"></i>
                    <p>
                        Qu???n L?? Nh??n Vi??n
                    </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/Sinhvien" class="nav-link">
                <i class="nav-icon fas fa-user-graduate"></i>
                    <p>
                        Qu???n L?? Sinh Vi??n
                    </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/thongbao" class="nav-link">
                <i class="nav-icon fas fa-bell"></i>
                    <p>
                        Qu???n l?? th??ng b??o
                    </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/admin/ykien" class="nav-link">
                <i class="nav-icon fas fa-comment-alt"></i>
                    <p>
                        L???y ?? ki???n sinh vi??n
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
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <br>
          @section('container')
          @show

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/admin_assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin_assets/dist/js/adminlte.min.js"></script>
</body>
</html>

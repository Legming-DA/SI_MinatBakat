
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/') }}plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/') }}dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-info navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ asset('/') }}index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <!-- <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div> -->
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-info">
    <!-- Brand Logo -->
    <a href="{{ asset('/') }}home.php" class="brand-link" class="sidebar sidebar-info sidebar-dark">
      <img src="{{ asset('/') }}dist/img/AdminLogo.png" alt="Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span href="{{ url('/') }}" class="brand-text font-weight-light">PickOurChoice</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar ">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('/') }}dist/img/admin.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Legming DA</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Dashboard
                <i class="#"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/siswa') }}" class="nav-link">
              <!-- <i class="nav-icon fas fa-copy"></i> -->
              <i class="nav-icon fa fa-address-card" aria-hidden="true"></i>
              <p>
                Data Siswa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/minat_bakat') }}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Minat-Bakat
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/indikator_mb') }}" class="nav-link">
            <i class="nav-icon fa fa-list-alt" aria-hidden="true"></i>
              <p>
                Indikator
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/jurusan') }}" class="nav-link">
              <i class="nav-icon fa fa-graduation-cap" aria-hidden="true"></i>
              <p>
                Jurusan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/aturan') }}" class="nav-link">
            <i class=" nav-icon fa fa-tasks" aria-hidden="true"></i>
              <p>
                Aturan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/hasil_indikasi') }}" class="nav-link">
              <!-- <i class="nav-icon fas fa-table"></i> -->
              <i class="nav-icon fa fa-folder" aria-hidden="true"></i>
              <p>
                Hasil Indikasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/pengguna') }}" class="nav-link">
            <i class="nav-icon fa fa-users" aria-hidden="true"></i>
              <p>
                Users
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/peran') }}" class="nav-link">
              <!-- <i class="nav-icon fas fa-table"></i> -->
              <i class="nav-icon fa fa-folder" aria-hidden="true"></i>
              <p>
                Role
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="{{ url('/report') }}" class="nav-link">
              <i class="nav-icon fa fa-file" aria-hidden="true"></i>
              <p>
                Reports
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="{{ url('/setting') }}" class="nav-link">
              <!-- <i class="nav-icon fas fa-table"></i> -->
              <!-- <i class="fa fa-folder" aria-hidden="true"></i> -->
              <i class="nav-icon fa fa-cogs" aria-hidden="true"></i>
              <p>
                Settings
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('/keluar') }}" class="nav-link">
              <!-- <i class="nav-icon fas fa-table"></i> -->
              <!-- <i class="fa fa-folder" aria-hidden="true"></i> -->
              <i class="nav-icon fa fa-window-close" aria-hidden="true"></i>
              <p>
                Sign Out
              </p>
            </a>
          </li>
          <!-- <li class="nav-header">EXAMPLES</li> -->
          
         
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">
    @yield('content')
  </div>

  <div class="card-footer">
          
        </div>
        <!-- /.card-footer-->
      </div> 
      <!-- /.card

    </section>
    /.content -->
  </div>
  
  <footer class="main-footer">
    <!-- <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div> -->
    <strong>Copyright &copy; 2023 <a href="#">Teman Talents</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('/') }}plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/') }}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/') }}dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="{{ asset('/') }}dist/js/demo.js"></script> -->
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{ asset('asset/css/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('asset/css/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
  <!-- sweetalert2 -->
  <link rel="stylesheet" href="{{ asset('asset/css/sweetalert2.min.css') }}">

  <script src="{{ asset('asset/js/jquery.js') }}"></script>
</head>

<body>

  <div class="container-scroller d-flex">
    <!-- partial:./partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item sidebar-category">
          <p>Navigation</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.html">
            <i class="mdi mdi-view-quilt menu-icon"></i>
            <span class="menu-title">Dashboard</span>
            <div class="badge badge-info badge-pill">2</div>
          </a>
        </li>
        <li class="nav-item sidebar-category">
          <p>Components</p>
          <span></span>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/home') }}">
            <i class="mdi mdi-view-headline menu-icon"></i>
            <span class="menu-title">Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-palette menu-icon"></i>
            <span class="menu-title">Usuarios</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ url('/usuario') }}">Usuarios</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ url('/roles') }}">Roles</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ url('/inventario') }}">
            <i class="mdi mdi-view-headline menu-icon"></i>
            <span class="menu-title">Inventario</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/charts/chartjs.html">
            <i class="mdi mdi-chart-pie menu-icon"></i>
            <span class="menu-title">Categoria</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/icons/mdi.html">
            <i class="mdi mdi-emoticon menu-icon"></i>
            <span class="menu-title">Salir</span>
          </a>
        </li>
      </ul>
    </nav>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:./partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row" style="background: url('{{ asset('asset/img/portada.webp') }}') no-repeat; background-size: cover;">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu text-dark"></span>
          </button>
          <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1">Welcome back, Brandon Haynes</h4>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item">
              <h4 class="mb-0 font-weight-bold d-none d-xl-block">Mar 12, 2019 - Apr 10, 2019</h4>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
        <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Here..." aria-label="search" aria-describedby="search">
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                <img src="{{ asset('asset/img/avatar0.jpg') }}" alt="profile"/>
                <span class="nav-profile-name">Eleanor Richardson</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                  <i class="mdi mdi-settings text-primary"></i>
                  Settings
                </a>
                <a class="dropdown-item">
                  <i class="mdi mdi-logout text-primary"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="row w-100 flex-grow">
                <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">


                      @yield('content')
                      

                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:./partials/_footer.html -->
        <footer class="footer">
          <div class="card">
            <div class="card-body">
              <div class="d-sm-flex justify-content-center justify-content-sm-between py-2">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard </a> templates</span>
              </div>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

   <!-- base:js -->
   <script src="{{ asset('asset/js/js/vendor.bundle.base.js') }}"></script>
   <!-- chart.js -->
   <script src="{{ asset('asset/js/Chart.min.js') }}"></script>
   <!--  -->
   <script src="{{ asset('asset/js/jquery.cookie.js') }}"></script>
   <!--  -->
   <script src="{{ asset('asset/js/off-canvas.js') }}"></script>
   <!--  -->
   <script src="{{ asset('asset/js/hoverable-collapse.js') }}"></script>
   <!--  -->
   <script src="{{ asset('asset/js/template.js') }}"></script>
   <!--  -->
   <script src="{{ asset('asset/js/jquery.cookie.js') }}"></script>
   <script src="{{ asset('asset/js/dashboard.js') }}"></script>

   <script src="{{ asset('asset/js/sweetalert2.all.min.js') }}"></script>
</body>

</html>
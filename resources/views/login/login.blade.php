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
  <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
    <div class="content-wrapper d-flex align-items-center auth px-0">
      <div class="row w-100 mx-0">
        <div class="col-lg-4 mx-auto">
          <div class="auth-form-light text-left py-5 px-4 px-sm-5" style="background: #C5EBC3;">
            <div class="brand-logo">
              <img src="../../images/logo-dark.svg" alt="logo">
            </div>
            <h6 class="font-weight-light">Inicia Session Para Continuar</h6>
            <form class="pt-3">
              <div class="form-group">
                <label for="exampleFormControlInput1" class="form-label">Usuario</label>
                <input type="text" class="form-control form-control-lg" id="nameInputEmail1" placeholder="Usuario" style="background: white;">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
                <input type="password" class="form-control form-control-lg" id="passwordInputPassword1" placeholder="Contraseña" style="background: white;">
              </div>
              <div class="mt-3">
                <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">INGRESAR</a>
              </div>
              <div class="my-2 d-flex justify-content-between align-items-center">
                <a href="#" class="auth-link text-black">Forgot password?</a>
              </div
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>

  <!-- base:js -->
  <script src="{{ asset('asset/js/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <script src="{{ asset('asset/js/jquery.cookie.js') }}" type="text/javascript"></script>
  <!-- inject:js -->
  <script src="{{ asset('asset/js/off-canvas.js') }}"></script>
  <script src="{{ asset('asset/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('asset/js/template.js') }}"></script>
</body>

</html>
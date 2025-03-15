<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
  />

  <title>Login</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?= BASE_MEDIA?>assets/img/favicon/icon.png" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet"
  />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="<?= BASE_MEDIA?>assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="<?= BASE_MEDIA?>assets/vendor/css/core.css" />
  <link rel="stylesheet" href="<?= BASE_MEDIA?>assets/vendor/css/theme-default.css"  />
  <link rel="stylesheet" href="<?= BASE_MEDIA?>assets/css/demo.css" />
  <link rel="stylesheet" href="<?= BASE_MEDIA?>assets/css/validate.css" />


  <!-- Vendors CSS -->
  <link rel="stylesheet" href="<?= BASE_MEDIA?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- Page CSS -->
  <!-- Page -->
  <link rel="stylesheet" href="<?= BASE_MEDIA?>assets/vendor/css/pages/page-auth.css" />
  <!-- Helpers -->
  <script src="<?= BASE_MEDIA?>assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="<?= BASE_MEDIA?>assets/js/config.js"></script>
</head>

<body>
<!-- Content -->

<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Register -->
      <div class="card">
        <div class="card-body ">
          <h4 class="mb-4 text-center">Inicia sesión </h4>
          <div class="text-center mb-2">
            <img src="<?= BASE_MEDIA?>assets/img/logo/logo-user.png" alt="Logosss" style="width: 100px;">
          </div>

          <form id="loginForm" class="mb-3">
            
            <div class="mb-3">
              <label for="email" class="form-label">Correo </label>
              <input
                id="email"
                type="email"
                class="form-control"
                name="email"
                autocomplete="email"
                autofocus
              />
              <p id="error-message" class="error-message"></p>
            </div>

            <div class="mb-3 form-password-toggle">
              <div class="d-flex ">
                <label class="form-label" for="password">Contraseña</label>
              </div>
              <div class="input-group input-group-merge">

                <input
                  id="password"
                  type="password"
                  class="form-control"
                  name="password"
                  autocomplete="current-password"
                  placeholder="********"
                  aria-describedby="password"
                />
                <span id="eye" class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                <p id="error-password" class="error-message"></p>
              </div>
            </div>

            <div class="mb-3 btn__ingresar__login" >
              <button id="buttonForm" class="btn btn-primary d-grid w-100">Iniciar Sesión</button>
            </div>
          </form>


        </div>
      </div>
      
    </div>
  </div>
</div>




<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="<?= BASE_MEDIA?>assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?= BASE_MEDIA?>assets/vendor/libs/popper/popper.js"></script>
<script src="<?= BASE_MEDIA?>assets/vendor/js/bootstrap.js"></script>
<script src="<?= BASE_MEDIA?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="<?= BASE_MEDIA?>assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?= BASE_MEDIA?>assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="<?= BASE_MEDIA?>assets/js/main.js"></script>

<!-- Page JS -->
<script src="<?= BASE_MEDIA?>assets/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script  src="<?= BASE_MEDIA?>assets/js/buttons.js"></script>
<script  src="<?= BASE_MEDIA?>js/resource/login/index.js"></script>
</body>
</html>

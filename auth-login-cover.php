<?php

$showError = false;
$showAlert = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'config.php';
  if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $sql = "SELECT * FROM `employee` WHERE emp_user = '{$username}' AND emp_password = '{$password}'";
    $run = mysqli_query($con, $sql);

    if (mysqli_num_rows($run)) {
      session_start();
      $_SESSION["uname"] = "$username";
      header("location: view-task.php");
    } else {
      echo '<div class="alert alert-danger alert-dismissible w-100 position-fixed z-3  text-center" role="alert">
      Incoreect username and password !
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
      </button>
    </div>';
    }
  }
}

?>
<!DOCTYPE html>

<!-- beautify ignore:start -->


<html lang="en" class="light-style layout-wide  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

  
<!-- Mirrored from demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/auth-login-cover.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Dec 2023 07:20:20 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login Cover - Pages</title>

    
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/vuexy_admin">
    
    
    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5J3LMKC');</script>
    <!-- End Google Tag Manager -->
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./logo.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,4../../assetsby00;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/tabler-icons.css"/>
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" /> 
    <!-- Vendor -->
<link rel="stylesheet" href="assets/vendor/libs/%40form-validation/umd/styles/index.min.css" />

    <!-- Page CSS -->
    <!-- Page -->
<link rel="stylesheet" href="assets/vendor/css/pages/page-auth.css">

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
    
</head>

<body>

  
  <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
  <!-- Content -->

<div class="authentication-wrapper authentication-cover authentication-bg">
  <div class="authentication-inner row">
    <!-- Login -->
    <div class="d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4 mx-auto">
      <div class="w-px-400 mx-auto">
  
        <!-- Logo -->
        <div class="app-brand mb-4">
          <a href="index-2.html" class="app-brand-link gap-2">
            <span class="app-brand-logo demo " style="height:200px; width:300px;">
            <img src="./logo.png"style="height:300px; width:300px;">
          </span>
          </a>
        </div>
        <!-- /Logo -->
        <h3 class="mb-1">Welcome to User panel 👋</h3>

        <form id="" class="mb-3" action="auth-login-cover.php" method="POST" autocomplete="off">
          <div class="mb-3">
            <label for="email" class="form-label">Username</label>
            <input type="text" class="form-control" id="email" name="username" placeholder="Enter your username" autofocus>
          </div>
          <div class="mb-3 form-password-toggle">
            <div class="d-flex justify-content-between">
              <label class="form-label" for="password">Password</label>
            </div>
            <div class="input-group input-group-merge">
              <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
              <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
            </div>
          </div>
          <button class=" col-12 btn btn-primary" type="submit" name="login">
            login
          </button>
          
        </form>
      </div>
    </div>
    <?php
    if ($showError) {
      echo " error";
    }
    ?>
    <!-- /Login -->
  </div>
</div>

<!-- / Content -->


  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  
  <script src="assets/vendor/libs/jquery/jquery.js"></script>
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/node-waves/node-waves.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="assets/vendor/libs/hammer/hammer.js"></script>
  <script src="assets/vendor/libs/i18n/i18n.js"></script>
  <script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>
   <script src="assets/vendor/js/menu.js"></script>
  
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="assets/vendor/libs/%40form-validation/umd/bundle/popular.min.js"></script>
<script src="assets/vendor/libs/%40form-validation/umd/plugin-bootstrap5/index.min.js"></script>
<script src="assets/vendor/libs/%40form-validation/umd/plugin-auto-focus/index.min.js"></script>

  <!-- Main JS -->
  <script src="assets/js/main.js"></script>
  

  <!-- Page JS -->
  <script src="assets/js/pages-auth.js"></script>

  <script>
    function error(){
      let error = document.getElementById('error-msg');
      error.innerHTML = `<div class='alert alert-danger position-fixed z-3 w-100 text-center' role='alert' >
        Incorrect username and password !
        </div>`;
    }
  </script>
  
</body>
</html>

<!-- beautify ignore:end -->
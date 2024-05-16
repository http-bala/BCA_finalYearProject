<?php
include 'config.php';
session_start();

if (!isset($_SESSION['name'])) {
  header("location: auth-login-cover.php");
}
?>
<!DOCTYPE html>

<!-- beautify ignore:start -->


<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

  
<!-- Mirrored from demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Dec 2023 07:16:09 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>working page</title>

    
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
    <link rel="icon" type="image/x-icon" href="logo.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/tabler-icons.css"/>
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template--core-css" />
    <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" class="template--theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" /> 
    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />
<link rel="stylesheet" href="assets/vendor/libs/swiper/swiper.css" />
<link rel="stylesheet" href="assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
<link rel="stylesheet" href="assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
<link rel="stylesheet" href="assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css">

    <!-- Page CSS -->
    <link rel="stylesheet" href="assets/vendor/css/pages/cards-advance.css" />

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <!--! Template  & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template : To hide  set display value false in config.js.  -->
    <script src="assets/vendor/js/template-.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
    
</head>

<body>

  
  <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
  <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
  <div class="layout-container">

    
    




<!-- Menu -->

<?php include 'menu.php'; ?>
<!-- / Menu -->

    

    <!-- Layout container -->
<div class="layout-page">
      
      



<!-- Navbar -->

<?php include('search-bar.php'); ?>

<!-- / Navbar -->

      

      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            

<div class="row">
      <!-- Website Analytics -->
      <div class="col-lg-3 mb-4">
        <div class="swiper-container swiper-container-horizontal swiper swiper-card-advance-bg" id="swiper-with-pagination-cards">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="row">
                <div class="col-12">
                  <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
                  <small>Total 28.5% Conversion Rate</small>
                </div>
                <div class="row">
                  <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                    <h6 class="text-white mt-0 mt-md-3 mb-3">Traffic</h6>
                    <div class="row">
                      <div class="col-6">
                        <ul class="list-unstyled mb-0">
                          <li class="d-flex mb-4 align-items-center">
                            <p class="mb-0 fw-medium me-2 website-analytics-text-bg">3.1k</p>
                            <p class="mb-0">Page Views</p>
                          </li>
                          <li class="d-flex align-items-center mb-2">
                            <p class="mb-0 fw-medium me-2 website-analytics-text-bg">12%</p>
                            <p class="mb-0">Conversions</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="row">
                <div class="col-12">
                  <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
                  <small>Total 28.5% Conversion Rate</small>
                </div>
                <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                  <h6 class="text-white mt-0 mt-md-3 mb-3">Spending</h6>
                  <div class="row">
                    <div class="col-6">
                      <ul class="list-unstyled mb-0">
                        <li class="d-flex mb-4 align-items-center">
                          <p class="mb-0 fw-medium me-2 website-analytics-text-bg">18</p>
                          <p class="mb-0">Order Size</p>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                          <p class="mb-0 fw-medium me-2 website-analytics-text-bg">2.3k</p>
                          <p class="mb-0">Items</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="row">
                <div class="col-12">
                  <h5 class="text-white mb-0 mt-2">Website Analytics</h5>
                  <small>Total 28.5% Conversion Rate</small>
                </div>
                <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                  <h6 class="text-white mt-0 mt-md-3 mb-3">Revenue Sources</h6>
                  <div class="row">
                    <div class="col-6">
                      <ul class="list-unstyled mb-0">
                        <li class="d-flex mb-4 align-items-center">
                          <p class="mb-0 fw-medium me-2 website-analytics-text-bg">890</p>
                          <p class="mb-0">Organic</p>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                          <p class="mb-0 fw-medium me-2 website-analytics-text-bg">1.2k</p>
                          <p class="mb-0">Campaign</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <!--/ Website Analytics -->

      <!-- Sales Overview -->
      <div class="col-lg-3 col-sm-6 mb-4">
        <div class="card">
          <div class="card-header">
            <div class="d-flex justify-content-between">
              <small class="d-block mb-1 text-muted">Sales Overview</small>
              <p class="card-text text-success">+18.2%</p>
            </div>
            <h4 class="card-title mb-1">$42.5k</h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-4">
                <div class="d-flex gap-2 align-items-center mb-2">
                  <span class="badge bg-label-info p-1 rounded"><i class="ti ti-shopping-cart ti-xs"></i></span>
                  <p class="mb-0">Order</p>
                </div>
                <h5 class="mb-0 pt-1 text-nowrap">62.2%</h5>
                <small class="text-muted">6,440</small>
              </div>
              <div class="col-4">
                <div class="divider divider-vertical">
                  <div class="divider-text">
                    <span class="badge-divider-bg bg-label-secondary">VS</span>
                  </div>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="d-flex gap-2 justify-content-end align-items-center mb-2">
                  <p class="mb-0">Visits</p>
                  <span class="badge bg-label-primary p-1 rounded"><i class="ti ti-link ti-xs"></i></span>
                </div>
                <h5 class="mb-0 pt-1 text-nowrap ms-lg-n3 ms-xl-0">25.5%</h5>
                <small class="text-muted">12,749</small>
              </div>
            </div>
            <div class="d-flex align-items-center mt-4">
              <div class="progress w-100" style="height: 8px;">
                <div class="progress-bar bg-info" style="width: 70%" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Sales Overview -->

      <!-- Revenue Generated -->
      <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
        <div class="card">
          <div class="card-body pb-0">
            <div class="card-icon">
              <span class="badge bg-label-success rounded-pill p-2">
                <i class='ti ti-credit-card ti-sm'></i>
              </span>
            </div>
            <h5 class="card-title mb-0 mt-2">97.5k</h5>
            <small>Revenue Generated</small>
          </div>
          <div id="revenueGenerated"></div>
        </div>
      </div>
      <!--/ Revenue Generated -->
      
      <!-- Sales Overview -->
      <div class="col-lg-3 col-sm-6 mb-4">
        <div class="card">
          <div class="card-header">
            <div class="d-flex justify-content-between">
              <small class="d-block mb-1 text-muted">Sales Overview</small>
              <p class="card-text text-success">+18.2%</p>
            </div>
            <h4 class="card-title mb-1">$42.5k</h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-4">
                <div class="d-flex gap-2 align-items-center mb-2">
                  <span class="badge bg-label-info p-1 rounded"><i class="ti ti-shopping-cart ti-xs"></i></span>
                  <p class="mb-0">Order</p>
                </div>
                <h5 class="mb-0 pt-1 text-nowrap">62.2%</h5>
                <small class="text-muted">6,440</small>
              </div>
              <div class="col-4">
                <div class="divider divider-vertical">
                  <div class="divider-text">
                    <span class="badge-divider-bg bg-label-secondary">VS</span>
                  </div>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="d-flex gap-2 justify-content-end align-items-center mb-2">
                  <p class="mb-0">Visits</p>
                  <span class="badge bg-label-primary p-1 rounded"><i class="ti ti-link ti-xs"></i></span>
                </div>
                <h5 class="mb-0 pt-1 text-nowrap ms-lg-n3 ms-xl-0">25.5%</h5>
                <small class="text-muted">12,749</small>
              </div>
            </div>
            <div class="d-flex align-items-center mt-4">
              <div class="progress w-100" style="height: 8px;">
                <div class="progress-bar bg-info" style="width: 70%" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ Sales Overview -->


    </div>
  </div>
          <!-- / Content -->

          
          

<!-- Footer -->
<?php include 'footer.php'; ?>

</footer>
<!-- / Footer -->

          
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    
    
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    
    
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
    
  </div>
  <!-- / Layout wrapper -->

  
  

  

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
  <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>
<script src="assets/vendor/libs/swiper/swiper.js"></script>
<script src="assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>

  <!-- Main JS -->
  <script src="assets/js/main.js"></script>
  

  <!-- Page JS -->
  <script src="assets/js/dashboards-analytics.js"></script>
  
</body>


<!-- Mirrored from demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Dec 2023 07:16:51 GMT -->
</html>

<!-- beautify ignore:end -->
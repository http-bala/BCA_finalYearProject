<?php
include 'config.php';
session_start();

if (!isset($_SESSION['name'])) {
  header("location: auth-login-cover.php");
}
?>


<!DOCTYPE html>



<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">


<!-- Mirrored from demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/form-layouts-vertical.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Dec 2023 07:21:08 GMT -->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>VIEW COMPLETE TASK DETAILS</title>


  <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
  <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://1.envato.market/vuexy_admin">


  <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        '../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5J3LMKC');
  </script>
  <!-- End Google Tag Manager -->

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="logo.png" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap" rel="stylesheet">

  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css" />
  <link rel="stylesheet" href="assets/vendor/fonts/tabler-icons.css" />
  <link rel="stylesheet" href="assets/vendor/fonts/flag-icons.css" />
  <!-- extra files  -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


  <!-- Core CSS -->
  <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="assets/vendor/libs/node-waves/node-waves.css" />
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />
  <link rel="stylesheet" href="assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
  <link rel="stylesheet" href="assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
  <link rel="stylesheet" href="assets/vendor/libs/flatpickr/flatpickr.css" />
  <link rel="stylesheet" href="assets/vendor/libs/select2/select2.css" />
  <link rel="stylesheet" href="assets/vendor/libs/%40form-validation/umd/styles/index.min.css" />
  <link rel="stylesheet" href="assets/vendor/libs/bs-stepper/bs-stepper.css" />

  <!-- Page CSS -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <!-- Helpers -->
  <script src="assets/vendor/js/helpers.js"></script>
  <script src="assets/vendor/js/template-customizer.js"></script>
  <script src="assets/js/config.js"></script>
  <!-- ================================================= -->
</head>

<body>
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
        <?php include 'search-bar.php'; ?>
        <!-- / Navbar -->
        <!-- Content wrapper -->
        <div class="content-wrapper">


          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">COMPLETE-TASK/</span>DETAILS </h4>

            <!-- ===================================================== -->
            <div class="card mb-3 ">
              <div class="card-body">
                <form action="" method="POST" >
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                          <label for="">FROM:</label>
                          <input type="date" name="form" class="form-control" placeholder="FORM" id="">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                          <label for="">TO:</label>
                          <input type="date" name="to" class="form-control" placeholder="FORM" id="">
                      </div>
                    </div>
                    <div class="col-md-3 d-flex  align-items-center" style="margin:20px">
                      <div class="form-group  align-items-center">
                         <button type="submit" name="bala" class="btn btn-outline-primary  align-items-center" style="background: blue; color:aliceblue;">Filter</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- ===================================================== -->

              <div class="container">
              <table id="example" class="table table-striped table-bordered dataTable display" cellspacing="0" width="100%">
              <thead class="table table-dark bg-dark">
                <tr>
                  <th>Sr.no</th>
                  <th>Company name</th>
                  <th>employee User-id</th>
                  <th>Date & Time</th>
                  <th>Complete Task description </th>
                  <th>IMAGE</th>
                  <!-- <th>action</th> -->
                </tr>
              </thead>
              <tbody>
                <?php
              
                if (isset($_POST['form']) && isset($_POST['to'])) {
                  $form = $_POST['form'];
                  $to = $_POST['to'];
                  $sql = "SELECT * FROM `cmplete_task` WHERE `curent_date_time` BETWEEN '$form' AND '$to'";
                }else {
                  $sql = "SELECT * FROM `cmplete_task`";
                }
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result) > 0) {
                  $a = 0;
                  while ($data = mysqli_fetch_assoc($result)) {
                    $date = date("d M,Y",strtotime($data['curent_date_time']))
                ?><tr>
                <td><?php  echo $a += 1; ?></td>
                      <td><?php echo $data['company_name'] ?></td>
                      <td><?php echo $data['employe_name'] ?></td>
                      <td><?php echo $date ?></td>
                      <td><?php echo $data['work_details'] ?></td>
                      <td><img src="./upload/<?php echo $data['upload_img'];?>" style="width: 50px; broder-radius: 50%;"></td>
                      <!-- <td>
                        <a class="btn btn-danger" href="delete-taskdata.php?sid="><i class="fa-solid fa-trash-can"></i></a>
                      </td> -->
                    </tr>
                <?php
                  }
                }
                ?>

              </tbody>
            </table>
              </div>

            <!-- show modal -->
            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div class="footer-container d-flex align-items-center justify-content-center py-2 flex-md-row flex-column">
                  <div>
                    © <script>
                      document.write(new Date().getFullYear())
                      document.write(new Date().getDate())
                    </script>, made with ❤️ by <a href="" target="_blank" class="fw-medium">balakrishna</a>
                  </div>
                  <div class="d-none d-lg-inline-block">
                  </div>
                </div>
              </div>
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
    <script src="assets/vendor/libs/cleavejs/cleave.js"></script>
    <script src="assets/vendor/libs/cleavejs/cleave-phone.js"></script>
    <script src="assets/vendor/libs/select2/select2.js"></script>
    <script src="assets/vendor/libs/%40form-validation/umd/bundle/popular.min.js"></script>
    <script src="assets/vendor/libs/%40form-validation/umd/plugin-bootstrap5/index.min.js"></script>
    <script src="assets/vendor/libs/%40form-validation/umd/plugin-auto-focus/index.min.js"></script>
    <script src="assets/vendor/libs/bs-stepper/bs-stepper.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="assets/js/form-layouts.js"></script>

    <!-- stackoverflow datatables link -->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
    <!-- datatable links -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-1.13.8/b-2.4.2/b-html5-2.4.2/b-print-2.4.2/datatables.min.js"></script>

    <script>
      $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
          'copyHtml5', 'excelHtml5', 'pdfHtml5', 'csvHtml5'
        ]
      });
    </script>
</body>

</html>
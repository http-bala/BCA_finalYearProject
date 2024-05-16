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

  <title>view data-form</title>


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
  <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css"> -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <!-- <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script> -->


  <!-- Core CSS -->
  <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
  <!-- <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" /> -->
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
  <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" /> -->
  <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->

  <!-- <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script> -->
  <!-- Helpers -->
  <script src="assets/vendor/js/helpers.js"></script>
  <script src="assets/vendor/js/template-customizer.js"></script>
  <script src="assets/js/config.js"></script>
  <style>
        body {
            background-color: #f8f9fa;
            text-transform: capitalize;
        }

        .employee-details {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .employee-details h2 {
            background-color: #685DD8;
            color: #fff;
            padding: 15px;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .detail {
            margin-bottom: 10px;
            /* display: inline-block; */
            display: flex;
            flex-direction: row;
            
        }

        .detail label {
            font-weight: bold;
            color: #685DD8;
        }

        .detail span {
            display: block;
            color: #333;
            /* margin-top: 5px; */
        }

         img{
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 5px solid #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
    </style>
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

        <?php  
          $id = $_GET['eid'];
          $sql = "SELECT * FROM `employee` WHERE `id` = $id ";
          $query = mysqli_query($con,$sql);
          $data = mysqli_fetch_assoc($query);          
        ?>

          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">EMPLOYEE/</span>DETAILS </h4>
            <div class="container mt-3 w-75 ">
              <div class="employee-details ">
                <h2 class="mb-4">Employee Details</h2>
                <div class="row px-5 ">
                  <div class="col-6 mt-5">
                    <div class="detail">
                      <label for="employee Name">employee name:</label>
                      <span><?php echo $data['emp_name']; ?></span>
                    </div>
                    <div class="detail">
                      <label for="employee code">employee code:</label>
                      <span><?php echo $data['emp_code']; ?></span>
                    </div>
                    <div class="detail">
                      <label for="employee Name">employee username:</label>
                      <span><?php echo $data['emp_user']; ?></span>
                    </div>
                    <div class="detail">
                      <label for="employee Name">employee designation:</label>
                      <span><?php echo $data['emp_designation']; ?></span>
                    </div>
                    <div class="detail">
                      <label for="employee Name">employee company:</label>
                      <span><?php echo $data['emp_company']; ?></span>
                    </div>
                  </div>
                  <div class="col-6 ">
                    <div class="img">
                      <img src="./upload/<?php echo $data['profile']; ?>" alt="" srcset="">
                    </div>
                  </div>
                </div>
                <div class="row px-5">
                  <div class="col-md-6">
                    <div class="detail">
                      <label for="department">Department:</label>
                      <span id="department"><?php echo $data['emp_department']; ?></span>
                    </div>
                    <div class="detail">
                      <label for="shift">Shift:</label>
                      <span id="shift"><?php echo $data['emp_shifttime']; ?></span>
                    </div>
                    <div class="detail">
                      <label for="pan-number">PAN Number:</label>
                      <span id="pan-number"><?php echo $data['emp_pan']; ?></span>
                    </div>
                    <div class="detail">
                      <label for="dob">Date of Birth:</label>
                      <span id="dob"><?php echo $data['emp_dob']; ?></span>
                    </div>
                    <div class="detail">
                      <label for="date-of-joining">Date of Joining:</label>
                      <span id="date-of-joining"><?php echo $data['emp_doj']; ?></span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="detail">
                      <label for="email">Email:</label>
                      <span id="email"><?php echo $data['emp_mail']; ?></span>
                    </div>
                    <div class="detail">
                      <label for="bank-name">Bank Name:</label>
                      <span id="bank-name"><?php echo $data['emp_bankname']; ?></span>
                    </div>
                    <div class="detail">
                      <label for="bank-account">Bank Account No:</label>
                      <span id="bank-account"><?php echo $data['emp_bankname']; ?></span>
                    </div>
                    <div class="detail">
                      <label for="total-pays-days">Total Pays Days:</label>
                      <span id="total-pays-days"><?php echo $data['emp_tpd']; ?></span>
                    </div>
                    <div class="detail">
                      <label for="basic-salary">Basic Salary:</label>
                      <span id="basic-salary"><?php echo $data['emp_tpd']; ?></span>
                    </div>
                    <!-- Add more details here -->
                  </div>
                </div>
                <button class="btn btn-primary mt-3 mx-5  " onclick="printEmployeeDetails()">Print Details</button>
              </div>
            </div>
            <!-- show modal -->
            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div class="footer-container d-flex align-items-center justify-content-center py-2 flex-md-row flex-column">
                  <div>
                    © <script>
                      document.write(new Date().getFullYear())
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
          function printEmployeeDetails() {
        window.print();
    }
      $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
          'copyHtml5', 'excelHtml5', 'pdfHtml5', 'csvHtml5'
        ]
      });
    </script>
</body>

</html>
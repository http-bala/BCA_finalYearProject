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

    <title> Vertical Layouts - Forms | Vuexy - Bootstrap Admin Template </title>


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
    <link rel="icon" type="image/x-icon" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="assets/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="assets/vendor/libs/animate-css/animate.css" />
    <link rel="stylesheet" href="assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="assets/vendor/libs/sweetalert2/sweetalert2.css" />

    <!-- Page CSS -->
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

                        <!-- respone msg -->
                        <div id="msg">

                        </div>
                        <h4 class="py-3 mb-4"><span class="text-muted fw-light">EDIT-</span>EMPOLYEE</h4>

                        <!-- Basic Layout -->
                        <div class="row">
                            <div class="col-xl">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Add-Employee</h5> <small class="text-muted float-end">Details</small>
                                    </div>
                                    <div class="card-body">
                                        <?php

                                        include 'config.php';

                                        $id = $_GET['sid'];

                                        $sql = "SELECT * FROM  `employee` WHERE `id` = {$id}";
                                        $result = mysqli_query($con, $sql);


                                        if (mysqli_num_rows($result) > 0) {
                                            while ($data = mysqli_fetch_assoc($result)) {

                                        ?>
                                                <form class="row g-3 needs-validation" novalidate autocomplete="off" id="submit-form">

                                                 

                                                    <div class="col-md-4">
                                                        <label for="validationCustom01" class="form-label">Employee Name</label>
                                                        <input type="hidden" class="form-control" id="fname" value="<?php echo $data['id']?>" name="id" placeholder="Employee Name" required>
                                                        <input type="text" class="form-control" id="fname" value="<?php echo $data['emp_name']?>" name="empname" placeholder="Employee Name" required>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="validationCustom02" class="form-label">Employee Code</label>
                                                        <input type="text" class="form-control" id="empcode"  value="<?php echo $data['emp_code']?>" name="empcode" placeholder="Employee Code" readonly required>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="validationCustomUsername" class="form-label">Username</label>
                                                        <div class="input-group has-validation">
                                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                            <input type="text" class="form-control" id="empusername"  value="<?php echo $data['emp_user']?>" name="empusername" aria-describedby="inputGroupPrepend" placeholder="Username" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="validationCustom03" class="form-label">designation</label>
                                                        <input type="Email" class="form-control" id="email"  value="<?php echo $data['emp_designation']?>" name="empdesignation" placeholder="designation" required>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="validationCustom02" class="form-label">company name</label>
                                                        <select class="select2 form-select form-select-lg select2-hidden-accessible" name="empcompany" aria-label="Default select example" id="select-company" name="company">
                                                            <option selected>  <?php echo $data['emp_company']?> </option>
                                                            <?php
                                                            $sql1 = "SELECT * FROM `company`";
                                                            $result1 = mysqli_query($con, $sql1);
                                                            if (mysqli_num_rows($result1) > 0) {
                                                                while ($data1 = mysqli_fetch_assoc($result1)) {
                                                            ?>
                                                                    <option value="<?php echo $data1['c_name'] ?>"><?php echo $data1['c_name'] ?></option>
                                                            <?php
                                                                }
                                                            } ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="validationCustom03" class="form-label">Password</label>
                                                        <input type="text" class="form-control" id="password"  value="<?php echo $data['emp_password']?>" name="emppassword" placeholder="Password" required>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="validationCustom03" class="form-label">Department</label>
                                                        <input type="Email" class="form-control" id="phone"  value="<?php echo $data['emp_department']?>" name="empdepartment" placeholder="Department" required>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="validationCustom02" class="form-label">Shift employee</label>
                                                        <select class="select2 form-select form-select-lg select2-hidden-accessible" name="shifttime" aria-label="Default select example" id="select-shift">
                                                            <option value="08:00:00" selected>Day Shift</option>
                                                            <option value="20:00:00">Night Shift</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="validationCustom04" class="form-label">PAN Number</label>
                                                        <input type="text" class="form-control" id="State"  value="<?php echo $data['emp_pan']?>" name="emppan" placeholder="PAN Number" required>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="validationCustom05" class="form-label">Date of Birth</label>
                                                        <input type="date" class="form-control" id="zipcode"  value="<?php echo $data['emp_dob']?>" name="empdob" required>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="validationCustom05" class="form-label">Date of joining</label>
                                                        <input type="date" class="form-control" id="zipcode"  value="<?php echo $data['emp_doj']?>" name="empdoj" required>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="validationCustom05" class="form-label">Mail id</label>
                                                        <input type="email" class="form-control" id="zipcode"  value="<?php echo $data['emp_mail']?>" name="empmail" placeholder="Mail id" required>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="validationCustom05" class="form-label">Bank Name</label>
                                                        <input type="email" class="form-control" id="zipcode"  value="<?php echo $data['emp_bankname']?>" name="empbankname" placeholder="Bank Name" required>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="validationCustom05" class="form-label">Bank A/C no</label>
                                                        <input type="email" class="form-control" id="zipcode"  value="<?php echo $data['emp_bankAC']?>" name="empbankac" placeholder="Bank A/C no" required>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="validationCustom05" class="form-label">Total Pays Days</label>
                                                        <input type="email" class="form-control" id="zipcode"  value="<?php echo $data['emp_tpd']?>" name="empTPD" placeholder="Total pays days" required>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="validationCustom05" class="form-label">Basic Salary</label>
                                                        <input type="email" class="form-control" id="zipcode"  value="<?php echo $data['emp_basicsalary']?>" name="empbasicSalary" placeholder="Basic Salary" required>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="validationCustom05" class="form-label">Profile Image</label>
                                                        <input type="file" class="form-control" id="zipcode"  value="<?php echo $data['profile']?>" name="profile" required>
                                                    </div>

                                                    <div class="col-12">
                                                        <button class="btn btn-success" id="sbtn" type="submit">Upload</button>
                                                        <a href="view-employee.php" class="btn btn-primary">back</a>
                                                    </div>
                                                </form>

                                        <?php

                                            }
                                        } ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- / Content -->
                        <!-- Footer -->
                        <?php include 'footer.php'; ?>
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
        <script src="assets/vendor/libs/cleavejs/cleave.js"></script>
        <script src="assets/vendor/libs/cleavejs/cleave-phone.js"></script>
        <script src="assets/vendor/libs/moment/moment.js"></script>
        <script src="assets/vendor/libs/flatpickr/flatpickr.js"></script>
        <script src="assets/vendor/libs/select2/select2.js"></script>
        <script src="assets/vendor/libs/sweetalert2/sweetalert2.js"></script>

        <!-- Main JS -->
        <script src="assets/js/main.js"></script>


        <!-- Page JS -->
        <script src="assets/js/form-layouts.js"></script>
        <script src="assets/js/extended-ui-sweetalert2.js"></script>
        <script>
            $("#submit-form").on("submit", function(e) {

                e.preventDefault();

                var fdata = new FormData(this);


                console.log(fdata);

                $.ajax({
                    type: "POST",
                    url: "update-employee.php",
                    data: fdata,
                    success: function(response) {
                        $("#msg").fadeIn();
                        $("#msg").html(response);
                        setTimeout(function() {
                            $("#msg").fadeOut("slow");
                            window.location.href = "view-employee.php";
                        }, 4000);
                    },
                    cache: false,
                    contentType: false,
                    processData: false

                });
            });
        </script>

</body>

</html>
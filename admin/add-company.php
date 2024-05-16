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
    <link rel="icon" type="image/x-icon" href="./favcion.png" />

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
    <!-- <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" /> -->
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
    <link rel="stylesheet" href="assets/vendor/libs/leaflet/leaflet.css" />
    <script src="assets/vendor/libs/leaflet/leaflet.js"></script>


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
                        <h4 class="py-3 mb-4"><span class="text-muted fw-light">ADD-</span>COMPANY</h4>

                        <!-- Basic Layout -->
                        <div class="row w-75 m-auto ">
                            <div class="col-xl">
                                <div class="card mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Add-Company</h5> <small class="text-muted float-end"></small>
                                    </div>
                                    <div class="card-body">
                                        <form class="row g-3 needs-validation" id="form" novalidate autocomplete="off">
                                            <div class="col-md-6">
                                                <label for="validationCustom01" class="form-label">COMAPANY NAME</label>
                                                <input type="text" class="form-control" id="cname" name="cname" placeholder="mark" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustom02" class="form-label">COMPANY ADDRESS</label>
                                                <input type="text" class="form-control" id="caddress" name="caddress" placeholder="das" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustomUsername" class="form-label">CONTACT</label>
                                                <div class="input-group has-validation">
                                                    <input type="text" class="form-control" id="contact" name="contact" aria-describedby="inputGroupPrepend" placeholder="mark123" required>
                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="validationCustom03" class="form-label">E-MAIL</label>
                                                <input type="Email" class="form-control" id="email" name="email" placeholder="mark@das.com" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid city.
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustom03" class="form-label">LOCATION</label>
                                                <input type="text" class="form-control" id="location" name="location" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid city.
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustom03" class="form-label">LATITUDE</label>
                                                <input type="Email" class="form-control" id="lat" name="latitude" placeholder="123.." readonly required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid city.
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="validationCustom04" class="form-label">LONGITUDE</label>
                                                <input type="text" class="form-control" id="long" name="longitude" readonly required>
                                                <div class="invalid-feedback">
                                                    Please select a valid state.
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-primary mx-3 " id="sbtn" type="submit">Submit</button>
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#basicModal">
                                                    Open Maps
                                                </button>
                                            </div>
                                        </form>
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

        <!-- ========================================this is a modal =========================================== -->
        <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="leaflet-map" id="basicMap"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- ========================================this is end a modal =========================================== -->


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
    <script src="assets/vendor/libs/leaflet/leaflet.js"></script>

    <script>
        // ==============================CURRENT LATITUDE & LONGITUDE =========================================
        function getlatlong() {
            navigator.geolocation.getCurrentPosition(success, geoerror);
        }

        getlatlong();

        function success(p) {
            console.log(p)
            let latitude = document.getElementById('lat');
            let long = document.getElementById('long');
            // console.log(p.coords.latitude)
            latitude.setAttribute("value", p.coords.latitude);
            long.setAttribute("value", p.coords.longitude);
            //  locate.setAttribute("value",state);

        }

        function geoerror() {
            alert('error');
        }
        // =================================leaflet js links ============================================================
        let lat = document.getElementById('lat').value;
            let long = document.getElementById('long').value;
        const basicMap = L.map('basicMap').setView([lat, long], 10);
        L.tileLayer('https://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="">BALAKRISHNA</a>',
            maxZoom: 18
        }).addTo(basicMap);


        // ==============================AJAX STORE IN DATABASE=====================================================

        $(document).ready(function() {
            $("#sbtn").click(function(e) {
                e.preventDefault();
                // $("#msg").html($("#form").serialize());
                $.ajax({
                    type: "POST",
                    url: "insert-company.php",
                    data: $("#form").serialize(),
                    success: function(data) {
                        $("#msg").fadeIn();
                        $("#msg").html(data);
                        setTimeout(()=>{
                            window.location.href = "view-company.php";
                        },2000)

                    }
                });
            });
        });


        //====================================================redirecting another page========================================
        function redirect() {
            window.location.href = "view-employee.php";
        }
    </script>

</body>

</html>
<?php
require "../includes/functions.php";
if(!isset($_SESSION['user'])) {
    header("location: ../auth/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<?php include("../includes/dashboard/dash-head.php") ?>


<body class="dashboard-page dashboard-nav-fixed">

    <!-- Dashboard Nav Start -->
    <?php include('../includes/dashboard/user-dash-nav.php') ?>
    <!-- Dashboard Nav End -->

    <!-- Dashboard Main Wrapper Start -->
    <main class="dashboard-main-wrapper">

        <!-- Dashboard Header Start -->
        <?php include("../includes/dashboard/user-dash-header.php") ?>
        <!-- Dashboard Header End -->


        <!-- Dashboard Content Start -->
        <div class="dashboard-content">

            <div class="container">
                <h4 class="dashboard-title">Dashboard</h4>

                <!-- Dashboard Info Start -->
                <div class="dashboard-info">
                    <div class="row gy-2 gy-sm-6">
                        <div class="col-md-4 col-sm-6">
                            <!-- Dashboard Info Card Start -->
                            <div class="dashboard-info__card">
                                <a class="dashboard-info__card-box" href="#">
                                    <div class="dashboard-info__card-icon icon-color-01">
                                        <i class="edumi edumi-open-book"></i>
                                    </div>
                                    <div class="dashboard-info__card-content">
                                        <div class="dashboard-info__card-value">19</div>
                                        <div class="dashboard-info__card-heading">Enrolled Courses</div>
                                    </div>
                                </a>
                            </div>
                            <!-- Dashboard Info Card End -->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!-- Dashboard Info Card Start -->
                            <div class="dashboard-info__card">
                                <a class="dashboard-info__card-box" href="#">
                                    <div class="dashboard-info__card-icon icon-color-02">
                                        <i class="edumi edumi-streaming"></i>
                                    </div>
                                    <div class="dashboard-info__card-content">
                                        <div class="dashboard-info__card-value">0</div>
                                        <div class="dashboard-info__card-heading">Active Courses</div>
                                    </div>
                                </a>
                            </div>
                            <!-- Dashboard Info Card End -->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!-- Dashboard Info Card Start -->
                            <div class="dashboard-info__card">
                                <a class="dashboard-info__card-box" href="#">
                                    <div class="dashboard-info__card-icon icon-color-03">
                                        <i class="edumi edumi-correct"></i>
                                    </div>
                                    <div class="dashboard-info__card-content">
                                        <div class="dashboard-info__card-value">27</div>
                                        <div class="dashboard-info__card-heading">Completed Courses</div>
                                    </div>
                                </a>
                            </div>
                            <!-- Dashboard Info Card End -->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!-- Dashboard Info Card Start -->
                            <div class="dashboard-info__card">
                                <div class="dashboard-info__card-box">
                                    <div class="dashboard-info__card-icon icon-color-04">
                                        <i class="edumi edumi-group"></i>
                                    </div>
                                    <div class="dashboard-info__card-content">
                                        <div class="dashboard-info__card-value">146</div>
                                        <div class="dashboard-info__card-heading">Total Students</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Dashboard Info Card End -->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!-- Dashboard Info Card Start -->
                            <div class="dashboard-info__card">
                                <div class="dashboard-info__card-box">
                                    <div class="dashboard-info__card-icon icon-color-05">
                                        <i class="edumi edumi-user-support"></i>
                                    </div>
                                    <div class="dashboard-info__card-content">
                                        <div class="dashboard-info__card-value">1</div>
                                        <div class="dashboard-info__card-heading">Total Courses</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Dashboard Info Card End -->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!-- Dashboard Info Card Start -->
                            <div class="dashboard-info__card">
                                <div class="dashboard-info__card-box">
                                    <div class="dashboard-info__card-icon icon-color-06">
                                        <i class="edumi edumi-coin"></i>
                                    </div>
                                    <div class="dashboard-info__card-content">
                                        <div class="dashboard-info__card-value"><span class="sale-price">$383.<small class="separator">01</small></span></div>
                                        <div class="dashboard-info__card-heading">Total Earnings</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Dashboard Info Card End -->
                        </div>
                    </div>
                </div>
                <!-- Dashboard Info End -->
            </div>


        </div>
        <!-- Dashboard Content End -->


    </main>
    <!-- Dashboard Main Wrapper End -->





    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="../assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="../assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="../assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="../assets/js/plugins/aos.js"></script>
    <script src="../assets/js/plugins/parallax.js"></script>
    <script src="../assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/jquery.powertip.min.js"></script>
    <script src="../assets/js/plugins/nice-select.min.js"></script>
    <script src="../assets/js/plugins/glightbox.min.js"></script>
    <script src="../assets/js/plugins/jquery.sticky-kit.min.js"></script>
    <script src="../assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="../assets/js/plugins/masonry.pkgd.min.js"></script>
    <script src="../assets/js/plugins/flatpickr.js"></script>
    <script src="../assets/js/plugins/range-slider.js"></script>
    <script src="../assets/js/plugins/select2.min.js"></script>


    <!-- Activation JS -->
    <script src="../assets/js/main.js"></script>


</body>

</html>
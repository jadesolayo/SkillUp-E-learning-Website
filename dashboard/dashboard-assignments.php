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

<body class="dashboard-page">

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
                <h4 class="dashboard-title">Assignments</h4>

                <!-- Dashboard Assignments Start -->
                <div class="dashboard-assignments">
                    <div class="dashboard-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="courses">Course Name</th>
                                    <th class="student">Total Mark</th>
                                    <th class="Total Submit">Course</th>
                                    <th class="action"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h3 class="dashboard-table__title">Assignments</h3>
                                        <h3 class="dashboard-table__title"><a href="#">Course: Consulting Approach to Problem Solving</a></h3>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Total Mark</div>
                                        <div class="dashboard-table__text">10</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Total Submit</div>
                                        <div class="dashboard-table__text">0</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__text">
                                            <a class="assignment-link" href="#"><i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3 class="dashboard-table__title">Assignments</h3>
                                        <h3 class="dashboard-table__title"><a href="#">Course: ENV 101: Introduction to Environmental Science</a></h3>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Total Mark</div>
                                        <div class="dashboard-table__text">10</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Total Submit</div>
                                        <div class="dashboard-table__text">1</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__text">
                                            <a class="assignment-link" href="#"><i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3 class="dashboard-table__title">Assignments</h3>
                                        <h3 class="dashboard-table__title"><a href="#">Course: Angular – The Complete Guide (2020 Edition)</a></h3>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Total Mark</div>
                                        <div class="dashboard-table__text">10</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Total Submit</div>
                                        <div class="dashboard-table__text">1</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__text">
                                            <a class="assignment-link" href="#"><i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3 class="dashboard-table__title">Assignments</h3>
                                        <h3 class="dashboard-table__title"><a href="#">Course: Become a Product Manager | Learn the Skills & Get the Job</a></h3>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Total Mark</div>
                                        <div class="dashboard-table__text">10</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Total Submit</div>
                                        <div class="dashboard-table__text">0</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__text">
                                            <a class="assignment-link" href="#"><i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3 class="dashboard-table__title">Assignments</h3>
                                        <h3 class="dashboard-table__title"><a href="#">Course: terst mihai Ghimciuc</a></h3>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Total Mark</div>
                                        <div class="dashboard-table__text">10</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Total Submit</div>
                                        <div class="dashboard-table__text">0</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__text">
                                            <a class="assignment-link" href="#"><i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3 class="dashboard-table__title">Assignments</h3>
                                        <h3 class="dashboard-table__title"><a href="#">Course: Photography</a></h3>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Total Mark</div>
                                        <div class="dashboard-table__text">10</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Total Submit</div>
                                        <div class="dashboard-table__text">1</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__text">
                                            <a class="assignment-link" href="#"><i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Dashboard Assignments End -->
            </div>


        </div>
        <!-- Dashboard Content End -->


    </main>
    <!-- Dashboard Main Wrapper End -->






    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="./assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="./assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="./assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="./assets/js/plugins/aos.js"></script>
    <script src="./assets/js/plugins/parallax.js"></script>
    <script src="./assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/jquery.powertip.min.js"></script>
    <script src="./assets/js/plugins/nice-select.min.js"></script>
    <script src="./assets/js/plugins/glightbox.min.js"></script>
    <script src="./assets/js/plugins/jquery.sticky-kit.min.js"></script>
    <script src="./assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="./assets/js/plugins/masonry.pkgd.min.js"></script>
    <script src="./assets/js/plugins/flatpickr.js"></script>
    <script src="./assets/js/plugins/range-slider.js"></script>
    <script src="./assets/js/plugins/select2.min.js"></script>


    <!-- Activation JS -->
    <script src="./assets/js/main.js"></script>


</body>

</html>
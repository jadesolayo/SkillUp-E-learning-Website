<?php
require "../includes/functions.php";
if (!isset($_SESSION['user'])) {
    header("location: ../auth/login.php");
    exit();
}

$user = $_SESSION["user"]; 
$userProfile = fetchUserProfile($user);

$userId = isset($_SESSION['user']) ? $_SESSION['user'] : null;
$enrolledCoursesCount = getEnrolledCoursesCount($userId);

if (!$userProfile) {
    // Handle the case where instructor details are not found
    echo "User details not found.";
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
                        <div class="col-md-6 col-sm-6">
                            <!-- Dashboard Info Card Start -->
                            <div class="dashboard-profile">
                                <div class="dashboard-profile__item">
                                    <div class="dashboard-profile__heading">First Name</div>
                                    <div class="dashboard-profile__content">
                                        <p>
                                            <?php echo $userProfile["user_firstname"]; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="dashboard-profile__item">
                                    <div class="dashboard-profile__heading">Last Name</div>
                                    <div class="dashboard-profile__content">
                                        <p>
                                            <?php echo $userProfile["user_lastname"]; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="dashboard-profile__item">
                                    <div class="dashboard-profile__heading">Username</div>
                                    <div class="dashboard-profile__content">
                                        <p>
                                            <?php echo $userProfile["user_username"]; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="dashboard-profile__item">
                                    <div class="dashboard-profile__heading">Email</div>
                                    <div class="dashboard-profile__content">
                                        <p>
                                            <?php echo $userProfile["user_email"]; ?>
                                        </p>
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
                                        <div class="dashboard-info__card-value"><?php echo $enrolledCoursesCount; ?></div>
                                        <div class="dashboard-info__card-heading">Enroled Courses</div>
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
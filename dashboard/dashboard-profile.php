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
                <h4 class="dashboard-title">My Profile</h4>

                <!-- Dashboard Profile Start -->
                <div class="dashboard-profile">

                    <div class="dashboard-profile__item">
                        <div class="dashboard-profile__heading">Registration Date</div>
                        <div class="dashboard-profile__content">
                            <p>Thu 26 Nov 2020, 04:15:28 am</p>
                        </div>
                    </div>
                    <div class="dashboard-profile__item">
                        <div class="dashboard-profile__heading">First Name</div>
                        <div class="dashboard-profile__content">
                            <p>Adeniyi</p>
                        </div>
                    </div>
                    <div class="dashboard-profile__item">
                        <div class="dashboard-profile__heading">Last Name</div>
                        <div class="dashboard-profile__content">
                            <p>David</p>
                        </div>
                    </div>
                    <div class="dashboard-profile__item">
                        <div class="dashboard-profile__heading">Username</div>
                        <div class="dashboard-profile__content">
                            <p>student</p>
                        </div>
                    </div>
                    <div class="dashboard-profile__item">
                        <div class="dashboard-profile__heading">Email</div>
                        <div class="dashboard-profile__content">
                            <p>student@edumall.com</p>
                        </div>
                    </div>
                    <div class="dashboard-profile__item">
                        <div class="dashboard-profile__heading">Phone Number</div>
                        <div class="dashboard-profile__content">
                            <p>09038332315</p>
                        </div>
                    </div>
                    <div class="dashboard-profile__item">
                        <div class="dashboard-profile__heading">Job Title</div>
                        <div class="dashboard-profile__content">
                            <p>________</p>
                        </div>
                    </div>
                    <div class="dashboard-profile__item">
                        <div class="dashboard-profile__heading">Bio</div>
                        <div class="dashboard-profile__content">
                            <p>𝗗𝗲𝗮𝗿 𝗘𝗻𝘁𝗿𝗲𝗽𝗿𝗲𝗻𝗲𝘂𝗿𝘀, 𝗶𝗳 𝘆𝗼𝘂 𝗸𝗻𝗼𝘄 𝘄𝗵𝗮𝘁 𝗶𝘀 𝗴𝗼𝗼𝗱 𝗳𝗼𝗿 𝘆𝗼𝘂, 𝗺𝗶𝗻𝗱 𝘁𝗵𝗲 𝗯𝘂𝘀𝗶𝗻𝗲𝘀𝘀 𝘁𝗵𝗮𝘁 𝗽𝗮𝘆𝘀 𝘆𝗼𝘂.</p>
                        </div>
                    </div>

                </div>
                <!-- Dashboard Profile End -->
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
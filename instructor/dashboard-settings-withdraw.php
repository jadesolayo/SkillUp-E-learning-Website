<?php
require "../includes/functions.php";
if(!isset($_SESSION['instructor'])) {
    header("location: ../auth/instructor-login.php");
    exit();
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<?php include("../includes/dashboard/dash-head.php") ?>

<body class="dashboard-page">

    <!-- Dashboard Nav Start -->
    <?php include('../includes/dashboard/instructor-dash-nav.php') ?>
    <!-- Dashboard Nav End -->

    


    <!-- Dashboard Main Wrapper Start -->
    <main class="dashboard-main-wrapper">

        <!-- Dashboard Header Start -->
        <?php include("../includes/dashboard/instructor-dash-header.php") ?>
        <!-- Dashboard Header End -->





        <!-- Dashboard Content Start -->
        <div class="dashboard-content">

            <div class="container">
                <h4 class="dashboard-title">Settings</h4>

                <!-- Dashboard Settings Start -->
                <div class="dashboard-settings">

                    <!-- Dashboard Tabs Start -->
                    <div class="dashboard-tabs-menu">
                        <ul>
                            <li><a href="dashboard-settings.html">Profile</a></li>
                            <li><a href="dashboard-settings-reset-password.html">Reset Password</a></li>
                            <li><a class="active" href="dashboard-settings-withdraw.html">withdraw</a></li>
                        </ul>
                    </div>
                    <!-- Dashboard Tabs End -->

                    <!-- Dashboard Settings withdraw Start -->
                    <div class="dashboard-content-box dashboard-wrap">
                        <h4 class="dashboard-content-box__title">Select a withdraw method</h4>

                        <form action="#">

                            <div class="dashboard-withdraw-method">

                                <div class="dashboard-withdraw-method__select">
                                    <input type="radio" id="withdraw1" name="withdraw" class="dashboard-withdraw-method__select-input" checked>
                                    <label class="dashboard-withdraw-method__label" for="withdraw1">
                                        <span class="method-name">Bank Transfer</span>
                                        <span class="method-amount">Min withdraw <span class="price">$80.00</span> </span>
                                    </label>
                                </div>
                                <div class="dashboard-withdraw-method__select">
                                    <input type="radio" id="withdraw2" name="withdraw" class="dashboard-withdraw-method__select-input">
                                    <label class="dashboard-withdraw-method__label" for="withdraw2">
                                        <span class="method-name">E-Check</span>
                                        <span class="method-amount">Min withdraw <span class="price">$80.00</span> </span>
                                    </label>
                                </div>
                                <div class="dashboard-withdraw-method__select">
                                    <input type="radio" id="withdraw3" name="withdraw" class="dashboard-withdraw-method__select-input">
                                    <label class="dashboard-withdraw-method__label" for="withdraw3">
                                        <span class="method-name">PayPal</span>
                                        <span class="method-amount">Min withdraw <span class="price">$80.00</span> </span>
                                    </label>
                                </div>

                            </div>

                            <div class="dashboard-withdraw-method-form-wrap">

                                <div class="dashboard-withdraw-method-form">
                                    <!-- Account Account details Start -->
                                    <div class="dashboard-content__input">
                                        <label class="form-label-02">Account Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <!-- Account Account details End -->

                                    <!-- Account Account details Start -->
                                    <div class="dashboard-content__input">
                                        <label class="form-label-02">Account Number</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <!-- Account Account details End -->

                                    <!-- Account Account details Start -->
                                    <div class="dashboard-content__input">
                                        <label class="form-label-02">Bank Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <!-- Account Account details End -->

                                    <!-- Account Account details Start -->
                                    <div class="dashboard-content__input">
                                        <label class="form-label-02">IBAN</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <!-- Account Account details End -->

                                    <!-- Account Account details Start -->
                                    <div class="dashboard-content__input">
                                        <label class="form-label-02">BIC / SWIFT</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <!-- Account Account details End -->
                                </div>

                            </div>

                        </form>
                    </div>
                    <!-- Dashboard Settings withdraw End -->

                </div>
                <!-- Dashboard Settings End -->
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
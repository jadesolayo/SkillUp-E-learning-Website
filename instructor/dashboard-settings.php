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
                            <li><a class="active" href="dashboard-settings.php">Profile</a></li>
                            <li><a href="dashboard-settings-reset-password.php">Reset Password</a></li>
                        </ul>
                    </div>
                    <!-- Dashboard Tabs End -->

                    <form action="#">
                        <div class="row gy-6">
                            <div class="col-lg-6">

                                <!-- Dashboard Settings Info Start -->
                                <div class="dashboard-content-box">

                                    <h4 class="dashboard-content-box__title">Contact information</h4>
                                    <p>Provide your details below to create your account profile</p>

                                    <div class="row gy-4">
                                        <div class="col-md-6">
                                            <!-- Account Account details Start -->
                                            <div class="dashboard-content__input">
                                                <label class="form-label-02">First name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <!-- Account Account details End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Account Account details Start -->
                                            <div class="dashboard-content__input">
                                                <label class="form-label-02">Last name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <!-- Account Account details End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Account Account details Start -->
                                            <div class="dashboard-content__input">
                                                <label class="form-label-02">Job Title</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <!-- Account Account details End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Account Account details Start -->
                                            <div class="dashboard-content__input">
                                                <label class="form-label-02">Phone Number</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <!-- Account Account details End -->
                                        </div>
                                        <div class="col-md-12">
                                            <!-- Account Account details Start -->
                                            <div class="dashboard-content__input">
                                                <label class="form-label-02">Bio</label>
                                                <textarea class="form-control"></textarea>
                                            </div>
                                            <!-- Account Account details End -->
                                        </div>
                                        
                                    </div>

                                </div>
                                <!-- Dashboard Settings Info End -->

                            </div>
                            <div class="col-lg-6">

                                <!-- Dashboard Settings Info Start -->
                                <div class="dashboard-content-box">

                                    <h4 class="dashboard-content-box__title">Photo</h4>
                                    <p>Upload your profile photo.</p>

                                    <div id="dashboard-profile-cover-photo-editor" class="dashboard-settings-profile">
                                        <input id="dashboard-photo-dialogue-box" class="dashboard-settings-profile__input" type="file" accept=".png,.jpg,.jpeg" />

                                        <div id="dashboard-cover-area" class="dashboard-settings-profile__cover" data-fas lback="assets/images/cover-photo.jpg" style="background-image:url(assets/images/cover-photo.jpg)">
                                            <span class="cover-deleter">
                                                <i class="fas fa-trash-alt"></i>
                                            </span>
                                            <div class="overlay">
                                                <button class="cover-uploader" type="button">
                                                    <i class="fas fa-camera"></i>&nbsp;
                                                    <span>Update Cover Photo</span>
                                                </button>
                                            </div>
                                        </div>

                                        <div id="photo-meta-area" class="dashboard-settings-profile__photo-meta">
                                            <img src="assets/images/info-icon.svg" alt="icon" />
                                            <span>Profile Photo Size: <strong>200x200</strong> pixels,</span>
                                            <span>Cover Photo Size: <strong>700x430</strong> pixels,</span>
                                            <span class="loader-area">Saving&hellip;</span>
                                        </div>

                                        <div id="profile-photo" class="dashboard-settings-profile__photo" data-fas lback="assets/images/avatar-placeholder.jpg" style="background-image:url(assets/images/avatar-placeholder.jpg)">
                                            <div class="overlay">
                                                <i class="fas fa-camera"></i>
                                            </div>
                                        </div>

                                        <div id="profile-photo-option" class="dashboard-settings-profile__photo-option">
                                            <span class="profile-photo-uploader"><i class="fas fa-upload"></i> Upload Photo</span>
                                            <span class="profile-photo-deleter"><i class="fas fa-trash-alt"></i> Delete</span>
                                        </div>
                                    </div>

                                    <div class="dashboard-settings-profile-info">
                                        <label class="dashboard-settings-profile-info__display-name">Display name publicly as</label>
                                        <select>
                                            <option>student</option>
                                            <option>Adeniyi</option>
                                            <option>David</option>
                                            <option selected="selected">Adeniyi David</option>
                                            <option>David Adeniyi</option>
                                        </select>
                                        <p class="dashboard-settings-profile-info__description">The display name is shown in all public fields, such as the author name, instructor name, student name, and name that will be printed on the certificate.</p>
                                    </div>

                                </div>
                                <!-- Dashboard Settings Info End -->
                                <div class="dashboard-settings__btn">
                            <button class="btn btn-primary btn-hover-secondary">Delete Account</button>
                        </div>

                            </div>
                        </div>

                        <div class="dashboard-settings__btn">
                            <button class="btn btn-primary btn-hover-secondary">Update Profile</button>
                        </div>
                    </form>

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
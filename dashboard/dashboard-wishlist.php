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
                <h4 class="dashboard-title">Wishlist</h4>

                <!-- Dashboard Wishlist Start -->
                <div class="dashboard-wishlist">
                    <div class="row gy-6">
                        <div class="col-xxl-3 col-lg-4 col-md-6">

                            <!-- Course Start -->
                            <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                <div class="course-header">
                                    <div class="course-header__thumbnail rounded-0">
                                        <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-2.jpg" alt="courses" width="330" height="220"></a>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-all">All Levels</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Productivity</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Time Management Mastery: Do More, Stress Less</a></h3>
                                    <div class="course-info-02__description">
                                        <p>If you’re someone who has a LOT on their plate …</p>
                                    </div>
                                    <div class="course-info-02__price">
                                        <span class="sale-price">$39.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">

                            <!-- Course Start -->
                            <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                <div class="course-header">
                                    <div class="course-header__thumbnail rounded-0">
                                        <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-3.jpg" alt="courses" width="330" height="220"></a>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-beginner">Beginner</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Programming Languages</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Angular – The Complete Guide (2020 Edition)</a></h3>
                                    <div class="course-info-02__description">
                                        <p>From Setup to Deployment, this course covers it all! You’ll learn all …</p>
                                    </div>
                                    <div class="course-info-02__price">
                                        <span class="sale-price">$39.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">

                            <!-- Course Start -->
                            <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                <div class="course-header">
                                    <div class="course-header__thumbnail rounded-0">
                                        <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-4.jpg" alt="courses" width="330" height="220"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-beginner">Beginner</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Management</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Consulting Approach to Problem Solving</a></h3>
                                    <div class="course-info-02__description">
                                        <p>Do you feel that you already know all possible frameworks of business …</p>
                                    </div>
                                    <div class="course-info-02__price">
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">

                            <!-- Course Start -->
                            <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                <div class="course-header">
                                    <div class="course-header__thumbnail rounded-0">
                                        <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-8.jpg" alt="courses" width="330" height="220"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-all">All Levels</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Strategy & Analytics</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.html">The Business Intelligence Analyst Course 2022</a></h3>
                                    <div class="course-info-02__description">
                                        <p>Our program is different than the rest of the materials …</p>
                                    </div>
                                    <div class="course-info-02__price">
                                        <span class="free">Free</span>
                                    </div>
                                    <div class="course-info-02__rating">

                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 100%;"></div>
                                        </div>

                                        <span>(2)</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">

                            <!-- Course Start -->
                            <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                <div class="course-header">
                                    <div class="course-header__thumbnail rounded-0">
                                        <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-1.jpg" alt="courses" width="330" height="220"></a>
                                    </div>
                                    <div class="course-header__badge">
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-all">All Levels</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Communications</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Successful Negotiation: Master Your Negotiating Skills</a></h3>
                                    <div class="course-info-02__description">
                                        <p>Negotiation is a skill well worth mastering – by putting …</p>
                                    </div>
                                    <div class="course-info-02__price">
                                        <span class="free">Free</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">

                            <!-- Course Start -->
                            <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                <div class="course-header">
                                    <div class="course-header__thumbnail rounded-0">
                                        <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-3.jpg" alt="courses" width="330" height="220"></a>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-all">All Levels</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Productivity</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Time Management Mastery: Do More, Stress Less</a></h3>
                                    <div class="course-info-02__description">
                                        <p>Do you feel that you already know all possible frameworks of business …</p>
                                    </div>
                                    <div class="course-info-02__price">
                                        <span class="sale-price">$39.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">

                            <!-- Course Start -->
                            <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                <div class="course-header">
                                    <div class="course-header__thumbnail rounded-0">
                                        <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-7.jpg" alt="courses" width="330" height="220"></a>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-beginner">Beginner</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Programming Languages</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Angular – The Complete Guide (2020 Edition)</a></h3>
                                    <div class="course-info-02__description">
                                        <p>From Setup to Deployment, this course covers it all! You’ll learn all …</p>
                                    </div>
                                    <div class="course-info-02__price">
                                        <span class="sale-price">$39.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">

                            <!-- Course Start -->
                            <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                <div class="course-header">
                                    <div class="course-header__thumbnail rounded-0">
                                        <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-11.jpg" alt="courses" width="330" height="220"></a>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-all">All Levels</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Photography Fundamentals</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.html">The Ultimate Photography Course – Beginner to Advanced</a></h3>
                                    <div class="course-info-02__description">
                                        <p>Do you feel that you already know all possible frameworks of business …</p>
                                    </div>
                                    <div class="course-info-02__price">
                                        <span class="sale-price">$55.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">

                            <!-- Course Start -->
                            <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                <div class="course-header">
                                    <div class="course-header__thumbnail rounded-0">
                                        <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-12.jpg" alt="courses" width="330" height="220"></a>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-all">All Levels</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Programming Languages</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Internationally Accredited Diploma in Weight Loss</a></h3>
                                    <div class="course-info-02__description">
                                        <p>If you’re struggling to lose weight or stick to a …</p>
                                    </div>
                                    <div class="course-info-02__price">
                                        <span class="sale-price">$9.<small class="separator">99</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">

                            <!-- Course Start -->
                            <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                <div class="course-header">
                                    <div class="course-header__thumbnail rounded-0">
                                        <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-32.jpg" alt="courses" width="330" height="220"></a>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-beginner">Beginner</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Photography Fundamentals</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Photography Masterclass: A Complete Guide to Photography</a></h3>
                                    <div class="course-info-02__description">
                                        <p>This online photography course will teach you how to take …</p>
                                    </div>
                                    <div class="course-info-02__price">
                                        <span class="sale-price">$49.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">

                            <!-- Course Start -->
                            <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                <div class="course-header">
                                    <div class="course-header__thumbnail rounded-0">
                                        <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-34.jpg" alt="courses" width="330" height="220"></a>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-all">All Levels</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Leadership</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Succeed, Influence and Inspire as a Woman in Leadership</a></h3>
                                    <div class="course-info-02__description">
                                        <p>Most importantly your body language has a tremendous impact on …</p>
                                    </div>
                                    <div class="course-info-02__price">
                                        <span class="sale-price">$75.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">

                            <!-- Course Start -->
                            <div class="course-item-02" data-aos="fade-up" data-aos-duration="1000">
                                <div class="course-header">
                                    <div class="course-header__thumbnail rounded-0">
                                        <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-35.jpg" alt="courses" width="330" height="220"></a>
                                    </div>
                                </div>
                                <div class="course-info-02">
                                    <span class="course-info-02__badge-text badge-all">All Levels</span>
                                    <div class="course-info-02__category">
                                        <a href="#">Career Development</a>
                                    </div>
                                    <h3 class="course-info-02__title"><a href="course-single-layout-01.html">Building Influence at Work</a></h3>
                                    <div class="course-info-02__description">
                                        <p>Listening Skills are the quiet soft skills sauce that can …</p>
                                    </div>
                                    <div class="course-info-02__price">
                                        <span class="sale-price">$42.<small class="separator">00</small></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Course End -->

                        </div>
                    </div>
                </div>
                <!-- Dashboard Wishlist End -->
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
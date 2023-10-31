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
    <div class="dashboard-nav offcanvas offcanvas-start" id="offcanvasDashboard">

        <!-- Dashboard Nav Wrapper Start -->
        <?php include('../includes/dashboard/instructor-dash-nav.php') ?>
        <!-- Dashboard Nav Wrapper End -->

    </div>
    <!-- Dashboard Nav End -->




    <!-- Dashboard Main Wrapper Start -->
    <main class="dashboard-main-wrapper">

        <!-- Dashboard Header Start -->
        <?php include("../includes/dashboard/instructor-dash-header.php") ?>
        <!-- Dashboard Header End -->





        <!-- Dashboard Content Start -->
        <div class="dashboard-content">

            <div class="container">
                <h4 class="dashboard-title">My Courses</h4>

                <!-- Dashboard My Courses Start -->
                <div class="dashboard-courses">
                    <!-- Dashboard Course Item Start -->
                    <div class="dashboard-courses__item">
                        <div class="dashboard-courses__thumbnail">
                            <a href="course-single.php"><img src="assets/images/courses/courses-32.jpg" alt="Courses" width="260" height="174"></a>
                        </div>
                        <div class="dashboard-courses__content">
                            <div class="dashboard-courses__rating">
                                <div class="rating-star">
                                    <div class="rating-label" style="width: 0%;"></div>
                                </div>
                                <span>(0)</span>
                            </div>
                            <h3 class="dashboard-courses__title"><a href="course-single.php">Photography</a></h3>
                            <ul class="dashboard-courses__meta">
                                <li>
                                    <span class="meta-label">Status:</span>
                                    <span class="meta-value">Pending</span>
                                </li>
                                <li>
                                    <span class="meta-label">Duration:</span>
                                    <span class="meta-value">1h 5m </span>
                                </li>
                                <li>
                                    <span class="meta-label">Students:</span>
                                    <span class="meta-value">0</span>
                                </li>
                            </ul>
                            <div class="dashboard-courses__footer">
                                <div class="dashboard-courses__price">
                                    <span class="sale-price">$100.<small class="separator">00</small></span>
                                </div>
                                <div class="dashboard-courses__action">
                                    <a class="action" href="#"><i class="fas  fa-pencil-alt"></i> Edit</a>
                                    <a class="action delete" href="#"><i class="fas  fa-trash-alt"></i> Delete</a>
                                    <a class="action" href="#"><i class="fas  fa-clone"></i> Duplicate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Course Item End -->

                    <!-- Dashboard Course Item Start -->
                    <div class="dashboard-courses__item">
                        <div class="dashboard-courses__thumbnail">
                            <a href="course-single.php"><img src="assets/images/courses/courses-6.jpg" alt="Courses" width="260" height="174"></a>
                        </div>
                        <div class="dashboard-courses__content">
                            <div class="dashboard-courses__rating">
                                <div class="rating-star">
                                    <div class="rating-label" style="width: 60%;"></div>
                                </div>
                                <span>(8)</span>
                            </div>
                            <h3 class="dashboard-courses__title"><a href="course-single.php">ENV 101: Introduction to Environmental Science</a></h3>
                            <ul class="dashboard-courses__meta">
                                <li>
                                    <span class="meta-label">Status:</span>
                                    <span class="meta-value">Draft</span>
                                </li>
                                <li>
                                    <span class="meta-label">Duration:</span>
                                    <span class="meta-value">2h 10m </span>
                                </li>
                                <li>
                                    <span class="meta-label">Students:</span>
                                    <span class="meta-value">5</span>
                                </li>
                            </ul>
                            <div class="dashboard-courses__footer">
                                <div class="dashboard-courses__price">
                                    <span class="sale-price">$100.<small class="separator">00</small></span>
                                </div>
                                <div class="dashboard-courses__action">
                                    <a class="action" href="#"><i class="fas  fa-pencil-alt"></i> Edit</a>
                                    <a class="action delete" href="#"><i class="fas  fa-trash-alt"></i> Delete</a>
                                    <a class="action" href="#"><i class="fas  fa-clone"></i> Duplicate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Course Item End -->

                    <!-- Dashboard Course Item Start -->
                    <div class="dashboard-courses__item">
                        <div class="dashboard-courses__thumbnail">
                            <a href="course-single.php"><img src="assets/images/courses/courses-2.jpg" alt="Courses" width="260" height="174"></a>
                        </div>
                        <div class="dashboard-courses__content">
                            <div class="dashboard-courses__rating">
                                <div class="rating-star">
                                    <div class="rating-label" style="width: 20%;"></div>
                                </div>
                                <span>(4)</span>
                            </div>
                            <h3 class="dashboard-courses__title"><a href="course-single.php">Time Management Mastery: Do More, Stress Less</a></h3>
                            <ul class="dashboard-courses__meta">
                                <li>
                                    <span class="meta-label">Status:</span>
                                    <span class="meta-value">Draft</span>
                                </li>
                                <li>
                                    <span class="meta-label">Duration:</span>
                                    <span class="meta-value">1h 50m </span>
                                </li>
                                <li>
                                    <span class="meta-label">Students:</span>
                                    <span class="meta-value">1</span>
                                </li>
                            </ul>
                            <div class="dashboard-courses__footer">
                                <div class="dashboard-courses__price">
                                    <span class="sale-price">$120.<small class="separator">00</small></span>
                                </div>
                                <div class="dashboard-courses__action">
                                    <a class="action" href="#"><i class="fas  fa-pencil-alt"></i> Edit</a>
                                    <a class="action delete" href="#"><i class="fas  fa-trash-alt"></i> Delete</a>
                                    <a class="action" href="#"><i class="fas  fa-clone"></i> Duplicate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Course Item End -->

                    <!-- Dashboard Course Item Start -->
                    <div class="dashboard-courses__item">
                        <div class="dashboard-courses__thumbnail">
                            <a href="course-single.php"><img src="assets/images/courses/courses-32.jpg" alt="Courses" width="260" height="174"></a>
                        </div>
                        <div class="dashboard-courses__content">
                            <div class="dashboard-courses__rating">
                                <div class="rating-star">
                                    <div class="rating-label" style="width: 80%;"></div>
                                </div>
                                <span>(2)</span>
                            </div>
                            <h3 class="dashboard-courses__title"><a href="course-single.php">Successful Negotiation: Master Your Negotiating Skills</a></h3>
                            <ul class="dashboard-courses__meta">
                                <li>
                                    <span class="meta-label">Status:</span>
                                    <span class="meta-value">Draft</span>
                                </li>
                                <li>
                                    <span class="meta-label">Duration:</span>
                                    <span class="meta-value">50m </span>
                                </li>
                                <li>
                                    <span class="meta-label">Students:</span>
                                    <span class="meta-value">15</span>
                                </li>
                            </ul>
                            <div class="dashboard-courses__footer">
                                <div class="dashboard-courses__price">
                                    <span class="free">Free</span>
                                </div>
                                <div class="dashboard-courses__action">
                                    <a class="action" href="#"><i class="fas  fa-pencil-alt"></i> Edit</a>
                                    <a class="action delete" href="#"><i class="fas  fa-trash-alt"></i> Delete</a>
                                    <a class="action" href="#"><i class="fas  fa-clone"></i> Duplicate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Course Item End -->

                    <!-- Dashboard Course Item Start -->
                    <div class="dashboard-courses__item">
                        <div class="dashboard-courses__thumbnail">
                            <a href="course-single.php"><img src="assets/images/courses/courses-3.jpg" alt="Courses" width="260" height="174"></a>
                        </div>
                        <div class="dashboard-courses__content">
                            <div class="dashboard-courses__rating">
                                <div class="rating-star">
                                    <div class="rating-label" style="width: 0%;"></div>
                                </div>
                                <span>(0)</span>
                            </div>
                            <h3 class="dashboard-courses__title"><a href="course-single.php">Time Management Mastery: Do More, Stress Less</a></h3>
                            <ul class="dashboard-courses__meta">
                                <li>
                                    <span class="meta-label">Status:</span>
                                    <span class="meta-value">Pending</span>
                                </li>
                                <li>
                                    <span class="meta-label">Duration:</span>
                                    <span class="meta-value">2h 5m </span>
                                </li>
                                <li>
                                    <span class="meta-label">Students:</span>
                                    <span class="meta-value">0</span>
                                </li>
                            </ul>
                            <div class="dashboard-courses__footer">
                                <div class="dashboard-courses__price">
                                    <span class="sale-price">$80.<small class="separator">00</small></span>
                                </div>
                                <div class="dashboard-courses__action">
                                    <a class="action" href="#"><i class="fas  fa-pencil-alt"></i> Edit</a>
                                    <a class="action delete" href="#"><i class="fas  fa-trash-alt"></i> Delete</a>
                                    <a class="action" href="#"><i class="fas  fa-clone"></i> Duplicate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Course Item End -->

                    <!-- Dashboard Course Item Start -->
                    <div class="dashboard-courses__item">
                        <div class="dashboard-courses__thumbnail">
                            <a href="course-single.php"><img src="assets/images/courses/courses-33.jpg" alt="Courses" width="260" height="174"></a>
                        </div>
                        <div class="dashboard-courses__content">
                            <div class="dashboard-courses__rating">
                                <div class="rating-star">
                                    <div class="rating-label" style="width: 80%;"></div>
                                </div>
                                <span>(3)</span>
                            </div>
                            <h3 class="dashboard-courses__title"><a href="course-single.php">Boost Your Productivity: Adapt, Improve, Do!</a></h3>
                            <ul class="dashboard-courses__meta">
                                <li>
                                    <span class="meta-label">Status:</span>
                                    <span class="meta-value">Draft</span>
                                </li>
                                <li>
                                    <span class="meta-label">Duration:</span>
                                    <span class="meta-value">2h 30m </span>
                                </li>
                                <li>
                                    <span class="meta-label">Students:</span>
                                    <span class="meta-value">8</span>
                                </li>
                            </ul>
                            <div class="dashboard-courses__footer">
                                <div class="dashboard-courses__price">
                                    <span class="sale-price">$99.<small class="separator">00</small></span>
                                </div>
                                <div class="dashboard-courses__action">
                                    <a class="action" href="#"><i class="fas  fa-pencil-alt"></i> Edit</a>
                                    <a class="action delete" href="#"><i class="fas  fa-trash-alt"></i> Delete</a>
                                    <a class="action" href="#"><i class="fas  fa-clone"></i> Duplicate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Course Item End -->
                </div>
                <!-- Dashboard My Courses End -->


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
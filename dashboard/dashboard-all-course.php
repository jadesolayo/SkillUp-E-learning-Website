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
                <h4 class="dashboard-title">Enrolled Courses</h4>

                <!-- Dashboard Course Start -->
                <div class="dashboard-course">

                    <!-- Dashboard Tabs Start -->
                    <div class="dashboard-tabs-menu">
                        <ul>
                            <li><a class="active" href="#">All Courses</a></li>
                            <li><a href="#">Active Courses</a></li>
                            <li><a href="#">Completed Courses</a></li>
                        </ul>
                    </div>
                    <!-- Dashboard Tabs End -->

                    <!-- Dashboard Course List Start -->
                    <div class="dashboard-course-list">

                        <!-- Dashboard Course Item Start -->
                        <div class="dashboard-course-item">
                            <a class="dashboard-course-item__link" href="course-single.php">
                                <div class="dashboard-course-item__thumbnail">
                                    <img src="assets/images/courses/courses-4.jpg" alt="Courses" width="260" height="160">
                                </div>
                                <div class="dashboard-course-item__content">
                                    <div class="dashboard-course-item__rating">
                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 80%;"></div>
                                        </div>
                                    </div>
                                    <h3 class="dashboard-course-item__title">Consulting Approach to Problem Solving</h3>
                                    <div class="dashboard-course-item__meta">
                                        <ul class="dashboard-course-item__meta-list">
                                            <li>
                                                <span class="meta-label">Total Lessons:</span>
                                                <span class="meta-value">6</span>
                                            </li>
                                            <li>
                                                <span class="meta-label">Completed Lessons:</span>
                                                <span class="meta-value">0/6</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dashboard-course-item__progress-bar-wrap">
                                        <div class="dashboard-course-item__progress-bar">
                                            <div class="dashboard-course-item__progress-bar-line" style="width: 22%;"></div>
                                        </div>
                                        <div class="dashboard-course-item__progress-bar-text">22% Complete</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Dashboard Course Item End -->

                        <!-- Dashboard Course Item Start -->
                        <div class="dashboard-course-item">
                            <a class="dashboard-course-item__link" href="course-single.php">
                                <div class="dashboard-course-item__thumbnail">
                                    <img src="assets/images/courses/courses-9.jpg" alt="Courses" width="260" height="160">
                                </div>
                                <div class="dashboard-course-item__content">
                                    <div class="dashboard-course-item__rating">
                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 80%;"></div>
                                        </div>
                                    </div>
                                    <h3 class="dashboard-course-item__title">Essential Digital Tools for Student Engagement</h3>
                                    <div class="dashboard-course-item__meta">
                                        <ul class="dashboard-course-item__meta-list">
                                            <li>
                                                <span class="meta-label">Total Lessons:</span>
                                                <span class="meta-value">5</span>
                                            </li>
                                            <li>
                                                <span class="meta-label">Completed Lessons:</span>
                                                <span class="meta-value">5/5</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dashboard-course-item__progress-bar-wrap">
                                        <div class="dashboard-course-item__progress-bar">
                                            <div class="dashboard-course-item__progress-bar-line" style="width: 100%;"></div>
                                        </div>
                                        <div class="dashboard-course-item__progress-bar-text">100% Complete</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Dashboard Course Item End -->

                        <!-- Dashboard Course Item Start -->
                        <div class="dashboard-course-item">
                            <a class="dashboard-course-item__link" href="course-single.php">
                                <div class="dashboard-course-item__thumbnail">
                                    <img src="assets/images/courses/courses-10.jpg" alt="Courses" width="260" height="160">
                                </div>
                                <div class="dashboard-course-item__content">
                                    <div class="dashboard-course-item__rating">
                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 100%;"></div>
                                        </div>
                                    </div>
                                    <h3 class="dashboard-course-item__title">Adobe Lightroom For Beginners : Complete Photo/Image Editing</h3>
                                    <div class="dashboard-course-item__meta">
                                        <ul class="dashboard-course-item__meta-list">
                                            <li>
                                                <span class="meta-label">Total Lessons:</span>
                                                <span class="meta-value">6</span>
                                            </li>
                                            <li>
                                                <span class="meta-label">Completed Lessons:</span>
                                                <span class="meta-value">5/6</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dashboard-course-item__progress-bar-wrap">
                                        <div class="dashboard-course-item__progress-bar">
                                            <div class="dashboard-course-item__progress-bar-line" style="width: 100%;"></div>
                                        </div>
                                        <div class="dashboard-course-item__progress-bar-text">100% Complete</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Dashboard Course Item End -->

                        <!-- Dashboard Course Item Start -->
                        <div class="dashboard-course-item">
                            <a class="dashboard-course-item__link" href="course-single.php">
                                <div class="dashboard-course-item__thumbnail">
                                    <img src="assets/images/courses/courses-33.jpg" alt="Courses" width="260" height="160">
                                </div>
                                <div class="dashboard-course-item__content">
                                    <div class="dashboard-course-item__rating">
                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 100%;"></div>
                                        </div>
                                    </div>
                                    <h3 class="dashboard-course-item__title">Boost Your Productivity: Adapt, Improve, Do!</h3>
                                    <div class="dashboard-course-item__meta">
                                        <ul class="dashboard-course-item__meta-list">
                                            <li>
                                                <span class="meta-label">Total Lessons:</span>
                                                <span class="meta-value">5</span>
                                            </li>
                                            <li>
                                                <span class="meta-label">Completed Lessons:</span>
                                                <span class="meta-value">5/5</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dashboard-course-item__progress-bar-wrap">
                                        <div class="dashboard-course-item__progress-bar">
                                            <div class="dashboard-course-item__progress-bar-line" style="width: 100%;"></div>
                                        </div>
                                        <div class="dashboard-course-item__progress-bar-text">100% Complete</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Dashboard Course Item End -->

                        <!-- Dashboard Course Item Start -->
                        <div class="dashboard-course-item">
                            <a class="dashboard-course-item__link" href="course-single.php">
                                <div class="dashboard-course-item__thumbnail">
                                    <img src="assets/images/courses/courses-28.jpg" alt="Courses" width="260" height="160">
                                </div>
                                <div class="dashboard-course-item__content">
                                    <div class="dashboard-course-item__rating">
                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 40%;"></div>
                                        </div>
                                    </div>
                                    <h3 class="dashboard-course-item__title">Ultimate Photoshop Training: From Beginner to Pro</h3>
                                    <div class="dashboard-course-item__meta">
                                        <ul class="dashboard-course-item__meta-list">
                                            <li>
                                                <span class="meta-label">Total Lessons:</span>
                                                <span class="meta-value">1</span>
                                            </li>
                                            <li>
                                                <span class="meta-label">Completed Lessons:</span>
                                                <span class="meta-value">1/1</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dashboard-course-item__progress-bar-wrap">
                                        <div class="dashboard-course-item__progress-bar">
                                            <div class="dashboard-course-item__progress-bar-line" style="width: 100%;"></div>
                                        </div>
                                        <div class="dashboard-course-item__progress-bar-text">100% Complete</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Dashboard Course Item End -->

                        <!-- Dashboard Course Item Start -->
                        <div class="dashboard-course-item">
                            <a class="dashboard-course-item__link" href="course-single.php">
                                <div class="dashboard-course-item__thumbnail">
                                    <img src="assets/images/courses/courses-13.jpg" alt="Courses" width="260" height="160">
                                </div>
                                <div class="dashboard-course-item__content">
                                    <div class="dashboard-course-item__rating">
                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 90%;"></div>
                                        </div>
                                    </div>
                                    <h3 class="dashboard-course-item__title">Adobe Illustrator CC – Essentials Training Course</h3>
                                    <div class="dashboard-course-item__meta">
                                        <ul class="dashboard-course-item__meta-list">
                                            <li>
                                                <span class="meta-label">Total Lessons:</span>
                                                <span class="meta-value">1</span>
                                            </li>
                                            <li>
                                                <span class="meta-label">Completed Lessons:</span>
                                                <span class="meta-value">1/1</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dashboard-course-item__progress-bar-wrap">
                                        <div class="dashboard-course-item__progress-bar">
                                            <div class="dashboard-course-item__progress-bar-line" style="width: 86%;"></div>
                                        </div>
                                        <div class="dashboard-course-item__progress-bar-text">86% Complete</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Dashboard Course Item End -->

                        <!-- Dashboard Course Item Start -->
                        <div class="dashboard-course-item">
                            <a class="dashboard-course-item__link" href="course-single.php">
                                <div class="dashboard-course-item__thumbnail">
                                    <img src="assets/images/courses/courses-23.jpg" alt="Courses" width="260" height="160">
                                </div>
                                <div class="dashboard-course-item__content">
                                    <div class="dashboard-course-item__rating">
                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 80%;"></div>
                                        </div>
                                    </div>
                                    <h3 class="dashboard-course-item__title">Mental Health: Change your Brain</h3>
                                    <div class="dashboard-course-item__meta">
                                        <ul class="dashboard-course-item__meta-list">
                                            <li>
                                                <span class="meta-label">Total Lessons:</span>
                                                <span class="meta-value">0</span>
                                            </li>
                                            <li>
                                                <span class="meta-label">Completed Lessons:</span>
                                                <span class="meta-value">0/0</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="dashboard-course-item__progress-bar-wrap">
                                        <div class="dashboard-course-item__progress-bar">
                                            <div class="dashboard-course-item__progress-bar-line" style="width: 0%;"></div>
                                        </div>
                                        <div class="dashboard-course-item__progress-bar-text">0% Complete</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Dashboard Course Item End -->

                    </div>
                    <!-- Dashboard Course List End -->

                </div>
                <!-- Dashboard Course End -->
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
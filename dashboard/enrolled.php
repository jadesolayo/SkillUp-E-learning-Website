<?php
require "../includes/functions.php";

if (!isset($_SESSION['user'])) {
    header("location: ../auth/login.php");
    exit();
}

$userId = isset($_SESSION['user']) ? $_SESSION['user'] : null;

$appliedCourses = getAppliedCourses($userId);
$displayedCourses = [];

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
                            <li><a href="dashboard-all-course.php">All Courses</a></li>
                            <li><a class="active" href="enrolled.php">Active Courses</a></li>
                        </ul>
                    </div>
                    <!-- Dashboard Tabs End -->

                    <!-- Dashboard Course List Start -->
                    <div class="dashboard-course-list">
                        <!-- Dashboard Course Item Start -->
                        <?php if (!empty($appliedCourses)) : ?>
                            <?php foreach ($appliedCourses as $course) : ?>
                                <?php
                                // Fetch the complete course information based on $course['id']
                                $courseInfo = getCourseById($course['id']);
                                if ($courseInfo && !in_array($courseInfo['id'], $displayedCourses)) :
                                    $displayedCourses[] = $courseInfo['id'];
                                ?>
                                    <div class="dashboard-course-item">
                                        <a class="dashboard-course-item__link" href="#">
                                            <div class="dashboard-course-item__thumbnail">
                                                <img src="../uploads/<?php echo $courseInfo['courseimage']; ?>" alt="Course" width="260" height="160">
                                            </div>
                                            <div class="dashboard-course-item__content">
                                                <div class="dashboard-course-item__rating">
                                                    <div class="rating-star">
                                                        <div class="rating-label" style="width: 80%;"></div>
                                                    </div>
                                                </div>
                                                <h3 class="dashboard-course-item__title"><?php echo $courseInfo['coursetitle']; ?></h3>
                                                <div class="dashboard-course-item__meta">
                                                    <ul class="dashboard-course-item__meta-list">
                                                        <li>
                                                            <span class="meta-label">Duration:</span>
                                                            <span class="meta-value"><?php echo $courseInfo['duration']; ?></span>
                                                        </li>
                                                        <li>
                                                            <span class="meta-label">Price:</span>
                                                            <span class="meta-value">Paid</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <!-- Display a message when there are no courses -->
                            <div class="dashboard-courses__item">
                                <p>No courses applied.</p>
                            </div>
                        <?php endif; ?>
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

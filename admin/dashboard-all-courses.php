<?php
require "../includes/functions.php";

if (!isset($_SESSION['admin'])) {
    header("location: ../auth/admin-login.php");
    exit();
}

$allCourses = getAllCourses();

?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<?php include("../includes/dashboard/dash-head.php") ?>

<body class="dashboard-page">
    <!-- Dashboard Nav Start -->
    <div class="dashboard-nav offcanvas offcanvas-start" id="offcanvasDashboard">
        <!-- Dashboard Nav Wrapper Start -->
        <?php include('../includes/dashboard/admin-dash-nav.php') ?>
        <!-- Dashboard Nav Wrapper End -->
    </div>
    <!-- Dashboard Nav End -->
    <!-- Dashboard Main Wrapper Start -->
    <main class="dashboard-main-wrapper">
        <!-- Dashboard Header Start -->
        <?php include("../includes/dashboard/admin-dash-header.php") ?>
        <!-- Dashboard Header End -->
        <!-- Dashboard Content Start -->
        <div class="dashboard-content">
            <div class="container">
                <h4 class="dashboard-title">All Courses</h4>
                <div class="dashboard-courses">
                    <?php if (!empty($allCourses)) : ?>
                        <?php foreach ($allCourses as $course) : ?>
                            <div class="dashboard-courses__item">
                                <div class="dashboard-courses__thumbnail">
                                    <a href="course-details.php?id=<?= $course['id']; ?>">
                                        <img src="../uploads/<?php echo $course['courseimage']; ?>" alt="Course" width="260" height="174">
                                    </a>
                                </div>
                                <div class="dashboard-courses__content">
                                    <h3 class="dashboard-courses__title">
                                        <a href="course-details.php?id=<?= $course['id']; ?>">
                                            <?php echo $course['coursetitle']; ?>
                                        </a>
                                    </h3>
                                    <ul class="dashboard-courses__meta">
                                        <li>
                                            <span class="meta-label">Duration:</span>
                                            <span class="meta-value"><?php echo $course['duration']; ?></span>
                                        </li>
                                    </ul>
                                    <div class="dashboard-courses__footer">
                                        <div class="dashboard-courses__price">
                                            <span class="sale-price">
                                                <?php echo $course['price']; ?>
                                            </span>
                                        </div>
                                        <div class="dashboard-courses__action">
                                            <a class="action" href="edit-courses.php?id=<?= $course['id']; ?>"><i class="fas fa-pencil-alt"></i> Edit</a>
                                            <a class="action delete" href="#"><i class="fas fa-trash-alt"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Dashboard Course Item End -->
                        <?php endforeach; ?>
                    <?php else : ?>
                        <!-- Display a message when there are no courses -->
                        <div class="dashboard-courses__item">
                            <p>No courses available.</p>
                        </div>
                    <?php endif; ?>
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
</body>

</html>
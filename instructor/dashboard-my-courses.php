<?php
require "../includes/functions.php";

if (!isset($_SESSION['instructor'])) {
    header("location: ../auth/instructor-login.php");
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
                    <?php if (isset($course)) : ?>
                        <!-- Display course details -->
                        <div class="dashboard-courses__item">
                            <div class="dashboard-courses__thumbnail">
                                <a href="course-single.php">
                                    <?php foreach ($courseImages as $image) : ?>
                                        <img src="../uploads/<?php echo $image; ?>" alt="Course" width="260" height="174">
                                    <?php endforeach; ?>
                                </a>
                            </div>
                            <div class="dashboard-courses__content">
                                <!-- Display course content here -->
                                <div class="dashboard-courses__rating">
                                    <div class="rating-star">
                                        <div class="rating-label" style="width: 0%;"></div>
                                    </div>
                                    <span>(0)</span>
                                </div>
                                <h3 class="dashboard-courses__title">
                                    <a href="course-single.php"><?php echo $course['coursetitle']; ?></a>
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
                                        <a class="action" href="#"><i class="fas  fa-pencil-alt"></i> Edit</a>
                                        <a class=" action delete" href="#"><i class="fas fa-trash-alt"></i> Delete</a>
                                        <a class="action" href="#"><i class="fas fa-clone"></i> Duplicate</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Dashboard Course Item End -->
                    <?php else : ?>
                        <?php foreach ($allCourses as $course) : ?>
                            <!-- Dashboard Course Item Start (for all courses) -->
                            <div class="dashboard-courses__item">
                                <div class="dashboard-courses__thumbnail">
                                    <a href="#">
                                        <img src="../uploads/<?php echo $course['courseimage']; ?>" alt="Course" width="260" height="174">
                                    </a>
                                </div>
                                <div class="dashboard-courses__content">
                                    <!-- Display course content here -->
                                    <div class="dashboard-courses__rating">
                                        <div class="rating-star">
                                            <div class="rating-label" style="width: 0%;"></div>
                                        </div>
                                        <span>(0)</span>
                                    </div>
                                    <h3 class="dashboard-courses__title">
                                        <a href="#">
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
                                            <a class="action" href="#"><i class="fas fa-pencil-alt"></i> Edit</a>
                                            <a class="action delete" href="#"><i class="fas fa-trash-alt"></i> Delete</a>
                                            <a class="action" href="#"><i class="fas fa-clone"></i> Duplicate</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Dashboard Course Item End -->
                        <?php endforeach; ?>
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

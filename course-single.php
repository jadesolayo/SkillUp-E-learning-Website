<?php
require "includes/functions.php";

if (isset($_GET['id'])) {
    $courseId = $_GET['id'];


    $course = getCourseById($courseId);

    if ($course) {

        $allCourses = getAllCourses();

?>
        <!DOCTYPE html>
        <html class="no-js" lang="en">

        <?php include("includes/head-tag.php") ?>

        <body>

            <main class="main-wrapper">

                <!-- Header start -->
                <?php include("includes/header.php") ?>
                <!-- Header End -->



                <!-- Page Banner Section Start -->
                <div class="page-banner bg-color-11">
                    <div class="page-banner__wrapper">
                        <div class="container">

                            <!-- Page Breadcrumb Start -->
                            <div class="page-breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item"><a href="courses.php">courses</a></li>
                                    <li class="breadcrumb-item active"><?php echo htmlentities($course['coursetitle']); ?></li>
                                </ul>
                            </div>
                            <!-- Page Breadcrumb End -->

                        </div>
                    </div>
                </div>
                <!-- Page Banner Section End -->

                <!-- Offcanvas Start -->
                <?php include("includes/offcanvas.php") ?>
                <!-- Offcanvas End -->

                <!-- Tutor Course Main content Start -->
                <div class="tutor-course-main-content section-padding-01 sticky-parent">
                    <div class="container custom-container">

                        <div class="row gy-10">
                            <div class="col-lg-8">

                                <!-- Tutor Course Top Info Start -->
                                <div class="tutor-course-top-info">

                                    <!-- Tutor Course Top Info Start -->
                                    <div class="tutor-course-top-info__content">
                                        <div class="tutor-course-top-info__badges">
                                            <a class="badges-category" href="#"><?php echo htmlentities($course['category']); ?></a>
                                        </div>
                                        <h1 class="tutor-course-top-info__title"><?php echo htmlentities($course['coursetitle']); ?></h1>

                                        <div class="tutor-course-top-info__meta">
                                            <div class="tutor-course-top-info__meta-rating">

                                                <div class="rating-average"><strong>4.38</strong> /5</div>
                                                <div class="rating-star">
                                                    <div class="rating-label" style="width: 90%;"></div>
                                                </div>
                                                <div class="rating-count">(8)</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tutor Course Top Info End -->

                                    <div class="tutor-course-top-info__video-02 mt-6">
                                        <div class="ratio ratio-16x9">
                                            <img src="uploads/<?php echo htmlentities($course['courseimage']); ?>" alt="Course">
                                        </div>
                                    </div>

                                </div>
                                <!-- Tutor Course Top Info End -->

                                <!-- Tutor Course tabs Menu Start -->
                                <div class="tutor-course-tabs tutor-course-tabs-02 bg-color-13 mt-6">
                                    <ul class="nav justify-content-center">
                                        <li><button class="active" data-bs-toggle="tab" data-bs-target="#tab1">Overview</button></li>
                                    </ul>
                                </div>
                                <!-- Tutor Course tabs Menu End -->

                                <div class="tab-content mt-9">
                                    <div class="tab-pane fade show active" id="tab1">

                                        <!-- Tutor Course Main Segment Start -->
                                        <div class="tutor-course-main-segment">

                                            <!-- Tutor Course Segment Start -->
                                            <div class="tutor-course-segment">
                                                <h4 class="tutor-course-segment__title">Course Prerequisites</h4>

                                                <!-- Tutor Course Segment Prerequisites Start -->
                                                <div class="tutor-course-segment__prerequisites">
                                                    <div class="tutor-course-segment__prerequisites-warning">
                                                        <i class="fas fa-exclamation-triangle"></i>
                                                        Please note that this course has the following prerequisites which must be completed before it can be accessed
                                                    </div>
                                                </div>
                                                <!-- Tutor Course Segment Prerequisites End -->

                                            </div>
                                            <!-- Tutor Course Segment End -->

                                            <!-- Tutor Course Segment Start -->
                                            <div class="tutor-course-segment">
                                                <h4 class="tutor-course-segment__title">About This Course</h4>

                                                <!-- Tutor Course Segment Content Wrapper Start -->
                                                <div class="tutor-course-segment__content-wrap">
                                                    <p><?php echo htmlentities($course['coursedescription']); ?></p>
                                                </div>
                                                <!-- Tutor Course Segment Content Wrapper End -->

                                            </div>
                                            <!-- Tutor Course Segment End -->

                                            <!-- Tutor Course Segment Start -->
                                            <div class="tutor-course-segment benefits-wrap">
                                                <h4 class="tutor-course-segment__title">Learning Objectives</h4>

                                                <!-- Tutor Course Segment Benefits Items Start -->
                                                <div class="tutor-course-segment__benefits-items">
                                                    <div class="tutor-course-segment__benefit-item">
                                                        <div class="tutor-course-segment__benefit-content">
                                                            <i class="fas fa-check"></i>
                                                            <span class="benefit-text">Ready to begin working on real-world data modeling projects,</span>
                                                        </div>
                                                    </div>
                                                    <div class="tutor-course-segment__benefit-item">
                                                        <div class="tutor-course-segment__benefit-content">
                                                            <i class="fas fa-check"></i>
                                                            <span class="benefit-text">Expanded responsibilities as part of an existing role</span>
                                                        </div>
                                                    </div>
                                                    <div class="tutor-course-segment__benefit-item">
                                                        <div class="tutor-course-segment__benefit-content">
                                                            <i class="fas fa-check"></i>
                                                            <span class="benefit-text">Find a new position involving data modeling.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Tutor Course Segment Benefits Items End -->

                                            </div>
                                            <!-- Tutor Course Segment End -->

                                        </div>
                                        <!-- Tutor Course Main Segment End -->

                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-4">

                                <!-- Tutor Course Sidebar Start -->
                                <div class="tutor-course-sidebar sidebar-label">

                                    <!-- Tutor Course Price Preview Start -->
                                    <div class="tutor-course-price-preview">
                                        <div class="tutor-course-price-preview__price">
                                            <div class="tutor-course-price">
                                                <span class="sale-price"><?php echo htmlentities($course['price']); ?></span>
                                            </div>
                                        </div>
                                        <div class="tutor-course-price-preview__meta">
                                            <ul class="tutor-course-meta-list">
                                                <li>
                                                    <div class="label"><i class="fas fa-clock"></i> Duration </div>
                                                    <div class="value"><?php echo htmlentities($course['duration']); ?></div>
                                                </li>
                                                <li>
                                                    <div class="label"><i class="fas fa-tag"></i> Subject </div>
                                                    <div class="value"><a href="#"><?php echo htmlentities($course['coursetitle']); ?></a></div>
                                                </li>
                                                <li>
                                                    <div class="label"><i class="fas fa-globe"></i> Language </div>
                                                    <div class="value">English</div>
                                                </li>
                                            </ul>
                                            <div class="tutor-course-price-preview__btn">
                                                <a width="100%" href="auth/register.php"><button class="btn btn-primary btn-hover-secondary w-100"> Register to apply </button></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tutor Course Price Preview End -->

                                    <!-- Sidebar Widget Start -->
                                    <div class="sidebar-widget">
                                        <h3 class="sidebar-widget__title">Course categories</h3>

                                        <ul class="sidebar-widget__link">
                                            <?php foreach ($allCourses as $category) : ?>
                                                <li><a href="#"><?php echo htmlentities($category['category']); ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <!-- Sidebar Widget End -->

                                    <!-- Sidebar Widget Start -->
                                    <div class="sidebar-widget">
                                        <h3 class="sidebar-widget__title">Related Courses</h3>

                                        <div class="sidebar-widget__course">

                                            <?php foreach ($allCourses as $course) : ?>
                                                <div class="sidebar-widget__course-item">
                                                    <div class="sidebar-widget__course-thumbnail">
                                                        <a href="course-single-layout-01.html"><img src="uploads/<?php echo htmlentities($course['courseimage']); ?>" alt="Course" width="120" height="72"></a>
                                                    </div>
                                                    <div class="sidebar-widget__course-content">
                                                        <h4 class="sidebar-widget__course-title"><a href="course-details.php?id=<?= $course['id']; ?>"><?php echo htmlentities($course['coursetitle']); ?></a></h4>
                                                        <div class="sidebar-widget__course-price">
                                                            <span class="sale-price"><?php echo htmlentities($course['price']); ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach ?>

                                        </div>
                                    </div>
                                    <!-- Sidebar Widget End -->

                                </div>
                                <!-- Tutor Course Sidebar End -->

                            </div>
                        </div>


                    </div>
                </div>
                <!-- Tutor Course Main content End -->

                <!-- Footer Start -->
                <?php include("includes/footer.php") ?>
                <!-- Footer End -->

                <!--Back To Start-->
                <button id="backBtn" class="back-to-top backBtn">
                    <i class="arrow-top fas fa-arrow-up"></i>
                    <i class="arrow-bottom fas fa-arrow-up"></i>
                </button>
                <!--Back To End-->

            </main>








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
<?php
    } else {
        echo "Course not found";
    }
} else {
    echo "No course ID provided";
}
?>
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
                <h4 class="dashboard-title">Reviews</h4>

                <!-- Dashboard Reviews Start -->
                <div class="dashboard-reviews">

                    <!-- Dashboard Review Item Start -->
                    <div class="dashboard-review-item">
                        <div class="dashboard-review-item__thumbnail">
                            <img src="assets/images/courses/courses-14.jpg" alt="Courses" width="150" height="100">
                        </div>
                        <div class="dashboard-review-item__content">
                            <div class="dashboard-review-item__title-wrap">
                                <h2 class="dashboard-review-item__title"><span>Course: </span> <a href="#">Overview of Excercise</a></h2>
                                <div class="dashboard-review-item__review-links">
                                    <a href="#"><i class="fas fa-pencil"></i><span>Edit Feedback</span></a>
                                </div>
                            </div>
                            <div class="dashboard-review-item__rating">

                                <div class="rating-star">
                                    <div class="rating-label" style="width: 100%;"></div>
                                </div>

                                <p>4 months ago</p>
                            </div>
                            <div class="dashboard-review-item__text">
                                <p>Wow it's amazing !</p>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Review Item End -->

                    <!-- Dashboard Review Item Start -->
                    <div class="dashboard-review-item">
                        <div class="dashboard-review-item__thumbnail">
                            <img src="assets/images/courses/courses-10.jpg" alt="Courses" width="150" height="100">
                        </div>
                        <div class="dashboard-review-item__content">
                            <div class="dashboard-review-item__title-wrap">
                                <h2 class="dashboard-review-item__title"><span>Course: </span> <a href="#">Adobe Lightroom For Beginners : Complete Photo/Image Editing</a></h2>
                                <div class="dashboard-review-item__review-links">
                                    <a href="#"><i class="fas fa-pencil"></i><span>Edit Feedback</span></a>
                                </div>
                            </div>
                            <div class="dashboard-review-item__rating">

                                <div class="rating-star">
                                    <div class="rating-label" style="width: 100%;"></div>
                                </div>

                                <p>4 months ago</p>
                            </div>
                            <div class="dashboard-review-item__text">
                                <p>Wow it's amazing !</p>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Review Item End -->

                    <!-- Dashboard Review Item Start -->
                    <div class="dashboard-review-item">
                        <div class="dashboard-review-item__thumbnail">
                            <img src="assets/images/courses/courses-8.jpg" alt="Courses" width="150" height="100">
                        </div>
                        <div class="dashboard-review-item__content">
                            <div class="dashboard-review-item__title-wrap">
                                <h2 class="dashboard-review-item__title"><span>Course: </span> <a href="#">Introduction to Probability and Statistics</a></h2>
                                <div class="dashboard-review-item__review-links">
                                    <a href="#"><i class="fas fa-pencil"></i><span>Edit Feedback</span></a>
                                </div>
                            </div>
                            <div class="dashboard-review-item__rating">

                                <div class="rating-star">
                                    <div class="rating-label" style="width: 100%;"></div>
                                </div>

                                <p>4 months ago</p>
                            </div>
                            <div class="dashboard-review-item__text">
                                <p>Wow it's amazing !</p>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Review Item End -->

                    <!-- Dashboard Review Item Start -->
                    <div class="dashboard-review-item">
                        <div class="dashboard-review-item__thumbnail">
                            <img src="assets/images/courses/courses-24.jpg" alt="Courses" width="150" height="100">
                        </div>
                        <div class="dashboard-review-item__content">
                            <div class="dashboard-review-item__title-wrap">
                                <h2 class="dashboard-review-item__title"><span>Course: </span> <a href="#">Español para españoles</a></h2>
                                <div class="dashboard-review-item__review-links">
                                    <a href="#"><i class="fas fa-pencil"></i><span>Edit Feedback</span></a>
                                </div>
                            </div>
                            <div class="dashboard-review-item__rating">

                                <div class="rating-star">
                                    <div class="rating-label" style="width: 100%;"></div>
                                </div>

                                <p>4 months ago</p>
                            </div>
                            <div class="dashboard-review-item__text">
                                <p>Wow it's amazing !</p>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Review Item End -->

                    <!-- Dashboard Review Item Start -->
                    <div class="dashboard-review-item">
                        <div class="dashboard-review-item__thumbnail">
                            <img src="assets/images/courses/courses-22.jpg" alt="Courses" width="150" height="100">
                        </div>
                        <div class="dashboard-review-item__content">
                            <div class="dashboard-review-item__title-wrap">
                                <h2 class="dashboard-review-item__title"><span>Course: </span> <a href="#">Beginning Project Management: Project Management Level One</a></h2>
                                <div class="dashboard-review-item__review-links">
                                    <a href="#"><i class="fas fa-pencil"></i><span>Edit Feedback</span></a>
                                </div>
                            </div>
                            <div class="dashboard-review-item__rating">

                                <div class="rating-star">
                                    <div class="rating-label" style="width: 100%;"></div>
                                </div>

                                <p>4 months ago</p>
                            </div>
                            <div class="dashboard-review-item__text">
                                <p>Wow it's amazing !</p>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Review Item End -->

                    <!-- Dashboard Review Item Start -->
                    <div class="dashboard-review-item">
                        <div class="dashboard-review-item__thumbnail">
                            <img src="assets/images/courses/courses-34.jpg" alt="Courses" width="150" height="100">
                        </div>
                        <div class="dashboard-review-item__content">
                            <div class="dashboard-review-item__title-wrap">
                                <h2 class="dashboard-review-item__title"><span>Course: </span> <a href="#">Time Management Mastery: Do More, Stress Less</a></h2>
                                <div class="dashboard-review-item__review-links">
                                    <a href="#"><i class="fas fa-pencil"></i><span>Edit Feedback</span></a>
                                </div>
                            </div>
                            <div class="dashboard-review-item__rating">

                                <div class="rating-star">
                                    <div class="rating-label" style="width: 100%;"></div>
                                </div>

                                <p>4 months ago</p>
                            </div>
                            <div class="dashboard-review-item__text">
                                <p>Wow it's amazing !</p>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Review Item End -->

                    <!-- Dashboard Review Item Start -->
                    <div class="dashboard-review-item">
                        <div class="dashboard-review-item__thumbnail">
                            <img src="assets/images/courses/courses-4.jpg" alt="Courses" width="150" height="100">
                        </div>
                        <div class="dashboard-review-item__content">
                            <div class="dashboard-review-item__title-wrap">
                                <h2 class="dashboard-review-item__title"><span>Course: </span> <a href="#">Consulting Approach to Problem Solving</a></h2>
                                <div class="dashboard-review-item__review-links">
                                    <a href="#"><i class="fas fa-pencil"></i><span>Edit Feedback</span></a>
                                </div>
                            </div>
                            <div class="dashboard-review-item__rating">

                                <div class="rating-star">
                                    <div class="rating-label" style="width: 100%;"></div>
                                </div>

                                <p>4 months ago</p>
                            </div>
                            <div class="dashboard-review-item__text">
                                <p>Wow it's amazing !</p>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Review Item End -->

                    <!-- Dashboard Review Item Start -->
                    <div class="dashboard-review-item">
                        <div class="dashboard-review-item__thumbnail">
                            <img src="assets/images/courses/courses-1.jpg" alt="Courses" width="150" height="100">
                        </div>
                        <div class="dashboard-review-item__content">
                            <div class="dashboard-review-item__title-wrap">
                                <h2 class="dashboard-review-item__title"><span>Course: </span> <a href="#">Successful Negotiation: Master Your Negotiating Skills</a></h2>
                                <div class="dashboard-review-item__review-links">
                                    <a href="#"><i class="fas fa-pencil"></i><span>Edit Feedback</span></a>
                                </div>
                            </div>
                            <div class="dashboard-review-item__rating">

                                <div class="rating-star">
                                    <div class="rating-label" style="width: 100%;"></div>
                                </div>

                                <p>4 months ago</p>
                            </div>
                            <div class="dashboard-review-item__text">
                                <p>Wow it's amazing !</p>
                            </div>
                        </div>
                    </div>
                    <!-- Dashboard Review Item End -->

                </div>
                <!-- Dashboard Reviews End -->
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
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
                <h4 class="dashboard-title">My Quiz Attempts</h4>

                <!-- Dashboard My Quiz Attempts Start -->
                <div class="dashboard-my-quiz-attempts">
                    <div class="dashboard-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="course-info">Course Info</th>
                                    <th class="correct">Correct Answer</th>
                                    <th class="incorrect">Incorrect Answer</th>
                                    <th class="earned">Earned Marks</th>
                                    <th class="result">Result</th>
                                    <th class="action"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="course-info">
                                        <h3 class="dashboard-table__title"><a href="#">Adobe Illustrator CC – Essentials Training Course</a></h3>
                                        <div class="dashboard-table__meta">
                                            <div class="dashboard-table__meta-item">February 2, 2022 1:53 pm</div>
                                            <div class="dashboard-table__meta-item">
                                                <span class="label">Question: </span>
                                                <span class="value">0</span>
                                            </div>
                                            <div class="dashboard-table__meta-item">
                                                <span class="label">Total Marks: </span>
                                                <span class="value">1.00</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Correct Answer</div>
                                        <div class="dashboard-table__text">0</div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Incorrect Answer</div>
                                        <div class="dashboard-table__text">0</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Earned Marks</div>
                                        <div class="dashboard-table__text">0.00 (0%)</div>
                                    </td>
                                    <td class="result">
                                        <div class="dashboard-table__mobile-heading">Result</div>
                                        <div class="dashboard-table__result pass">Pass</div>
                                    </td>
                                    <td class="action">
                                        <a class="dashboard-table__link" href="#">Details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="course-info">
                                        <h3 class="dashboard-table__title"><a href="#">Strategic Project Management</a></h3>
                                        <div class="dashboard-table__meta">
                                            <div class="dashboard-table__meta-item">January 30, 2022 12:18 pm</div>
                                            <div class="dashboard-table__meta-item">
                                                <span class="label">Question: </span>
                                                <span class="value">0</span>
                                            </div>
                                            <div class="dashboard-table__meta-item">
                                                <span class="label">Total Marks: </span>
                                                <span class="value">1.00</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Correct Answer</div>
                                        <div class="dashboard-table__text">0</div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Incorrect Answer</div>
                                        <div class="dashboard-table__text">0</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Earned Marks</div>
                                        <div class="dashboard-table__text">0.00 (0%)</div>
                                    </td>
                                    <td class="result">
                                        <div class="dashboard-table__mobile-heading">Result</div>
                                        <div class="dashboard-table__result review">Under Review</div>
                                    </td>
                                    <td class="action">
                                        <a class="dashboard-table__link" href="#">Details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="course-info">
                                        <h3 class="dashboard-table__title"><a href="#">Strategic Project Management</a></h3>
                                        <div class="dashboard-table__meta">
                                            <div class="dashboard-table__meta-item">January 30, 2022 12:17 pm</div>
                                            <div class="dashboard-table__meta-item">
                                                <span class="label">Question: </span>
                                                <span class="value">0</span>
                                            </div>
                                            <div class="dashboard-table__meta-item">
                                                <span class="label">Total Marks: </span>
                                                <span class="value">1.00</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Correct Answer</div>
                                        <div class="dashboard-table__text">0</div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Incorrect Answer</div>
                                        <div class="dashboard-table__text">0</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Earned Marks</div>
                                        <div class="dashboard-table__text">0.00 (0%)</div>
                                    </td>
                                    <td class="result">
                                        <div class="dashboard-table__mobile-heading">Result</div>
                                        <div class="dashboard-table__result review">Under Review</div>
                                    </td>
                                    <td class="action">
                                        <a class="dashboard-table__link" href="#">Details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="course-info">
                                        <h3 class="dashboard-table__title"><a href="#">Adobe Illustrator CC – Essentials Training Course</a></h3>
                                        <div class="dashboard-table__meta">
                                            <div class="dashboard-table__meta-item">February 4, 2022 4:20 pm</div>
                                            <div class="dashboard-table__meta-item">
                                                <span class="label">Question: </span>
                                                <span class="value">0</span>
                                            </div>
                                            <div class="dashboard-table__meta-item">
                                                <span class="label">Total Marks: </span>
                                                <span class="value">1.00</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Correct Answer</div>
                                        <div class="dashboard-table__text">0</div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Incorrect Answer</div>
                                        <div class="dashboard-table__text">0</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Earned Marks</div>
                                        <div class="dashboard-table__text">0.00 (0%)</div>
                                    </td>
                                    <td class="result">
                                        <div class="dashboard-table__mobile-heading">Result</div>
                                        <div class="dashboard-table__result review">Under Review</div>
                                    </td>
                                    <td class="action">
                                        <a class="dashboard-table__link" href="#">Details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="course-info">
                                        <h3 class="dashboard-table__title"><a href="#">Adobe Illustrator CC – Essentials Training Course</a></h3>
                                        <div class="dashboard-table__meta">
                                            <div class="dashboard-table__meta-item">January 28, 2022 1:53 pm</div>
                                            <div class="dashboard-table__meta-item">
                                                <span class="label">Question: </span>
                                                <span class="value">0</span>
                                            </div>
                                            <div class="dashboard-table__meta-item">
                                                <span class="label">Total Marks: </span>
                                                <span class="value">1.00</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Correct Answer</div>
                                        <div class="dashboard-table__text">0</div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Incorrect Answer</div>
                                        <div class="dashboard-table__text">0</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Earned Marks</div>
                                        <div class="dashboard-table__text">0.00 (0%)</div>
                                    </td>
                                    <td class="result">
                                        <div class="dashboard-table__mobile-heading">Result</div>
                                        <div class="dashboard-table__result pass">Pass</div>
                                    </td>
                                    <td class="action">
                                        <a class="dashboard-table__link" href="#">Details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="course-info">
                                        <h3 class="dashboard-table__title"><a href="#">Adobe Illustrator CC – Essentials Training Course</a></h3>
                                        <div class="dashboard-table__meta">
                                            <div class="dashboard-table__meta-item">January 26, 2022 1:53 pm</div>
                                            <div class="dashboard-table__meta-item">
                                                <span class="label">Question: </span>
                                                <span class="value">0</span>
                                            </div>
                                            <div class="dashboard-table__meta-item">
                                                <span class="label">Total Marks: </span>
                                                <span class="value">1.00</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Correct Answer</div>
                                        <div class="dashboard-table__text">0</div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Incorrect Answer</div>
                                        <div class="dashboard-table__text">0</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Earned Marks</div>
                                        <div class="dashboard-table__text">0.00 (0%)</div>
                                    </td>
                                    <td class="result">
                                        <div class="dashboard-table__mobile-heading">Result</div>
                                        <div class="dashboard-table__result fail">Fail</div>
                                    </td>
                                    <td class="action">
                                        <a class="dashboard-table__link" href="#">Details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="course-info">
                                        <h3 class="dashboard-table__title"><a href="#">Strategic Project Management</a></h3>
                                        <div class="dashboard-table__meta">
                                            <div class="dashboard-table__meta-item">January 22, 2022 4:30 pm</div>
                                            <div class="dashboard-table__meta-item">
                                                <span class="label">Question: </span>
                                                <span class="value">0</span>
                                            </div>
                                            <div class="dashboard-table__meta-item">
                                                <span class="label">Total Marks: </span>
                                                <span class="value">1.00</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Correct Answer</div>
                                        <div class="dashboard-table__text">0</div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Incorrect Answer</div>
                                        <div class="dashboard-table__text">0</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Earned Marks</div>
                                        <div class="dashboard-table__text">0.00 (0%)</div>
                                    </td>
                                    <td class="result">
                                        <div class="dashboard-table__mobile-heading">Result</div>
                                        <div class="dashboard-table__result pass">Pass</div>
                                    </td>
                                    <td class="action">
                                        <a class="dashboard-table__link" href="#">Details</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Dashboard My Quiz Attempts End -->
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
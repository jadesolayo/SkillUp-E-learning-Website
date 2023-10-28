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
                <h4 class="dashboard-title">Purchase History</h4>

                <!-- Dashboard Purchase History Start -->
                <div class="dashboard-purchase-history">
                    <div class="dashboard-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="id">ID</th>
                                    <th class="courses">Courses</th>
                                    <th class="amount">Amount</th>
                                    <th class="status">Status</th>
                                    <th class="date">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">ID</div>
                                        <div class="dashboard-table__text">#10887</div>
                                    </td>
                                    <td class="course-info">
                                        <div class="dashboard-table__mobile-heading">Courses</div>
                                        <div class="dashboard-table__text">
                                            <p>Learn Algebra The Easy Way!</p>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Amount</div>
                                        <div class="dashboard-table__text">
                                            <span class="sale-price">$45.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Status</div>
                                        <div class="dashboard-table__text">Processing</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Date</div>
                                        <div class="dashboard-table__text">February 1, 2022</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">ID</div>
                                        <div class="dashboard-table__text">#10852</div>
                                    </td>
                                    <td class="course-info">
                                        <div class="dashboard-table__mobile-heading">Courses</div>
                                        <div class="dashboard-table__text">
                                            <p>Internationally Accredited Diploma in Weight Loss</p>
                                            <p>Investment Management Specialization</p>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Amount</div>
                                        <div class="dashboard-table__text">
                                            <span class="sale-price">$43.<small class="separator">99</small></span>
                                        </div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Status</div>
                                        <div class="dashboard-table__text hold">On Hold</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Date</div>
                                        <div class="dashboard-table__text">January 31, 2022</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">ID</div>
                                        <div class="dashboard-table__text">#10839</div>
                                    </td>
                                    <td class="course-info">
                                        <div class="dashboard-table__mobile-heading">Courses</div>
                                        <div class="dashboard-table__text">
                                            <p>Photography Masterclass: A Complete Guide to Photography</p>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Amount</div>
                                        <div class="dashboard-table__text">
                                            <span class="sale-price">$49.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Status</div>
                                        <div class="dashboard-table__text">Processing</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Date</div>
                                        <div class="dashboard-table__text">January 30, 2022</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">ID</div>
                                        <div class="dashboard-table__text">#10833</div>
                                    </td>
                                    <td class="course-info">
                                        <div class="dashboard-table__mobile-heading">Courses</div>
                                        <div class="dashboard-table__text">
                                            <p>Mastering Data Modeling Fundamentals</p>
                                            <p>Investment Management Specialization</p>
                                            <p>Illustrator 2020 MasterClass</p>
                                            <p>Photography Masterclass: A Complete Guide to Photography</p>
                                            <p>Mechanical Engineering and Electrical Engineering Explained</p>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Amount</div>
                                        <div class="dashboard-table__text">
                                            <span class="sale-price">$235.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Status</div>
                                        <div class="dashboard-table__text">Processing</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Date</div>
                                        <div class="dashboard-table__text">January 29, 2022</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">ID</div>
                                        <div class="dashboard-table__text">#10764</div>
                                    </td>
                                    <td class="course-info">
                                        <div class="dashboard-table__mobile-heading">Courses</div>
                                        <div class="dashboard-table__text">
                                            <p>Mechanical Engineering and Electrical Engineering Explained</p>
                                            <p>Learn Algebra The Easy Way!</p>
                                            <p>The Ultimate Photography Course – Beginner to Advanced</p>
                                            <p>Illustrator 2020 MasterClass</p>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Amount</div>
                                        <div class="dashboard-table__text">
                                            <span class="sale-price">$373.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Status</div>
                                        <div class="dashboard-table__text">Processing</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Date</div>
                                        <div class="dashboard-table__text">January 23, 2022</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">ID</div>
                                        <div class="dashboard-table__text">#10676</div>
                                    </td>
                                    <td class="course-info">
                                        <div class="dashboard-table__mobile-heading">Courses</div>
                                        <div class="dashboard-table__text">
                                            <p>Investment Management Specialization</p>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Amount</div>
                                        <div class="dashboard-table__text">
                                            <span class="sale-price">$34.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Status</div>
                                        <div class="dashboard-table__text">Processing</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Date</div>
                                        <div class="dashboard-table__text">January 12, 2022</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">ID</div>
                                        <div class="dashboard-table__text">#10568</div>
                                    </td>
                                    <td class="course-info">
                                        <div class="dashboard-table__mobile-heading">Courses</div>
                                        <div class="dashboard-table__text">
                                            <p>Investment Management Specialization</p>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Amount</div>
                                        <div class="dashboard-table__text">
                                            <span class="sale-price">$34.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Status</div>
                                        <div class="dashboard-table__text">Processing</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Date</div>
                                        <div class="dashboard-table__text">January 2, 2022</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">ID</div>
                                        <div class="dashboard-table__text">#9503</div>
                                    </td>
                                    <td class="course-info">
                                        <div class="dashboard-table__mobile-heading">Courses</div>
                                        <div class="dashboard-table__text">
                                            <p>Internationally Accredited Diploma in Weight Loss</p>
                                            <p>Artificial Intelligence & Machine Learning</p>
                                            <p>Excel Crash Course: Master Excel for Financial Analysis</p>
                                            <p>Beginning Project Management: Project Management Level One</p>
                                            <p>Investment Management Specialization</p>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Amount</div>
                                        <div class="dashboard-table__text">
                                            <span class="sale-price">$128.<small class="separator">97</small></span>
                                        </div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Status</div>
                                        <div class="dashboard-table__text cancelled">Cancelled</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Date</div>
                                        <div class="dashboard-table__text">November 2, 2021</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">ID</div>
                                        <div class="dashboard-table__text">#9461</div>
                                    </td>
                                    <td class="course-info">
                                        <div class="dashboard-table__mobile-heading">Courses</div>
                                        <div class="dashboard-table__text">
                                            <p>Investment Management Specialization</p>
                                            <p>Photography Masterclass: A Complete Guide to Photography</p>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Amount</div>
                                        <div class="dashboard-table__text">
                                            <span class="sale-price">$83.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Status</div>
                                        <div class="dashboard-table__text hold">On Hold</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Date</div>
                                        <div class="dashboard-table__text">October 31, 2021</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">ID</div>
                                        <div class="dashboard-table__text">#3564</div>
                                    </td>
                                    <td class="course-info">
                                        <div class="dashboard-table__mobile-heading">Courses</div>
                                        <div class="dashboard-table__text">
                                            <p>Illustrator 2020 MasterClass</p>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Amount</div>
                                        <div class="dashboard-table__text">
                                            <span class="sale-price">$22.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Status</div>
                                        <div class="dashboard-table__text cancelled">Cancelled</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Date</div>
                                        <div class="dashboard-table__text">December 15, 2020</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">ID</div>
                                        <div class="dashboard-table__text">#3374</div>
                                    </td>
                                    <td class="course-info">
                                        <div class="dashboard-table__mobile-heading">Courses</div>
                                        <div class="dashboard-table__text">
                                            <p>Mechanical Engineering and Electrical Engineering Explained</p>
                                            <p>Start Trading Stocks Using Technical Analysis!</p>
                                            <p>Successful Negotiation: Master Your Negotiating Skills</p>
                                        </div>
                                    </td>
                                    <td class="correct">
                                        <div class="dashboard-table__mobile-heading">Amount</div>
                                        <div class="dashboard-table__text">
                                            <span class="sale-price">$133.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td class="incorrect">
                                        <div class="dashboard-table__mobile-heading">Status</div>
                                        <div class="dashboard-table__text completed">Completed</div>
                                    </td>
                                    <td class="earned">
                                        <div class="dashboard-table__mobile-heading">Date</div>
                                        <div class="dashboard-table__text">December 14, 2020</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Dashboard Purchase History End -->
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
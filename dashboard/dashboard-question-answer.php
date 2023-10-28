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
                <h4 class="dashboard-title">Question & Answer</h4>

                <!-- Dashboard Question & Answer Start -->
                <div class="dashboard-question-answer">
                    <div class="dashboard-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="question">Question</th>
                                    <th class="student">Student</th>
                                    <th class="courses">Course</th>
                                    <th class="answer">Answer</th>
                                    <th class="action"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Question</div>
                                        <div class="dashboard-table__text">
                                            <h3 class="dashboard-table__question-title"><a href="#">Остался вопрос</a></h3>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__questioner-info">
                                            <div class="questioner-avater">
                                                <a href="#"><img src="assets/images/avatar/avatar-02.jpg" alt="Avatar"></a>
                                            </div>
                                            <div class="questioner-info">
                                                <h5 class="questioner-name">Edumall Website</h5>
                                                <span class="question-post-date">1 week ago</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Course</div>
                                        <div class="dashboard-table__text">Photography</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Answer</div>
                                        <div class="dashboard-table__text">0</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__text">
                                            <a class="action delete" href="#"><i class="fas  fa-trash-alt"></i> Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Question</div>
                                        <div class="dashboard-table__text">
                                            <h3 class="dashboard-table__question-title"><a href="#">question</a></h3>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__questioner-info">
                                            <div class="questioner-avater">
                                                <a href="#"><img src="assets/images/avatar/avatar-02.jpg" alt="Avatar"></a>
                                            </div>
                                            <div class="questioner-info">
                                                <h5 class="questioner-name">Edumall Website</h5>
                                                <span class="question-post-date">1 week ago</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Course</div>
                                        <div class="dashboard-table__text">Consulting Approach to Problem Solving</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Answer</div>
                                        <div class="dashboard-table__text">0</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__text">
                                            <a class="action delete" href="#"><i class="fas  fa-trash-alt"></i> Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Question</div>
                                        <div class="dashboard-table__text">
                                            <h3 class="dashboard-table__question-title"><a href="#">Hello World!</a></h3>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__questioner-info">
                                            <div class="questioner-avater">
                                                <a href="#"><img src="assets/images/avatar/avatar-01.jpg" alt="Avatar"></a>
                                            </div>
                                            <div class="questioner-info">
                                                <h5 class="questioner-name">Adeniyi David</h5>
                                                <span class="question-post-date">6 months ago</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Course</div>
                                        <div class="dashboard-table__text">Time Management Mastery: Do More, Stress Less</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Answer</div>
                                        <div class="dashboard-table__text">1</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__text">
                                            <a class="action delete" href="#"><i class="fas  fa-trash-alt"></i> Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Question</div>
                                        <div class="dashboard-table__text">
                                            <h3 class="dashboard-table__question-title"><a href="#">My first Question</a></h3>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__questioner-info">
                                            <div class="questioner-avater">
                                                <a href="#"><img src="assets/images/avatar/avatar-03.jpg" alt="Avatar"></a>
                                            </div>
                                            <div class="questioner-info">
                                                <h5 class="questioner-name">Mohamed Zumry</h5>
                                                <span class="question-post-date">7 months ago</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Course</div>
                                        <div class="dashboard-table__text">Time Management Mastery: Do More, Stress Less</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Answer</div>
                                        <div class="dashboard-table__text">2</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__text">
                                            <a class="action delete" href="#"><i class="fas  fa-trash-alt"></i> Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Question</div>
                                        <div class="dashboard-table__text">
                                            <h3 class="dashboard-table__question-title"><a href="#">question 1</a></h3>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__questioner-info">
                                            <div class="questioner-avater">
                                                <a href="#"><img src="assets/images/avatar/avatar-01.jpg" alt="Avatar"></a>
                                            </div>
                                            <div class="questioner-info">
                                                <h5 class="questioner-name">Adeniyi David</h5>
                                                <span class="question-post-date">1 year ago</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Course</div>
                                        <div class="dashboard-table__text">Successful Negotiation: Master Your Negotiating Skills</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Answer</div>
                                        <div class="dashboard-table__text">0</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__text">
                                            <a class="action delete" href="#"><i class="fas  fa-trash-alt"></i> Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Question</div>
                                        <div class="dashboard-table__text">
                                            <h3 class="dashboard-table__question-title"><a href="#">My first question</a></h3>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__questioner-info">
                                            <div class="questioner-avater">
                                                <a href="#"><img src="assets/images/avatar/avatar-04.jpg" alt="Avatar"></a>
                                            </div>
                                            <div class="questioner-info">
                                                <h5 class="questioner-name">Adeniyi David</h5>
                                                <span class="question-post-date">1 year ago</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Course</div>
                                        <div class="dashboard-table__text">ime Management Mastery: Do More, Stress Less</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__mobile-heading">Answer</div>
                                        <div class="dashboard-table__text">5</div>
                                    </td>
                                    <td>
                                        <div class="dashboard-table__text">
                                            <a class="action delete" href="#"><i class="fas  fa-trash-alt"></i> Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Dashboard Question & Answer End -->
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
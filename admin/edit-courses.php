<?php
require "../includes/functions.php";

if (!isset($_SESSION['admin'])) {
    header("location: ../auth/admin-login.php");
    exit();
}

$msg = $error = "";

if (isset($_GET['id'])) {
    $courseId = $_GET['id'];

    $course = getcourseById($courseId);

    if ($course) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['update'])) {
                $courseTitle = $_POST['course-title'];
                $courseDescription = $_POST['course-description'];
                $courseCategory = $_POST['course-category'];
                $coursePrice = $_POST['course-price'];
                $courseDuration = $_POST['course-duration'];

                $updated = updatecourse($courseId, $courseTitle, $courseDescription, $courseCategory, $coursePrice, $courseDuration);

                if ($updated) {
                    $msg = "course updated successfully";
                } else {
                    $error = "Failed to update course information.";
                }
            }
        }
    } else {
        $error = "course not found";
    }
} else {
    $error = "No course ID provided";
}

?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<?php include("../includes/dashboard/dash-head.php") ?>

<body class="dashboard-page dashboard-nav-fixed">
    <!-- Dashboard Nav Start -->
    <?php include('../includes/dashboard/admin-dash-nav.php') ?>
    <!-- Dashboard Nav End -->

    <!-- Dashboard Main Wrapper Start -->
    <main class="dashboard-main-wrapper">
        <!-- Dashboard Header Start -->
        <?php include("../includes/dashboard/admin-dash-header.php") ?>
        <!-- Dashboard Header End -->

        <!-- Dashboard Content Start -->
        <div class="dashboard-content">
            <div class="container">
                <h4 class="dashboard-title">Edit Courses</h4>

                <!-- Dashboard Info Start -->
                <div class="dashboard-content-box">
                    <div class="row gy-2 gy-sm-6">
                        <div class="col-md-12 col-sm-12">
                            <form method="POST">
                                <?php if ($msg) : ?>
                                    <div class="alert alert-success left-icon-alert" role="alert">
                                        <strong>Well done! </strong><?php echo htmlentities($msg); ?>
                                    </div>
                                <?php elseif ($error) : ?>
                                    <div class="alert alert-danger left-icon-alert" role="alert">
                                        <strong>Oh snap! </strong> <?php echo htmlentities($error); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="col-md-12 py-2">
                                    <div class="dashboard-content__input">
                                        <label class="form-label-02">Course Title</label>
                                        <input name="course-title" type="text" class="form-control" value="<?php echo $course['coursetitle']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-12 py-2">
                                    <div class="dashboard-content__input">
                                        <label class="form-label-02">Course Description</label>
                                        <textarea name="course-description" type="text" class="form-control" value="<?php echo $course['coursedescription']; ?>"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 py-2">
                                    <div class="dashboard-content__input">
                                        <label class="form-label-02">Category</label>
                                        <select name="course-category" class="form-select">
                                            <!-- <option ">Select a Category</option> -->
                                            <option disabled="disabled" selected="selected value=" <?php echo $course['category']; ?>"></option>
                                            <option value="Programming">Programming</option>
                                            <option value="Web Development">Web Development</option>
                                            <option value="Data Science">Data Science</option>
                                            <option value="Data Analysis">Data Analysis</option>
                                            <option value="Design">Design</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 py-2">
                                    <div class="dashboard-content__input">
                                        <label class="form-label-02">Price</label>
                                        <input name="course-price" type="text" class="form-control" value="<?php echo $course['price']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-12 py-2">
                                    <div class="dashboard-content__input">
                                        <label class="form-label-02">Duration</label>
                                        <input name="course-duration" type="text" class="form-control" value="<?php echo $course['duration']; ?>">
                                    </div>
                                </div>
                                <div class="dashboard-settings__btn">
                                    <button name="update" class="btn btn-primary btn-hover-secondary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Dashboard Info End -->
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
</body>

</html>
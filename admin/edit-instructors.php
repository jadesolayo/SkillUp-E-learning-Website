<?php
require "../includes/functions.php";

if (!isset($_SESSION['admin'])) {
    header("location: ../auth/admin-login.php");
    exit();
}

$msg = $error = "";

if (isset($_GET['id'])) {
    $instructorId = $_GET['id'];

    // Fetch instructor details from the database
    $instructor = getInstructorById($instructorId);

    if ($instructor) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Check if the form is submitted
            if (isset($_POST['update'])) {
                // Get updated data from the form
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $email = $_POST['email'];

                // Update instructor information
                $updated = updateInstructor($instructorId, $firstname, $lastname, $email);

                if ($updated) {
                    $msg = "Instructor updated successfully";
                } else {
                    $error = "Failed to update instructor information.";
                }
            }
        }
    } else {
        // Instructor not found, redirect to an error page or display a message
        $error = "Instructor not found";
    }
} else {
    // No instructor ID provided, redirect to an error page or display a message
    $error = "No instructor ID provided";
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
                <h4 class="dashboard-title">Edit Instructor</h4>

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
                                        <label class="form-label-02">First Name</label>
                                        <input name="firstname" type="text" class="form-control" value="<?php echo $instructor['firstname']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-12 py-2">
                                    <div class="dashboard-content__input">
                                        <label class="form-label-02">Last Name</label>
                                        <input name="lastname" type="text" class="form-control" value="<?php echo $instructor['lastname']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-12 py-2">
                                    <div class="dashboard-content__input">
                                        <label class="form-label-02">Email</label>
                                        <input name="email" type="email" class="form-control" value="<?php echo $instructor['email']; ?>">
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

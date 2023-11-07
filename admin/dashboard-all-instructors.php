<?php
require "../includes/functions.php";

if (!isset($_SESSION['admin'])) {
    header("location: ../auth/admin-login.php");
    exit();
}

$allInstructors = getAllInstructors();

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
                <h4 class="dashboard-title">All Instructors</h4>
                <!-- Dashboard My Courses Start -->
                <div class="dashboard-courses">
                    <div class="float">
                    <div class="dashboard-header__btn">
                        <a class="btn btn-outline-primary" href="add-instructor.php"><i class="edumi edumi-content-writing"></i> <span class="text">Add New Instructor </span></a>
                    </div>
                    </div>
                    <table id="instructorsTable" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Use PHP to populate the table with instructor data -->
                            <?php foreach ($allInstructors as $instructor) : ?>
                                <tr>
                                    <td><?= $instructor['id']; ?></td>
                                    <td><?= $instructor['firstname']; ?></td>
                                    <td><?= $instructor['lastname']; ?></td>
                                    <td>
                                        <a href="edit-instructors.php?id=<?= $instructor['id']; ?>">Edit</a>
                                    </td>
                                    <td>
                                        <a href="delete-instructors.php?id=<?= $instructor['id']; ?>">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- Dashboard My Courses End -->
            </div>
        </div>
        <!-- Dashboard Content End -->
    </main>
    <!-- Dashboard Main Wrapper End -->
    <!-- JS Vendor, Plugins & Activation Script Files -->
    <script>
        $(document).ready(function() {
            $('#instructorsTable').DataTable();
        });
    </script>
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
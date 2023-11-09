<?php
require "../includes/functions.php";

if (!isset($_SESSION['admin'])) {
    header("location: ../auth/admin-login.php");
    exit();
}

$allUsers = getAllUsers();
$response = ""; // Initialize response variable

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $response = deleteUser($user_id);
}
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
                <h4 class="dashboard-title">All Students</h4>
                <!-- Display response message -->
                <?php if ($response === "Success") : ?>
                    <p class="success">User deleted successfully!</p>
                <?php elseif ($response) : ?>
                    <p class="error"><?= $response; ?></p>
                <?php endif; ?>

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
                        <!-- Use PHP to populate the table with user data -->
                        <?php foreach ($allUsers as $user) : ?>
                            <tr>
                                <td><?= $user['user_id']; ?></td>
                                <td><?= $user['user_firstname']; ?></td>
                                <td><?= $user['user_lastname']; ?></td>
                                <td>
                                    <a href="edit-users.php?id=<?= $user['user_id']; ?>"><i class="fas fa-pencil-alt"></i> Edit</a>
                                </td>
                                <td>
                                    <a href="dashboard-all-users.php?user_id=<?= $user['user_id']; ?>"><i class="fas fa-trash-alt"></i> Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
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

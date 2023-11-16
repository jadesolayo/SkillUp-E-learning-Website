<?php
require "../includes/functions.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["course_id"])) {
        $courseId = $_POST["course_id"];

        if (isset($_SESSION['user'])) {
            $userId = $_SESSION['user'];

            // Insert the application
            if (insertApplication($userId, $courseId)) {
                header("Location: enrolled.php");
                exit();
            } else {
                echo "Error: Application could not be submitted.";
            }
        } else {
            echo "User not authenticated.";
            exit();
        }
    }
}
?>

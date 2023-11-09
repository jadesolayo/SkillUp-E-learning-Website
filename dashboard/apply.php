<?php
require "../includes/functions.php";
if (isset($_POST["course_id"])) {
    $courseId = $_POST["course_id"];

    
    if (isset($_SESSION['user_id'])) {
        $userId = $_SESSION['user_id'];

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
?>

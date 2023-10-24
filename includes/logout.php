<?php
require "functions.php";
if(isset($_GET['logout'])) {
    logoutUser();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.png" />
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f2f2f2;
        }
        .logout-container {
            margin: 20% auto;
            width: 300px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        button {
            padding: 15px 35px;
            border-radius: 10px;
            border: none;
            outline: none;
            cursor: pointer;
        }

        button:hover {
            background: #ff5757;
            color: #fff;
        }

        .btn-red {
            background: #ff0000;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="logout-container">
        <h2>Logout Confirmation</h2>
        <p>Are you sure you want to log out?</p>
        <a href="?logout"><button class="btn-red">Yes</button></a>
        <button class="cancel-button" type="button" onclick="cancelLogout()">Cancel</button>
    </div>
</body>
<script>
        function cancelLogout() {
            // Redirect to a different page or perform a cancel action
            window.location.href = "../dashboard/dashboard.php"; // You can change this to the desired destination.
        }
    </script>
</html>

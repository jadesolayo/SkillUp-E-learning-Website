<?php
require "config.php";

function connect()
{
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($mysqli->connect_errno != 0) {
        $error = $mysqli->connect_error;
        $error_date = date("F j, Y, g:l a");
        $message = "{$error} | {$error_date} \r\n";
        file_put_contents("db-log.txt", $message, FILE_APPEND);
        return false;
    } else {
        return $mysqli;
    };
};

function registerUser($firstname, $lastname, $username, $email, $password, $confirmPassword)
{
    $mysqli = connect();
    $args = func_get_args();

    $args = array_map(function ($value) {
        return trim($value);
    }, $args);

    foreach ($args as $value) {
        if (empty($value)) {
            return "All fields are required";
        }
    }

    foreach ($args as $value) {
        if (preg_match("/([<|>])/", $value)) {
            return "<> characters are not allowed";
        }
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        return "Email is not valid";
    } else {
        // Email is valid
        // return "Email is valid";
    }

    $stmt = $mysqli->prepare("SELECT user_email FROM users WHERE user_email = ? ");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    if ($data != NULL) {
        return "Email already exists";
    }

    if (strlen($username) > 50) {
        return "Username is too long";
    }

    $stmt = $mysqli->prepare("SELECT user_username FROM users WHERE user_username = ? ");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    if ($data != NULL) {
        return "Username already exists";
    }

    if (strlen($password) > 50) {
        return "Password is too long";
    }

    if ($password !== $confirmPassword) {
        return "Passwords do not match";
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $mysqli->prepare("INSERT INTO users(user_firstname, user_lastname, user_username, user_email, user_password) VALUES(?,?,?,?,?)");
    $stmt->bind_param("sssss", $firstname, $lastname, $username, $email, $hashed_password);
    $stmt->execute();
    if ($stmt->affected_rows != 1) {
        return "An error occured. Please try again";
    } else {
        return "Success";
    }
};

function registerInstructor($firstname, $lastname, $username, $email, $password, $confirmPassword)
{
    $mysqli = connect();
    $args = func_get_args();

    $args = array_map(function ($value) {
        return trim($value);
    }, $args);

    foreach ($args as $value) {
        if (empty($value)) {
            return "All fields are required";
        }
    }

    foreach ($args as $value) {
        if (preg_match("/([<|>])/", $value)) {
            return "<> characters are not allowed";
        }
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        return "Email is not valid";
    } else {
        // Email is valid
        // return "Email is valid";
    }

    $stmt = $mysqli->prepare("SELECT email FROM instructors WHERE email = ? ");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    if ($data != NULL) {
        return "Email already exists";
    }

    if (strlen($username) > 50) {
        return "Username is too long";
    }

    $stmt = $mysqli->prepare("SELECT username FROM instructors WHERE username = ? ");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    if ($data != NULL) {
        return "Username already exists";
    }

    if (strlen($password) > 50) {
        return "Password is too long";
    }

    if ($password !== $confirmPassword) {
        return "Passwords do not match";
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $mysqli->prepare("INSERT INTO instructors(firstname, lastname, username, email, password) VALUES(?,?,?,?,?)");
    $stmt->bind_param("sssss", $firstname, $lastname, $username, $email, $hashed_password);
    $stmt->execute();
    if ($stmt->affected_rows != 1) {
        return "An error occured. Please try again";
    } else {
        return "Success";
    }
};

function loginUser($username, $password)
{
    $mysqli = connect();
    $username = trim($username);
    $password = trim($password);

    if (empty($username) || empty($password)) {
        return "Both fields are required";
    }


    $sql = "SELECT user_username, user_password FROM users WHERE user_username = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    if ($data === null) {
        return "Wrong Username or Password";
    }

    if (!password_verify($password, $data["user_password"])) {
        return "Wrong Username or Password";
    } else {
        $_SESSION["user"] = $username;
        header("Location: ../dashboard/dashboard.php");
        exit();
    }
}

function loginInstructor($username, $password)
{
    $mysqli = connect();
    $username = trim($username);
    $password = trim($password);

    if (empty($username) || empty($password)) {
        return "Both fields are required";
    }


    $sql = "SELECT username, password FROM instructors WHERE username = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    if ($data === null) {
        return "Wrong Username or Password";
    }

    if (!password_verify($password, $data["password"])) {
        return "Wrong Username or Password";
    } else {
        $_SESSION["instructor"] = $username;
        header("Location: ../instructor/dashboard.php");
        exit();
    }
}

function changePassword($username, $currentPassword, $newPassword, $confirmPassword)
{
    $mysqli = connect();
    $username = trim($username);
    $currentPassword = trim($currentPassword);
    $newPassword = trim($newPassword);
    $confirmPassword = trim($confirmPassword);

    if (empty($username) || empty($currentPassword) || empty($newPassword) || empty($confirmPassword)) {
        return "All fields are required";
    }

    // Verify if the provided current password is correct
    $sql = "SELECT password FROM instructors WHERE username = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    if ($data === null || !password_verify($currentPassword, $data["password"])) {
        return "Incorrect current password";
    }

    if ($newPassword !== $confirmPassword) {
        return "New password and confirm password do not match";
    }

    // Update the password with the new one
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
    $updateSql = "UPDATE instructors SET password = ? WHERE username = ?";
    $updateStmt = $mysqli->prepare($updateSql);
    $updateStmt->bind_param("ss", $hashedPassword, $username);
    $updateStmt->execute();

    if ($updateStmt->affected_rows > 0) {
        return "Success";
    } else {
        return "Failed to change the password";
    }
}

function changeuserPassword($username, $currentPassword, $newPassword, $confirmPassword)
{
    $mysqli = connect();
    $username = trim($username);
    $currentPassword = trim($currentPassword);
    $newPassword = trim($newPassword);
    $confirmPassword = trim($confirmPassword);

    if (empty($username) || empty($currentPassword) || empty($newPassword) || empty($confirmPassword)) {
        return "All fields are required";
    }

    // Verify if the provided current password is correct
    $sql = "SELECT password FROM instructors WHERE username = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    if ($data === null || !password_verify($currentPassword, $data["password"])) {
        return "Incorrect current password";
    }

    if ($newPassword !== $confirmPassword) {
        return "New password and confirm password do not match";
    }

    // Update the password with the new one
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
    $updateSql = "UPDATE instructors SET password = ? WHERE username = ?";
    $updateStmt = $mysqli->prepare($updateSql);
    $updateStmt->bind_param("ss", $hashedPassword, $username);
    $updateStmt->execute();

    if ($updateStmt->affected_rows > 0) {
        return "Success";
    } else {
        return "Failed to change the password";
    }
}


function logoutUser()
{
    session_destroy();

    if (isset($_COOKIE['remember_me'])) {
        setcookie('remember_me', '', time() - 3600, '/');
    }
    header("Location: ../auth/login.php");
    exit();
}

function passwordReset()
{
};

function deleteAccount()
{
};

function fetchUserProfile($username)
{
    $mysqli = connect();

    $sql = "SELECT user_id, user_firstname, user_username, user_lastname, user_email FROM users WHERE user_username = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        return $result->fetch_assoc();
    }

    return null;
}

function fetchInstructorProfile($username)
{
    $mysqli = connect();

    $sql = "SELECT id, firstname, lastname, username, email FROM instructors WHERE username = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        return $result->fetch_assoc();
    }

    return null;
}

function addCourse($courseTitle, $courseDescription, $courseCategory, $coursePrice, $courseDuration, $courseImages)
{
    $mysqli = connect();

    $fileNames = $courseImages["name"];
    $fileTempNames = $courseImages["tmp_name"];

    $uploadedFiles = array();

    // Move the uploaded files to the desired location
    foreach ($fileNames as $i => $filename) {
        $tempname = $fileTempNames[$i];
        $folder = "../uploads/" . $filename;

        if (move_uploaded_file($tempname, $folder)) {
            $uploadedFiles[] = $filename;
        } else {
            // Handle file upload error
            $msg = "Error uploading file";
        }
    }

    if (!empty($uploadedFiles)) {
        // Insert the uploaded file names into the database
        $sql = "INSERT INTO coursesinfo (coursetitle, coursedescription, category, price, duration, courseimage) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($sql);
        
        // Prepare the bind parameters dynamically
        $bindTypes = str_repeat('s', count($uploadedFiles) + 5); // +5 for other parameters
        $bindValues = array_merge([$bindTypes], [$courseTitle, $courseDescription, $courseCategory, $coursePrice, $courseDuration], $uploadedFiles);
        
        // Bind parameters
        $stmt->bind_param(...$bindValues);
        
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            return "Success";
        }
    }
    
    return "Error adding the course.";
}

function getAllCourses() {
    $mysqli = connect();

    $sql = "SELECT * FROM coursesinfo";
    $result = $mysqli->query($sql);

    $courses = array();

    while ($row = $result->fetch_assoc()) {
        $courses[] = $row;
    }

    return $courses;
}

function enrollCourses() {

    
}







    
?>
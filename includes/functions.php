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
        // Email is not valid
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
        // Email is not valid
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

    // Note: It's better to hash and store passwords securely instead of applying further filtering here.

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

    // Note: It's better to hash and store passwords securely instead of applying further filtering here.

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
    $mysqli = connect(); // Assuming you have a database connection function

    $sql = "SELECT user_id, user_firstname, user_lastname, user_email FROM users WHERE user_username = ?";
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
    $mysqli = connect(); // Assuming you have a database connection function

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

    // Define the absolute path to the uploads directory
    $uploadDirectory = __DIR__ . '../uploads'; // Assuming this PHP file is in the root of your project

    // Move the uploaded files to the desired location
    foreach ($fileNames as $i => $filename) {
        $tempname = $fileTempNames[$i];
        $folder = $uploadDirectory . $filename;

        if (move_uploaded_file($tempname, $folder)) {
            $uploadedFiles[] = $filename;
        } else {
            // Handle file upload error
            $msg = "Error uploading file";
            return $msg;
        }
    }

    if (!empty($uploadedFiles)) {
        $insert_query = "INSERT INTO coursesinfo (coursetitle, coursedescription, category, price, duration, courseimage) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($insert_query);

        // Create a placeholder for binding the image filenames
        $imageFilenames = '';
        for ($i = 0; $i < count($uploadedFiles); $i++) {
            $imageFilenames .= 's';
        }

        // Combine all filenames into an array
        $params = [$courseTitle, $courseDescription, $courseCategory, $coursePrice, $courseDuration];
        foreach ($uploadedFiles as $filename) {
            $params[] = $filename;
        }

        // Bind parameters dynamically based on the number of filenames
        $stmt->bind_param($imageFilenames, ...$params);
        $stmt->execute();

        return "Success";
    } else {
        // Handle database insertion error
        return "Error adding the course.";
    }
}





    

        



// function getCategories($mysqli) {
//     $categories = array();

//     $query = "SELECT id, category FROM category";
//     $result = $mysqli->query($query);

//     if ($result) {
//         while ($row = $result->fetch_assoc()) {
//             $categories[$row['id']] = $row['category'];
//         }
//     }

//     return $categories;
// }
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

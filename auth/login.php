<?php
session_start();
include("../includes/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up to SkillUp - E-Learning Platform</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../assets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../assets/css/auth.css">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.png" />

    <!-- SweetAlert Script -->
    <script src="../assets/js/vendor/sweetalert.min.js"></script>
</head>

<body>

<?php
session_start();
include('includes/config.php');

if (isset($_POST['login'])) {
    $usernameOrEmail = $_POST['username_or_email'];
    $password = $_POST['password'];

    try {
        $stmt = $dbh->prepare("SELECT user_id, user_username, user_email, user_password, token, serial FROM users WHERE user_username = :input OR user_email = :input");
        $stmt->bindParam(':input', $usernameOrEmail);
        $stmt->execute();
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['user_password'])) {
            // Password matches, create session and set a cookie
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['user_username'] = $user['user_username'];
            $_SESSION['serial'] = $user['serial']; // Store the serial in the session

            if (isset($_POST['remember_me']) && $_POST['remember_me'] === 'on') {
                // Remember Me is checked, set a long-term cookie
                $cookieExpire = time() + 30 * 24 * 3600; // 30 days
                setcookie('remember_me', '1', $cookieExpire, '/');
            }

            // Set cookies for PHPSESSID, token, and serial
            setcookie('PHPSESSID', session_id(), time() + (86400 * 30), '/');
            setcookie('token', $user['token'], time() + (86400 * 30), '/');
            setcookie('serial', $user['serial'], time() + (86400 * 30), '/'); // Set the serial as a cookie

            // Redirect to the user's dashboard or another page as needed
            echo '
        <script>
          swal({
            title: "Good job!",
            text: "Registration successful!",
            icon: "success",
            timer: 1500,
            button: "Ok",
          }).then(function() {
            document.location = "../auth/login.php";
          });
        </script>
        ';
            exit();
        } else {
            echo '
        <script>
          swal({
            title: "Oops...",
            text: "Invalid Username or Password",
            icon: "error",
            button: "Ok",
          });
        </script>
        ';
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
} else {
    header("Location: login.php"); // Redirect to the login page if the form is not submitted
    exit();
}
?>


    <div class="main">
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img width="200px" src="../assets/images/logo.png" alt=""></figure>
                        <figure><img src="../assets/images/signin-image.png" alt="signin image"></figure>
                        <a href="../auth/register.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username_or_email" id="username_or_email" placeholder="Username or Email" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="./assets/js/vendor/jquery-3.6.0.min.js"></script>
</body>

</html>
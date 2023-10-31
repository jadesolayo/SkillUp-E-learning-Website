<?php
require "../includes/functions.php";
if (isset($_POST['register'])) {
    $response = registerInstructor($_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['email'], $_POST['password'], $_POST['confirm_password']);
}
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
    <link rel="stylesheet" href="../assets/css/alert.css" />

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="../assets/css/vendor/fontawesome-all.min.css" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.png" />

    <!-- SweetAlert Script -->
    <script src="../assets/js/vendor/sweetalert.min.js"></script>
</head>

<body>

    <div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <?php
                            if (@$response == "Success") {
                            ?>
                                <p class="success"> Registration successful! </p>
                            <?php
                            } else {
                            ?>
                                <p class="error"> <?php echo @$response; ?> </p>
                            <?php
                            }
                            ?>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="firstname" id="firstname" placeholder="First Name" value="<?php echo @$_POST['firstname']; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="lastname" id="lastname" placeholder="Last Name" value="<?php echo @$_POST['lastname']; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Username" value="<?php echo @$_POST['username']; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="email" id="email" placeholder="Your Email" value="<?php echo @$_POST['email']; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" value="<?php echo @$_POST['Password']; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="confirm_password" id="confirm_password" placeholder="Repeat your password" value="<?php echo @$_POST['confirm_password']; ?>" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="register" id="register" class="form-submit" value="Register" />
                            </div>



                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img width="200px" src="../assets/images/logo.png" alt=""></figure>
                        <figure><img src="../assets/images/add-information.png" alt="sing up image"></figure>
                        <a href="../auth/instructor-login.php" class="signup-image-link">Already have an account? Login</a>
                    </div>
                </div>
            </div>
        </section>

        <script src="./assets/js/vendor/jquery-3.6.0.min.js"></script>
</body>

</html>
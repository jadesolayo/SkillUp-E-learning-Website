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
    if (isset($_POST['register'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm_password'];

        if ($password !== $confirmPassword) {
            echo "<script>
        swal({
            icon: 'error',
            title: 'Error',
            text: 'Passwords do not match'
        });
        </script>";
        } else {
            try {
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                $token = generateToken(); 
                $serial = generateSerial(); 

                $sql = "INSERT INTO users (user_firstname, user_lastname, user_username, user_email, user_password, token, serial) VALUES (:firstname, :lastname, :username, :email, :password, :token, :serial)";
                $query = $dbh->prepare($sql);
                $query->bindParam(':firstname', $firstname, PDO::PARAM_STR);
                $query->bindParam(':lastname', $lastname, PDO::PARAM_STR);
                $query->bindParam(':username', $username, PDO::PARAM_STR);
                $query->bindParam(':email', $email, PDO::PARAM_STR);
                $query->bindParam(':password', $passwordHash, PDO::PARAM_STR);
                $query->bindParam(':token', $token, PDO::PARAM_STR);
                $query->bindParam(':serial', $serial, PDO::PARAM_STR);
                if ($query->execute()) {
                    
                    // Store session variables
                    $_SESSION['phpsessid'] = session_id();
                    $_SESSION['token'] = $token;
                    $_SESSION['serial'] = $serial;
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
                } else {
                    echo '
        <script>
          swal({
            title: "Oops...",
            text: "Error registering user",
            icon: "error",
            button: "Ok",
          });
        </script>
        ';
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
    // Function to generate a random token (you can replace this with your own implementation)
    function generateToken()
    {
        return bin2hex(random_bytes(16));
    }

    // Function to generate a random serial (you can replace this with your own implementation)
    function generateSerial()
    {
        return uniqid();
    }
    ?>

    <div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="firstname" id="firstname" placeholder="First Name" />
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="lastname" id="lastname" placeholder="Last Name" />
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Username" />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="confirm_password" id="confirm_password" placeholder="Repeat your password" />
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
                        <figure><img src="../assets/images/signup-image.png" alt="sing up image"></figure>
                        <a href="../auth/login.php" class="signup-image-link">Already have an account? Login</a>
                    </div>
                </div>
            </div>
        </section>

        <script src="./assets/js/vendor/jquery-3.6.0.min.js"></script>
</body>

</html>
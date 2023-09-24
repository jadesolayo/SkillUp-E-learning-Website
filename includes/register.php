<?php
// include("includes/functions.php");
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
            text: 'password does not match'
        });
        </script>";
    } else {
        try {
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $token = generateToken(); 
            $serial = generateSerial(); 
            $status = 'active'; 
            $sql = "INSERT INTO users(user_firstname, user_lastname, user_username, user_email, user_password, token, serial, status) VALUES (:firstname, :lastname, :username, :email, :password, :token, :serial, :status)";
            $query = $dbh->prepare($sql);
            $query->bindParam(':firstname', $firstname, PDO::PARAM_STR);
            $$query->bindParam(':lastname', $lastname, PDO::PARAM_STR);
            $$query->bindParam(':username', $username, PDO::PARAM_STR);
            $$query->bindParam(':email', $email, PDO::PARAM_STR);
            $query->bindParam(':password', $passwordHash, PDO::PARAM_STR);
            $$query->bindParam(':token', $token, PDO::PARAM_STR);
            $$query->bindParam(':serial', $serial, PDO::PARAM_STR);
            $$query->bindParam(':status', $status, PDO::PARAM_STR);
            $query->execute();
            $lastInsertId = $dbh->lastInsertId();
            if ($lastInsertId) {
                // Store session variables
                $_SESSION['phpsessid'] = session_id();
                $_SESSION['token'] = $token;
                $_SESSION['serial'] = $serial;
                echo "<script>
            swal({
                icon: 'success',
                title: 'Welcome!',
                text: 'Registration successful !!,
                timer: 1500,
            }).then (function(){
                document.location = 'dashboard.php';
            });
            </script>";
            } else {
                echo "<script>
            swal({
                icon: 'error',
                title: 'Oops...!',
                text: 'Unexpected error',
                timer: 1500,
            });
            </script>";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
function generateToken() {
    return bin2hex(random_bytes(16));
}

function generateSerial() {
    return uniqid();
}
?>
<div class="modal fade" id="registerModal">
    <div class="modal-dialog modal-dialog-centered modal-register">

        <!-- Modal Wrapper Start -->
        <div class="modal-wrapper">
            <button class="modal-close" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>

            <!-- Modal Content Start -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sign Up</h5>
                    <p class="modal-description">Already have an account? <button data-bs-toggle="modal" data-bs-target="#loginModal">Log in</button></p>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="row gy-5">
                            <div class="col-md-6">
                                <div class="modal-form">
                                    <label class="form-label">First Name</label>
                                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-form">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-form">
                                    <label class="form-label">Username</label>
                                    <input type="text" name="username" id="username" class="form-control" placeholder="username">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-form">
                                    <label class="form-label">Email</label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-form">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-form">
                                    <label class="form-label">Re-Enter Password</label>
                                    <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Re-Enter Password">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="modal-form form-check">
                                    <input type="checkbox" id="privacy">
                                    <label for="privacy">Accept the Terms and Privacy Policy</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="modal-form">
                                    <button name="register" id="register" class="btn btn-primary btn-hover-secondary w-100">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="modal-social-option">
                        <p>or Sign up with</p>

                        <ul class="modal-social-btn">
                            <li><a href="#" class="btn facebook"><i class="fab fa-facebook-square"></i> Facebook</a></li>
                            <li><a href="<?php echo $authUrl; ?>" class="btn google"><i class="fab fa-google"></i> Google</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- Modal Content End -->

        </div>
        <!-- Modal Wrapper End -->

    </div>
</div>
<?php
// include_once("includes/config.php");

if (isset($_POST['login'])) {
    $usernameOrEmail = $_POST['username_or_email'];
    $password = $_POST['password'];

    $stmt = $dbh->prepare("SELECT user_id, user_username, user_email, user_password, token, serial, status FROM users WHERE user_username = :input OR user_email = :input");
    $stmt->bindParam(':input', $usernameOrEmail);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // Password matches, create session and set a cookie
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['serial'] = $user['serial']; // Store the serial in the session
        $_SESSION['status'] = $user['status'];

        if (isset($_POST['remember_me']) && $_POST['remember_me'] === 'on') {
            // Remember Me is checked, set a long-term cookie
            $cookieExpire = time() + 30 * 24 * 3600; // 30 days
            setcookie('remember_me', '1', $cookieExpire, '/');
        }

        setcookie('PHPSESSID', session_id(), time() + (86400 * 30), '/');
        setcookie('token', $user['token'], time() + (86400 * 30), '/');
        setcookie('serial', $user['serial'], time() + (86400 * 30), '/'); // Set the serial as a cookie

        // Redirect to the user's dashboard
        if ($user['status'] === 'active') {
            header("Location: dashboard/dashboard.php");
            exit();
        } elseif ($user['status'] === 'pending') {
            echo "Your account is pending activation.";
        } else {
            echo "Your account is disabled.";
        }
    } else {
        echo "Invalid username or password.";
    }
}
?>
<div class="modal fade" id="loginModal">
    <div class="modal-dialog modal-dialog-centered modal-login">

        <!-- Modal Wrapper Start -->
        <div class="modal-wrapper">
            <button class="modal-close" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>

            <!-- Modal Content Start -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Login</h5>
                    <p class="modal-description">Don't have an account yet? <button data-bs-toggle="modal" data-bs-target="#registerModal">Sign up for free</button></p>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="modal-form">
                            <label class="form-label">Username or email</label>
                            <input type="text" name="username_or_email" id="username_or_email" class="form-control" placeholder="Your username or email">
                        </div>
                        <div class="modal-form">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="modal-form d-flex justify-content-between flex-wrap gap-2">
                            <div class="form-check">
                                <input type="checkbox" name="remember_me" id="rememberme">
                                <label for="rememberme">Remember me</label>
                            </div>
                            <div class="text-end">
                                <a class="modal-form__link" href="#">Forgot your password?</a>
                            </div>
                        </div>
                        <div class="modal-form">
                            <button name="login" id="login" class="btn btn-primary btn-hover-secondary w-100">Log In</button>
                        </div>
                    </form>

                    <div class="modal-social-option">
                        <p>or Log-in with</p>

                        <ul class="modal-social-btn">
                            <li><a href="#" class="btn facebook"><i class="fab fa-facebook-square"></i> Gacebook</a></li>
                            <li><a href="#" class="btn google"><i class="fab fa-google"></i> Google</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Modal Content End -->

        </div>
        <!-- Modal Wrapper End -->

    </div>
</div>
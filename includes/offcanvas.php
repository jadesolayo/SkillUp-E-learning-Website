<!-- Offcanvas Start -->
<div
        class="offcanvas offcanvas-end offcanvas-mobile"
        id="offcanvasMobileMenu"
        style="background-image: url(assets/images/logo.png)"
      >
        <div class="offcanvas-header bg-white">
          <div class="offcanvas-logo">
            <a class="offcanvas-logo__logo" href="#"
              ><img src="assets/images/logo.png" alt="Logo"
            /></a>
          </div>
          <button
            type="button"
            class="offcanvas-close"
            data-bs-dismiss="offcanvas"
          >
            <i class="fas fa-times"></i>
          </button>
        </div>

        <div class="offcanvas-body">
          <nav class="canvas-menu">
            <ul class="offcanvas-menu">
              <li>
                <a class="active" href="../index.php"><span>Home</span></a>
              </li>
              <li>
                <a href=""><span>Courses</span></a>
              </li>
              <li>
                <a href="../about.php"><span>About</span></a>
              </li>
              <li>
                <a href="../contact-us.php"><span>Contact Us</span></a>
              </li>
              <li>
                <a href="../become-an-instructor.php"><span>Become An Instructor</span></a>
              </li>
        </div>

        <!-- Header User Button Start -->
        <div class="offcanvas-user d-lg-none">
          <div class="offcanvas-user__button">
            <button
              class="offcanvas-user__login btn btn-secondary btn-hover-secondarys"
              data-bs-toggle="modal"
              data-bs-target="#loginModal"
            >
            <a href="auth/login.php">Login</a>
            </button>
          </div>
          <div class="offcanvas-user__button">
            <button
              class="offcanvas-user__signup btn btn-primary btn-hover-primary"
              data-bs-toggle="modal"
              data-bs-target="#registerModal"
            >
            <a href="auth/login.php">Sign Up</a>
            </button>
          </div>
        </div>
        <!-- Header User Button End -->
      </div>
      <!-- Offcanvas End -->
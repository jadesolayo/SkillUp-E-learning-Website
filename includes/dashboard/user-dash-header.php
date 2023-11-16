<div class="dashboard-header">
    <div class="container">
        <!-- Dashboard Header Wrapper Start -->
        <div class="dashboard-header__wrap">

            <div class="dashboard-header__toggle-menu d-xl-none">
                <button class="toggle-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDashboard">
                    <svg width="20px" height="18px" viewBox="0 0 20 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M18.7179688,2.60581293 L1.28207031,2.60581293 C0.573828125,2.60581293 0,2.02491559 0,1.30798783 C0,0.591060076 0.573828125,0.0101231939 1.28207031,0.0101231939 L18.7179688,0.0101231939 C19.4261719,0.0101231939 20,0.591020532 20,1.30798783 C20,2.02495513 19.4261719,2.60581293 18.7179688,2.60581293 Z"></path>
                        <path d="M11.5384766,10.5957293 L1.28207031,10.5957293 C0.573828125,10.5957293 2.91322522e-13,10.0147924 2.91322522e-13,9.29786464 C2.91322522e-13,8.58093688 0.573828125,8 1.28207031,8 L11.5384766,8 C12.2466797,8 12.8205469,8.58089734 12.8205469,9.29786464 C12.8205469,10.0148319 12.2466797,10.5957293 11.5384766,10.5957293 Z"></path>
                        <path d="M18.7179688,17.6 L1.28207031,17.6 C0.573828125,17.6 0,17.0628683 0,16.4 C0,15.7371317 0.573828125,15.2 1.28207031,15.2 L18.7179688,15.2 C19.4261719,15.2 20,15.7370952 20,16.4 C20,17.0628683 19.4261719,17.6 18.7179688,17.6 Z"></path>
                    </svg>
                </button>
            </div>

            <div class="dashboard-header__user">
                <div class="dashboard-header__user-avatar">
                    <img src="../assets/images/avatar.png" alt="Avatar" width="90" height="90">
                </div>
                <div class="dashboard-header__user-info">
                    <h4 class="dashboard-header__user-name"><span class="welcome-text">Welcome,</span> <?php echo $_SESSION["user"] ?> </h4>

                </div>
            </div>

            <div class="dashboard-header__btn">
                <form action="dashboard-all-course.php" method="GET">
                    <div class="input-group">
                        <input type="search" name="query" class="form-control" placeholder="Search Courses" aria-label="Search Courses" style="border-radius: 10px 0 0 10px;">
                        <button class="btn btn-outline-primary" type="submit" style="border-radius: 0 10px 10px 0;">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>

            <!-- <div class="dashboard-header__toggle">
                        <button class="btn btn-toggle"><i class="fas fa-bars"></i></button>
                    </div> -->

        </div>
        <!-- Dashboard Header Wrapper End -->
    </div>
</div>
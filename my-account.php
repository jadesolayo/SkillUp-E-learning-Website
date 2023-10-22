<!DOCTYPE html>
<html class="no-js" lang="en">

<?php include("includes/head-tag.php") ?>

<body>

    <main class="main-wrapper">

        <!-- Header start -->
        <?php include("includes/header.php") ?>
        <!-- Header End -->



        <!-- Page Banner Section Start -->
        <div class="page-banner">
            <div class="page-banner__wrapper">
                <div class="container">

                    <!-- Page Breadcrumb Start -->
                    <div class="page-breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">My account</li>
                        </ul>
                    </div>
                    <!-- Page Breadcrumb End -->

                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->

        <!-- Offcanvas Start -->
        <?php include("includes/offcanvas.php") ?>
        <!-- Offcanvas End -->

        <!-- Account Section Start -->
        <div class="account-section section-padding-01">
            <div class="container custom-container">

                <!-- Account Profile Start -->
                <div class="account-profile">
                    <div class="account-profile__avatar">
                        <img src="assets/images/avatar/avatar-02.jpg" alt="Avatar">
                    </div>
                    <div class="account-profile__info">
                        <div class="account-profile__text">Hello!</div>
                        <h6 class="account-profile__name">Adeniyi David</h6>
                    </div>
                </div>
                <!-- Account Profile End -->

                <div class="row gy-6">
                    <div class="col-lg-3">
                        <!-- My Account Menu Start -->
                        <div class="my-account-menu">
                            <ul class="nav flex-column">
                                <li><button class="active" data-bs-toggle="tab" data-bs-target="#tab1">Dashboard</button></li>
                                <li><button data-bs-toggle="tab" data-bs-target="#tab2">Orders</button></li>
                                <li><button data-bs-toggle="tab" data-bs-target="#tab3">Downloads</button></li>
                                <li><button data-bs-toggle="tab" data-bs-target="#tab4">Addresses</button></li>
                                <li><button data-bs-toggle="tab" data-bs-target="#tab5">Payment methods</button></li>
                                <li><button data-bs-toggle="tab" data-bs-target="#tab6">Account details</button></li>
                                <li><a href="index.html">Logout</a></li>
                            </ul>
                        </div>
                        <!-- My Account Menu End -->
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab1">
                                <!-- Account Dashboard Start -->
                                <div class="my-account-item dashboard">
                                    <p>Hello <strong>Adeniyi David</strong> (not <strong>Adeniyi David</strong>? <a href="#">Log out</a>)</p>
                                    <p>From your account dashboard you can view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a>, and <a href="#">edit your password and account details</a>.</p>
                                </div>
                                <!-- Account Dashboard End -->
                            </div>
                            <div class="tab-pane fade" id="tab2">
                                <!-- Account Order Start -->
                                <div class="my-account-item oeder">
                                    <div class="my-account-item__table table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th><span>Order</span></th>
                                                    <th><span>Date</span></th>
                                                    <th><span>Status</span></th>
                                                    <th><span>Total</span></th>
                                                    <th><span>Actions</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="order">
                                                        <a href="#">#10652</a>
                                                    </td>
                                                    <td class="date">
                                                        <span>January 7, 2022</span>
                                                    </td>
                                                    <td class="status">Cancelled</td>
                                                    <td class="total"><span class="price">$65<span class="separator">.00</span></span> for 1 item</td>
                                                    <td class="actions">
                                                        <a href="#" class="btn btn-primary btn-hover-secondary">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="order">
                                                        <a href="#">#10568</a>
                                                    </td>
                                                    <td class="date">
                                                        <span>January 2, 2022</span>
                                                    </td>
                                                    <td class="status">On hold</td>
                                                    <td class="total"><span class="price">$34<span class="separator">.00</span></span> for 1 item</td>
                                                    <td class="actions">
                                                        <a href="#" class="btn btn-primary btn-hover-secondary">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="order">
                                                        <a href="#">#10541</a>
                                                    </td>
                                                    <td class="date">
                                                        <span>January 1, 2022</span>
                                                    </td>
                                                    <td class="status">Processing</td>
                                                    <td class="total"><span class="price">$84<span class="separator">.00</span></span> for 1 item</td>
                                                    <td class="actions">
                                                        <a href="#" class="btn btn-primary btn-hover-secondary">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="order">
                                                        <a href="#">#10526</a>
                                                    </td>
                                                    <td class="date">
                                                        <span>December 31, 2021</span>
                                                    </td>
                                                    <td class="status">Processing</td>
                                                    <td class="total"><span class="price">$9<span class="separator">.99</span></span> for 1 item</td>
                                                    <td class="actions">
                                                        <a href="#" class="btn btn-primary btn-hover-secondary">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="order">
                                                        <a href="#">#10520</a>
                                                    </td>
                                                    <td class="date">
                                                        <span>December 30, 2021</span>
                                                    </td>
                                                    <td class="status">Processing</td>
                                                    <td class="total"><span class="price">$15<span class="separator">.50</span></span> for 1 item</td>
                                                    <td class="actions">
                                                        <a href="#" class="btn btn-primary btn-hover-secondary">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="order">
                                                        <a href="#">#10498</a>
                                                    </td>
                                                    <td class="date">
                                                        <span>December 28, 2021</span>
                                                    </td>
                                                    <td class="status">Processing</td>
                                                    <td class="total"><span class="price">$129<span class="separator">.00</span></span> for 1 item</td>
                                                    <td class="actions">
                                                        <a href="#" class="btn btn-primary btn-hover-secondary">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="order">
                                                        <a href="#">#10476</a>
                                                    </td>
                                                    <td class="date">
                                                        <span>December 27, 2021</span>
                                                    </td>
                                                    <td class="status">Processing</td>
                                                    <td class="total"><span class="price">$129<span class="separator">.00</span></span> for 1 item</td>
                                                    <td class="actions">
                                                        <a href="#" class="btn btn-primary btn-hover-secondary">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="order">
                                                        <a href="#">#10464</a>
                                                    </td>
                                                    <td class="date">
                                                        <span>December 24, 2021</span>
                                                    </td>
                                                    <td class="status">On hold</td>
                                                    <td class="total"><span class="price">$46<span class="separator">.00</span></span> for 1 item</td>
                                                    <td class="actions">
                                                        <a href="#" class="btn btn-primary btn-hover-secondary">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="order">
                                                        <a href="#">#10420</a>
                                                    </td>
                                                    <td class="date">
                                                        <span>December 22, 2021</span>
                                                    </td>
                                                    <td class="status">Processing</td>
                                                    <td class="total"><span class="price">$169<span class="separator">.00</span></span> for 1 item</td>
                                                    <td class="actions">
                                                        <a href="#" class="btn btn-primary btn-hover-secondary">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="order">
                                                        <a href="#">#10328</a>
                                                    </td>
                                                    <td class="date">
                                                        <span>December 14, 2021</span>
                                                    </td>
                                                    <td class="status">Processing</td>
                                                    <td class="total"><span class="price">$0<span class="separator">.00</span></span> for 1 item</td>
                                                    <td class="actions">
                                                        <a href="#" class="btn btn-primary btn-hover-secondary">View</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="my-account-item__btn">
                                        <a class="btn btn-primary btn-hover-secondary" href="#">Next</a>
                                    </div>
                                </div>
                                <!-- Account Order End -->
                            </div>
                            <div class="tab-pane fade" id="tab3">
                                <!-- Account Downloads Start -->
                                <div class="my-account-item downloads">
                                    <div class="edumall-notices">
                                        <p><i class="fas fa-info-circle"></i> No downloads available yet.</p>
                                        <a class="notices-btn" href="#">Browse products</a>
                                    </div>
                                </div>
                                <!-- Account Downloads End -->
                            </div>
                            <div class="tab-pane fade" id="tab4">
                                <!-- Account Addresses Start -->
                                <div class="my-account-item addresses">
                                    <p>The following addresses will be used on the checkout page by default.</p>

                                    <div class="row gy-6">
                                        <div class="col-md-6">
                                            <!-- Account Addresses Start -->
                                            <div class="my-account-item__addresses">

                                                <div class="my-account-item__addresses-header">
                                                    <h3 class="my-account-item__addresses-title">Billing address </h3>
                                                    <a href="#" class="my-account-item__addresses-edit"></a>
                                                </div>

                                                <address>Verna Cormier<br>Keebler Group<br>517 Marks Route<br>#5<br>North Marquiseton, NM 77892-1844</address>

                                            </div>
                                            <!-- Account Addresses End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Account Addresses Start -->
                                            <div class="my-account-item__addresses">

                                                <div class="my-account-item__addresses-header">
                                                    <h3 class="my-account-item__addresses-title">Shipping address </h3>
                                                    <a href="#" class="my-account-item__addresses-edit"></a>
                                                </div>

                                                <address>Verna Cormier<br>Keebler Group<br>2134 Lawndale Dr<br>#10<br>Greensboro, NY 27408</address>

                                            </div>
                                            <!-- Account Addresses End -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Account Addresses End -->
                            </div>
                            <div class="tab-pane fade" id="tab5">
                                <!-- Account Payment methods Start -->
                                <div class="my-account-item payment">
                                    <div class="my-account-item__table-payment table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Method</th>
                                                    <th>Expires</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Visa ending in 4242</td>
                                                    <td>04/24</td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary btn-hover-secondary">Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="my-account-item__btn">
                                        <a class="btn btn-primary btn-hover-secondary" href="#">Add payment method</a>
                                    </div>
                                </div>
                                <!-- Account Payment methods End -->
                            </div>
                            <div class="tab-pane fade" id="tab6">
                                <!-- Account Account details Start -->
                                <div class="my-account-item account">
                                    <form action="#">
                                        <div class="row gy-4">
                                            <div class="col-md-6">
                                                <!-- Account Account details Start -->
                                                <div class="my-account-item__input">
                                                    <label class="form-label">First name *</label>
                                                    <input type="text" class="form-control" placeholder="Your Name *">
                                                </div>
                                                <!-- Account Account details End -->
                                            </div>
                                            <div class="col-md-6">
                                                <!-- Account Account details Start -->
                                                <div class="my-account-item__input">
                                                    <label class="form-label">Last name *</label>
                                                    <input type="text" class="form-control" placeholder="Last Name *">
                                                </div>
                                                <!-- Account Account details End -->
                                            </div>
                                            <div class="col-md-6">
                                                <!-- Account Account details Start -->
                                                <div class="my-account-item__input">
                                                    <label class="form-label">Display name *</label>
                                                    <input type="text" class="form-control" placeholder="Display Name *">
                                                    <em>This will be how your name will be displayed in the account section and in reviews</em>
                                                </div>
                                                <!-- Account Account details End -->
                                            </div>
                                            <div class="col-md-6">
                                                <!-- Account Account details Start -->
                                                <div class="my-account-item__input">
                                                    <label class="form-label">Email Address *</label>
                                                    <input type="text" class="form-control" placeholder="Email Address *">
                                                </div>
                                                <!-- Account Account details End -->
                                            </div>
                                        </div>

                                        <div class="my-account-item__password">
                                            <span class="legend">Password change</span>

                                            <!-- Account Account details Start -->
                                            <div class="my-account-item__input">
                                                <label class="form-label">Current password</label>
                                                <input type="text" class="form-control" placeholder="Your Name *">
                                                <em>Leave blank to leave unchanged.</em>
                                            </div>
                                            <!-- Account Account details End -->

                                            <!-- Account Account details Start -->
                                            <div class="my-account-item__input">
                                                <label class="form-label">New password</label>
                                                <input type="text" class="form-control" placeholder="Your Name *">
                                                <em>Leave blank to leave unchanged.</em>
                                            </div>
                                            <!-- Account Account details End -->

                                            <!-- Account Account details Start -->
                                            <div class="my-account-item__input">
                                                <label class="form-label">Confirm New password</label>
                                                <input type="text" class="form-control" placeholder="Your Name *">
                                            </div>
                                            <!-- Account Account details End -->

                                        </div>

                                        <!-- Account Account details Start -->
                                        <div class="my-account-item__input">
                                            <button class="btn btn-primary btn-hover-secondary">Save changes</button>
                                        </div>
                                        <!-- Account Account details End -->
                                    </form>
                                </div>
                                <!-- Account Account details End -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Account Section End -->

        <!-- Footer Start -->
        <?php include("includes/footer.php") ?>
        <!-- Footer End -->

        <!--Back To Start-->
        <button id="backBtn" class="back-to-top backBtn">
            <i class="arrow-top fas fa-arrow-up"></i>
            <i class="arrow-bottom fas fa-arrow-up"></i>
        </button>
        <!--Back To End-->


    </main>

    






    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="./assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="./assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="./assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="./assets/js/plugins/aos.js"></script>
    <script src="./assets/js/plugins/parallax.js"></script>
    <script src="./assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/jquery.powertip.min.js"></script>
    <script src="./assets/js/plugins/nice-select.min.js"></script>
    <script src="./assets/js/plugins/glightbox.min.js"></script>
    <script src="./assets/js/plugins/jquery.sticky-kit.min.js"></script>
    <script src="./assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="./assets/js/plugins/masonry.pkgd.min.js"></script>
    <script src="./assets/js/plugins/flatpickr.js"></script>
    <script src="./assets/js/plugins/range-slider.js"></script>
    <script src="./assets/js/plugins/select2.min.js"></script>


    <!-- Activation JS -->
    <script src="./assets/js/main.js"></script>


</body>

</html>
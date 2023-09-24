<!DOCTYPE html>
<html class="no-js" lang="en">

<?php include("includes/head-tag.php") ?>

<body>

    <main class="main-wrapper">

        <!-- Header start -->
        <div class="header-section header-sticky">

            <!-- Header Top Start -->
            <div class="header-top d-none d-sm-block">
                <div class="container">

                    <!-- Header Top Bar Wrapper Start -->
                    <div class="header-top-bar-wrap d-sm-flex justify-content-between">

                        <div class="header-top-bar-wrap__info">
                            <ul class="header-top-bar-wrap__info-list">
                                <li><a href="tel:+8819906886"><i class="fas fa-phone"></i> <span class="info-text">(+88) 1990 6886</span></a></li>
                                <li><a href="mailto:agency@example.com"><i class="far fa-envelope"></i> <span class="info-text">agency@example.com</span></a></li>
                            </ul>
                        </div>

                        <div class="header-top-bar-wrap__info d-sm-flex">
                            <ul class="header-top-bar-wrap__info-list d-none d-lg-flex">
                                <li><button data-bs-toggle="modal" data-bs-target="#loginModal">Log in</button></li>
                                <li><button data-bs-toggle="modal" data-bs-target="#registerModal">Register</button></li>
                            </ul>
                            <ul class="header-top-bar-wrap__info-social">
                                <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- Header Top Bar Wrapper End -->

                </div>
            </div>
            <!-- Header Top End -->

            <!-- Header Main Start -->
            <?php include("includes/header.php") ?>
            <!-- Header Main End -->

        </div>
        <!-- Header End -->



        <!-- Page Banner Section Start -->
        <div class="page-banner bg-color-05">
            <div class="page-banner__wrapper">
                <div class="container">

                    <!-- Page Breadcrumb Start -->
                    <div class="page-breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Cart</li>
                        </ul>
                    </div>
                    <!-- Page Breadcrumb End -->

                    <!-- Page Banner Caption Start -->
                    <div class="page-banner__caption text-center">
                        <h2 class="page-banner__main-title">Cart</h2>
                    </div>
                    <!-- Page Banner Caption End -->

                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->

        <!-- Offcanvas Start -->
        <?php include("includes/offcanvas.php") ?>
        <!-- Offcanvas End -->

        <!-- Cart Section Start -->
        <div class="cart-section section-padding-01">
            <div class="container custom-container">

                <form action="#">

                    <!-- Cart Table Start -->
                    <div class="cart-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="product">Product</th>
                                    <th class="price">Price</th>
                                    <th class="quantity">Quantity</th>
                                    <th class="subtotal">Subtotal</th>
                                    <th class="action"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product">
                                        <div class="cart-product">
                                            <div class="cart-product__thumbnail">
                                                <img src="assets/images/product/product-2.png" alt="Product" width="70" height="81">
                                            </div>
                                            <div class="cart-product__content">
                                                <h3 class="cart-product__name">Awesome for Websites</h3>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="price">
                                        <div class="cart-product__price">
                                            <span class="sale-price">$59.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td class="quantity">
                                        <div class="cart-product">
                                            <div class="product-quantity">
                                                <button type="button" class="sub"></button>
                                                <input type="text" value="1">
                                                <button type="button" class="add"></button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="subtotal">
                                        <div class="cart-product__total-price">
                                            <span class="sale-price discount">$59.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td class="action">
                                        <div class="cart-product__remove">
                                            <a class="remove" href="#">Remove</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product">
                                        <div class="cart-product">
                                            <div class="cart-product__thumbnail">
                                                <img src="assets/images/product/product-3.png" alt="Product" width="70" height="81">
                                            </div>
                                            <div class="cart-product__content">
                                                <h3 class="cart-product__name">Business Administration</h3>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="price">
                                        <div class="cart-product__price">
                                            <span class="sale-price">$26.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td class="quantity">
                                        <div class="cart-product">
                                            <div class="product-quantity">
                                                <button type="button" class="sub"></button>
                                                <input type="text" value="1">
                                                <button type="button" class="add"></button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="subtotal">
                                        <div class="cart-product__total-price">
                                            <span class="sale-price discount">$26.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td class="action">
                                        <div class="cart-product__remove">
                                            <a class="remove" href="#">Remove</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product">
                                        <div class="cart-product">
                                            <div class="cart-product__thumbnail">
                                                <img src="assets/images/product/product-14.png" alt="Product" width="70" height="81">
                                            </div>
                                            <div class="cart-product__content">
                                                <h3 class="cart-product__name">The Five Invitations</h3>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="price">
                                        <div class="cart-product__price">
                                            <span class="sale-price">$42.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td class="quantity">
                                        <div class="cart-product">
                                            <div class="product-quantity">
                                                <button type="button" class="sub"></button>
                                                <input type="text" value="1">
                                                <button type="button" class="add"></button>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="subtotal">
                                        <div class="cart-product__total-price">
                                            <span class="sale-price discount">$42.<small class="separator">00</small></span>
                                        </div>
                                    </td>
                                    <td class="action">
                                        <div class="cart-product__remove">
                                            <a class="remove" href="#">Remove</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Cart Table End -->

                    <!-- Cart Actions Start -->
                    <div class="cart-action d-flex flex-wrap justify-content-between gap-2">
                        <div class="cart-action__left">
                            <a class="btn btn-light btn-hover-primary" href="#">Continue shopping</a>
                            <a class="cart-action__item" href="#"><i class="fas fa-times"></i> Clear shopping cart</a>
                        </div>
                        <div class="cart-action__right">
                            <button class="btn btn-secondary btn-hover-primary">Update cart</button>
                        </div>
                    </div>
                    <!-- Cart Actions End -->

                    <!-- Cart Collaterals Start -->
                    <div class="cart-collaterals">
                        <div class="row gy-6">
                            <div class="col-lg-4">
                                <!-- Cart Collaterals Start -->
                                <div class="cart-collaterals__item">
                                    <h5 class="cart-collaterals__title">Coupon Discount</h5>
                                    <p>Enter your coupon code if you have one.</p>

                                    <div class="cart-collaterals__input">
                                        <input type="text" class="form-control" placeholder="Coupon code">
                                    </div>
                                    <div class="cart-collaterals__input">
                                        <button class="btn btn-primary btn-hover-secondary">Apply coupon</button>
                                    </div>
                                </div>
                                <!-- Cart Collaterals End -->
                            </div>
                            <div class="col-lg-4">
                                <!-- Cart Collaterals Start -->
                                <div class="cart-collaterals__item">
                                    <h5 class="cart-collaterals__title">Calculate shipping</h5>
                                    <p>Select a shipping method</p>

                                    <div class="cart-collaterals__shipping-method">
                                        <ul class="cart-collaterals__shipping-check">
                                            <li class="form-check">
                                                <input type="radio" id="radio1" checked="" name="shipping">
                                                <label for="radio1">Free shipping</label>
                                            </li>
                                            <li class="form-check">
                                                <input type="radio" id="radio2" name="shipping">
                                                <label for="radio2">Flat rate: <strong class="price">$5.00</strong></label>
                                            </li>
                                        </ul>
                                    </div>

                                    <p>Shipping to <strong>2134 Lawndale Dr, #10, Greensboro, NY 27408</strong>.</p>

                                    <div class="cart-collaterals__input">
                                        <select class="select2">
                                            <option value="01">option 01</option>
                                            <option value="02">option 02</option>
                                            <option value="03">option 03</option>
                                            <option value="04">option 04</option>
                                            <option value="05">option 05</option>
                                            <option value="06">option 06</option>
                                            <option value="07">option 07</option>
                                            <option value="08">option 08</option>
                                            <option value="09">option 09</option>
                                            <option value="10">option 10</option>
                                            <option value="11">option 11</option>
                                            <option value="12">option 12</option>
                                            <option value="13">option 13</option>
                                        </select>
                                    </div>
                                    <div class="cart-collaterals__input">
                                        <input type="text" class="form-control" placeholder="Town / City">
                                    </div>
                                    <div class="cart-collaterals__input">
                                        <input type="text" class="form-control" placeholder="Postcode / ZIP">
                                    </div>
                                    <div class="cart-collaterals__input">
                                        <button class="btn btn-primary btn-hover-secondary">Update</button>
                                    </div>
                                </div>
                                <!-- Cart Collaterals End -->
                            </div>
                            <div class="col-lg-4">
                                <!-- Cart Collaterals Start -->
                                <div class="cart-collaterals__item">

                                    <div class="cart-collaterals__box">
                                        <table class="cart-collaterals__table">
                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td>
                                                        <span class="subtotal-price">$131<span class="separator">.00</span></span>
                                                    </td>
                                                </tr>
                                                <tr class="cart-shipping">
                                                    <th>Shipping</th>
                                                    <td>Free shipping <span class="shipping-fee">$5<span class="separator">.00</span></span></td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td>
                                                        <span class="total-price">$136<span class="separator">.00</span></span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="cart-collaterals__btn">
                                            <a class="btn btn-primary btn-hover-secondary w-100" href="checkout.html">Checkout</a>
                                        </div>
                                    </div>

                                </div>
                                <!-- Cart Collaterals End -->
                            </div>
                        </div>
                    </div>
                    <!-- Cart Collaterals End -->

                </form>

            </div>
        </div>
        <!-- Cart Section End -->

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

    <!-- Log In Modal Start -->
    <?php include("includes/login.php") ?>
    <?php include("includes/register.php") ?>
    <!-- Log In Modal End -->





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
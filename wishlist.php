<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SkillUp - E-Learning Platform</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon.png">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400&display=swap" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="./assets/css/vendor/fontawesome-all.min.css">
    <link rel="stylesheet" href="./assets/css/vendor/edumall-icon.css">
    <link rel="stylesheet" href="./assets/css/vendor/bootstrap.min.css">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="./assets/css/plugins/aos.css">
    <link rel="stylesheet" href="./assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="./assets/css/plugins/perfect-scrollbar.css">
    <link rel="stylesheet" href="./assets/css/plugins/jquery.powertip.min.css">
    <link rel="stylesheet" href="./assets/css/plugins/glightbox.min.css">
    <link rel="stylesheet" href="./assets/css/plugins/flatpickr.min.css">
    <link rel="stylesheet" href="./assets/css/plugins/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="./assets/css/plugins/select2.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>

    <main class="main-wrapper">

        <!-- Header start -->
        <?php include("includes/header.php") ?>
        <!-- Header End -->



        <!-- Page Banner Section Start -->
        <div class="page-banner bg-color-05">
            <div class="page-banner__wrapper">
                <div class="container">

                    <!-- Page Breadcrumb Start -->
                    <div class="page-breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Wishlist</li>
                        </ul>
                    </div>
                    <!-- Page Breadcrumb End -->

                    <!-- Page Banner Caption Start -->
                    <div class="page-banner__caption text-center">
                        <h2 class="page-banner__main-title">Wishlist</h2>
                    </div>
                    <!-- Page Banner Caption End -->

                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->

        <!-- Offcanvas Start -->
        <?php include("includes/offcanvas.php") ?>
        <!-- Offcanvas End -->

        <!-- Wishlist Section Start -->
        <div class="wishlist-section section-padding-01">
            <div class="container custom-container">

                <!-- Cart Table Start -->
                <div class="cart-table table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="product">Product</th>
                                <th class="price">Price</th>
                                <th class="stock">Stock</th>
                                <th class="add-cart">Add to Cart</th>
                                <th class="action"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="product">
                                    <div class="cart-product">
                                        <div class="cart-product__thumbnail">
                                            <img src="assets/images/product/product-2.png" alt="Product" width="70" height="80">
                                        </div>
                                        <div class="cart-product__content">
                                            <h3 class="cart-product__name">Awesome for Websites</h3>
                                            <p class="cart-product__date">January 15, 2022</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="price">
                                    <div class="cart-product__price">
                                        <span class="sale-price">$59.<small class="separator">00</small></span>
                                    </div>
                                </td>
                                <td class="stock">
                                    <span class="in-stock">In stock</span>
                                </td>
                                <td class="add-cart">
                                    <button class="btn btn-primary btn-hover-secondary">Add to Cart</button>
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
                                            <img src="assets/images/product/product-3.png" alt="Product" width="70" height="80">
                                        </div>
                                        <div class="cart-product__content">
                                            <h3 class="cart-product__name">Business Administration</h3>
                                            <p class="cart-product__date">January 15, 2022</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="price">
                                    <div class="cart-product__price">
                                        <span class="sale-price">$26.<small class="separator">00</small></span>
                                    </div>
                                </td>
                                <td class="stock">
                                    <span class="in-stock">In stock</span>
                                </td>
                                <td class="add-cart">
                                    <button class="btn btn-primary btn-hover-secondary">Add to Cart</button>
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
                                            <img src="assets/images/product/product-14.png" alt="Product" width="70" height="80">
                                        </div>
                                        <div class="cart-product__content">
                                            <h3 class="cart-product__name">The Five Invitations</h3>
                                            <p class="cart-product__date">January 15, 2022</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="price">
                                    <div class="cart-product__price">
                                        <span class="sale-price">$42.<small class="separator">00</small></span>
                                    </div>
                                </td>
                                <td class="stock">
                                    <span class="out-stock">Out Of stock</span>
                                </td>
                                <td class="add-cart">
                                    <button class="btn btn-primary btn-hover-secondary">Add to Cart</button>
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

            </div>
        </div>
        <!-- Wishlist Section End -->

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
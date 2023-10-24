<?php
session_start();
include_once("includes/config.php");
?>
<!-- Header start -->
<div class="header-section header-sticky">
  <!-- Header Top Start -->
  <div class="header-top d-none d-sm-block">
    <div class="container">
      <!-- Header Top Bar Wrapper Start -->
      <div class="header-top-bar-wrap d-sm-flex justify-content-between">
        <div class="header-top-bar-wrap__info">
          <ul class="header-top-bar-wrap__info-list">
            <li>
              <a href="tel:+8819906886"><i class="fas fa-phone"></i>
                <span class="info-text">(+88) 1990 6886</span></a>
            </li>
            <li>
              <a href="mailto:agency@example.com"><i class="far fa-envelope"></i>
                <span class="info-text">agency@example.com</span></a>
            </li>
          </ul>
        </div>

              <div class="header-top-bar-wrap__info d-sm-flex">
                <ul class="header-top-bar-wrap__info-list d-none d-lg-flex">
                  <li>
                    <button>
                      <a href="auth/login.php">Log in</a>
                    </button>
                  </li>
                  <li>
                    <button>
                      <a href="auth/register.php">Register</a>
                    </button>
                  </li>
                </ul>
                <ul class="header-top-bar-wrap__info-social">
                  <li>
                    <a href="https://twitter.com/" target="_blank"
                      ><i class="fab fa-twitter"></i
                    ></a>
                  </li>
                  <li>
                    <a href="https://www.facebook.com/" target="_blank"
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/" target="_blank"
                      ><i class="fab fa-instagram"></i
                    ></a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com/" target="_blank"
                      ><i class="fab fa-linkedin-in"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="header-category-toggle__text">Explore</div>
          </a>

          <div class="header-category-dropdown-wrap">
            <ul class="header-category-dropdown">
              <li>
                <a href="shop-left-sidebar.html">
                  Design <span class="toggle-sub-menu"></span></a>

                <ul class="sub-categories children">
                  <li>
                    <a href="shop-left-sidebar.html">All Business</a>
                  </li>
                  <li>
                    <a href="#">Communications<span class="toggle-sub-menu"></span></a>

                    <ul class="course-list children">
                      <li>
                        <a class="categories-course" href="shop-single-list-left-sidebar.html">
                          <div class="categories-course__thumbnail">
                            <img src="assets/images/courses/courses-1.jpg" alt="Course" width="62" height="50" />
                          </div>
                          <div class="categories-course__caption">
                            <h5 class="categories-course__title">
                              Illustrator 2020 MasterClass
                            </h5>
                            <div class="categories-course__price">
                              <span class="categories-course__sale-price">$22.00</span>
                              <span class="categories-course__regular-price">$30.00</span>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="categories-course" href="shop-single-list-left-sidebar.html">
                          <div class="categories-course__thumbnail">
                            <img src="assets/images/courses/courses-2.jpg" alt="Course" width="62" height="50" />
                          </div>
                          <div class="categories-course__caption">
                            <h5 class="categories-course__title">
                              Illustrator 2020 MasterClass
                            </h5>
                            <div class="categories-course__price">
                              <span class="categories-course__sale-price">$22.00</span>
                              <span class="categories-course__regular-price">$30.00</span>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a class="categories-course" href="shop-single-list-left-sidebar.html">
                          <div class="categories-course__thumbnail">
                            <img src="assets/images/courses/courses-3.jpg" alt="Course" width="62" height="50" />
                          </div>
                          <div class="categories-course__caption">
                            <h5 class="categories-course__title">
                              Illustrator 2020 MasterClass
                            </h5>
                            <div class="categories-course__price">
                              <span class="categories-course__sale-price">$22.00</span>
                              <span class="categories-course__regular-price">$30.00</span>
                            </div>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="shop-left-sidebar.html">Entrepreneurship</a>
                  </li>
                  <li><a href="shop-left-sidebar.html">Finance</a></li>
                  <li><a href="shop-left-sidebar.html">Management</a></li>
                  <li><a href="shop-left-sidebar.html">Sales</a></li>
                  <li>
                    <a href="shop-left-sidebar.html">Strategy &amp; Analytics</a>
                  </li>
                </ul>
              </li>
              <li><a href="shop-left-sidebar.html">Business</a></li>
              <li><a href="shop-left-sidebar.html">Data Science</a></li>
              <li><a href="shop-left-sidebar.html">Development</a></li>
              <li><a href="shop-left-sidebar.html">Finance</a></li>
              <li>
                <a href="shop-left-sidebar.html">Health &amp; Fitness</a>
              </li>
              <li><a href="shop-left-sidebar.html">Lifestyle</a></li>
              <li><a href="shop-left-sidebar.html">Marketing</a></li>
              <li><a href="shop-left-sidebar.html">Music</a></li>
              <li>
                <a href="shop-left-sidebar.html">Personal Development</a>
              </li>
              <li><a href="shop-left-sidebar.html">Photography</a></li>
              <li>
                <a href="shop-left-sidebar.html">Teaching &amp; Academics</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- Header Category Menu End -->

        <!-- Header Inner Start -->
        <div class="header-inner">
          <!-- Header Search Start -->
          <div class="header-search">
            <form action="#">
              <input type="text" class="header-search__input" placeholder="Search..." />
              <button class="header-search__btn">
                <i class="fas fa-search"></i>
              </button>
            </form>
          </div>
          <!-- Header Search End -->

          <!-- Header Navigation Start -->
          <div class="header-navigation d-none d-xl-block">
            <nav class="menu-primary">
              <ul class="menu-primary__container">
                <li>
                  <a class="active" href="index.php"><span>Home</span></a>


                </li>
                <li>
                  <a href="about.php"><span>About</span></a>
                </li>
                <li>
                  <a href="courses.php"><span>Courses</span></a>
                  <ul class="mega-menu">
                    <li>
                      <!-- Mega Menu Content Start -->
                      <div class="mega-menu-content">
                        <div class="row">
                          <div class="col-xl-3">
                            <div class="menu-content-list">
                              <a href="index.html" class="menu-content-list__link">Main Demo
                                <span class="badge hot">Hot</span></a>
                              <a href="index-course-hub.html" class="menu-content-list__link">Course Hub</a>
                              <a href="index-online-academy.html" class="menu-content-list__link">Online Academy
                                <span class="badge hot">Hot</span></a>
                              <a href="index-university.html" class="menu-content-list__link">University</a>
                              <a href="index-education-center.html" class="menu-content-list__link">Education Center
                                <span class="badge hot">Hot</span></a>
                            </div>
                          </div>
                          <div class="col-xl-3">
                            <div class="menu-content-list">
                              <a href="index-language-academic.html" class="menu-content-list__link">Language
                                Academic</a>
                              <a href="index-single-instructor.html" class="menu-content-list__link">Single
                                Instructor</a>
                              <a href="index-dev.html" class="menu-content-list__link">Dev <span
                                  class="badge new">New</span></a>
                              <a href="index-online-art.html" class="menu-content-list__link">Online Art
                                <span class="badge new">New</span></a>
                            </div>
                          </div>
                          <div class="col-xl-6">
                            <div class="menu-content-banner" style="
                                      background-image: url(assets/images/home-megamenu-bg.jpg);
                                    ">
                              <h4 class="menu-content-banner__title">
                                Achieve Your Goals With EduMall
                              </h4>
                              <a href="#" class="menu-content-banner__btn btn btn-primary btn-hover-secondary">Purchase
                                now</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Mega Menu Content Start -->
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="blog.php"><span>Blog</span></a>
                </li>
                <!-- <li>
                        <a href="#"><span>Pages</span></a>
                      </li> -->
              </ul>
            </nav>
          </div>
          <!-- Header Navigation End -->

          <!-- Header Mini Cart Start -->
          <div class="header-action">
            <a href="#" class="header-action__btn">
              <i class="fas fa-shopping-basket"></i>
              <span class="header-action__number">3</span>
            </a>

            <!-- Header Mini Cart Start -->
            <div class="header-mini-cart">
              <!-- Header Mini Cart Product List Start -->
              <ul class="header-mini-cart__product-list">
                <li class="header-mini-cart__item">
                  <a href="#" class="header-mini-cart__close"></a>
                  <div class="header-mini-cart__thumbnail">
                    <a href="shop-single-list-left-sidebar.html"><img src="assets/images/product/product-1.png"
                        alt="Product" width="80" height="93" /></a>
                  </div>
                  <div class="header-mini-cart__caption">
                    <h3 class="header-mini-cart__name">
                      <a href="shop-single-list-left-sidebar.html">Awesome for Websites</a>
                    </h3>
                    <span class="header-mini-cart__quantity">1 × <strong class="amount">$49</strong><span
                        class="separator">.00</span></span>
                  </div>
                </li>
                <li class="header-mini-cart__item">
                  <a href="#" class="header-mini-cart__close"></a>
                  <div class="header-mini-cart__thumbnail">
                    <a href="shop-single-list-left-sidebar.html"><img src="assets/images/product/product-2.png"
                        alt="Product" width="80" height="93" /></a>
                  </div>
                  <div class="header-mini-cart__caption">
                    <h3 class="header-mini-cart__name">
                      <a href="shop-single-list-left-sidebar.html">Awesome for Websites</a>
                    </h3>
                    <span class="header-mini-cart__quantity">1 × <strong class="amount">$49</strong><span
                        class="separator">.00</span></span>
                  </div>
                </li>
                <li class="header-mini-cart__item">
                  <a href="#" class="header-mini-cart__close"></a>
                  <div class="header-mini-cart__thumbnail">
                    <a href="shop-single-list-left-sidebar.html"><img src="assets/images/product/product-3.png"
                        alt="Product" width="80" height="93" /></a>
                  </div>
                  <div class="header-mini-cart__caption">
                    <h3 class="header-mini-cart__name">
                      <a href="shop-single-list-left-sidebar.html">Awesome for Websites</a>
                    </h3>
                    <span class="header-mini-cart__quantity">1 × <strong class="amount">$49</strong><span
                        class="separator">.00</span></span>
                  </div>
                </li>
              </ul>
              <!-- Header Mini Cart Product List End -->

              <div class="header-mini-cart__footer">
                <div class="header-mini-cart__total">
                  <p class="header-mini-cart__label">Total:</p>
                  <p class="header-mini-cart__value">
                    $445<span class="separator">.99</span>
                  </p>
                </div>
                <div class="header-mini-cart__btn">
                  <a href="cart.html" class="btn btn-primary btn-hover-secondary">View cart</a>
                  <a href="checkout.html" class="btn btn-primary btn-hover-secondary">Checkout</a>
                </div>
              </div>
            </div>
            <!-- Header Mini Cart End -->
          </div>
          <!-- Header Mini Cart End -->

          <!-- Header Mobile Toggle Start -->
          <div class="header-toggle">
            <button class="header-toggle__btn d-xl-none" data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasMobileMenu">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
            </button>
            <button class="header-toggle__btn search-open d-flex d-md-none">
              <span class="dots"></span>
              <span class="dots"></span>
              <span class="dots"></span>
            </button>
          </div>
          <!-- Header Mobile Toggle End -->
        </div>
        <!-- Header Inner End -->
      </div>
      <!-- Header Main Wrapper End -->
    </div>
  </div>
  <!-- Header Main End -->
</div>
<!-- Header End -->
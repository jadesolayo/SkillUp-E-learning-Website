<!DOCTYPE html>
<html class="no-js" lang="en">

<?php include("includes/head-tag.php") ?>

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
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Courses</li>
                        </ul>
                    </div>
                    <!-- Page Breadcrumb End -->

                    <!-- Page Banner Caption Start -->
                    <div class="page-banner__caption text-center">
                        <h2 class="page-banner__main-title">Courses</h2>
                    </div>
                    <!-- Page Banner Caption End -->

                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->

        <!-- Offcanvas Start -->
        <?php include("includes/offcanvas.php") ?>
        <!-- Offcanvas End -->

        <!-- Courses Start -->
        <div class="courses-section section-padding-01">
            <div class="container">
                <div class="row gy-10 flex-row-reverse">
                    <div class="col-lg-9">

                        <!-- Archive Filter Bars Start -->
                        <div class="archive-filter-bars">

                            <div class="archive-filter-bar">
                                <p>We found <span>101</span> courses available for you</p>
                            </div>

                            <div class="archive-filter-bar">

                                <div class="filter-bar-wrapper">
                                    <span>See</span>
                                    <ul class="nav">
                                        <li><button class="active" data-bs-toggle="tab" data-bs-target="#grid"><i class="fas fa-th"></i></button></li>
                                        <li><button data-bs-toggle="tab" data-bs-target="#list"><i class="fas fa-bars"></i></button></li>
                                    </ul>
                                    <!-- <button class="btn btn-light btn-hover-primary collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFilter">
                                        <i class="fas fa-filter"></i>
                                        Filters
                                    </button> -->
                                    <div class="header-search">
                                        <form action="#">
                                            <input type="text" class="header-search__input" placeholder="Search..." />
                                            <button class="header-search__btn">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- Archive Filter Bars End -->

                        <!-- Filter Collapse Start -->

                        <!-- Filter Collapse End -->

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="grid">

                                <div class="row gy-6">
                                    <div class="col-lg-4 col-sm-6">

                                        <!-- Course Start -->
                                        <div class="course-item" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="course-header">
                                                <div class="course-header__thumbnail ">
                                                    <a href="course-single.php"><img src="assets/images/courses/courses-1.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-all">All Levels</span>
                                                <h3 class="course-info__title"><a href="course-single.php">Successful Negotiation: Master Your Negotiating Skills</a></h3>
                                                <a href="#" class="course-info__instructor">parra</a>
                                                <div class="course-info__price">
                                                    <span class="sale-price">$39.<small class="separator">00</small></span>
                                                </div>
                                                <div class="course-info__rating">

                                                    <div class="rating-star">
                                                        <div class="rating-label" style="width: 80%;"></div>
                                                    </div>

                                                    <span>(2)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Course End -->

                                    </div>
                                    <div class="col-lg-4 col-sm-6">

                                        <!-- Course Start -->
                                        <div class="course-item" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="course-header">
                                                <div class="course-header__thumbnail ">
                                                    <a href="course-single.php"><img src="assets/images/courses/courses-2.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-all">All Levels</span>
                                                <h3 class="course-info__title"><a href="course-single.php">Time Management Mastery: Do More, Stress Less</a></h3>
                                                <a href="#" class="course-info__instructor">parra</a>
                                                <div class="course-info__price">
                                                    <span class="sale-price">$29.<small class="separator">99</small></span>
                                                </div>
                                                <div class="course-info__rating">

                                                    <div class="rating-star">
                                                        <div class="rating-label" style="width: 80%;"></div>
                                                    </div>

                                                    <span>(2)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Course End -->

                                    </div>
                                    <div class="col-lg-4 col-sm-6">

                                        <!-- Course Start -->
                                        <div class="course-item" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="course-header">
                                                <div class="course-header__thumbnail ">
                                                    <a href="course-single.php"><img src="assets/images/courses/courses-3.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-beginner">Beginner</span>
                                                <h3 class="course-info__title"><a href="course-single.php">Angular – The Complete Guide (2020 Edition)</a></h3>
                                                <a href="#" class="course-info__instructor">parra</a>
                                                <div class="course-info__price">
                                                    <span class="sale-price">$49.<small class="separator">99</small></span>
                                                </div>
                                                <div class="course-info__rating">

                                                    <div class="rating-star">
                                                        <div class="rating-label" style="width: 80%;"></div>
                                                    </div>

                                                    <span>(2)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Course End -->

                                    </div>
                                    <div class="col-lg-4 col-sm-6">

                                        <!-- Course Start -->
                                        <div class="course-item" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="course-header">
                                                <div class="course-header__thumbnail ">
                                                    <a href="course-single.php"><img src="assets/images/courses/courses-4.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                                <div class="course-header__badge">
                                                    <span class="free">Free</span>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-beginner">All Levels</span>
                                                <h3 class="course-info__title"><a href="course-single.php">Consulting Approach to Problem Solving</a></h3>
                                                <a href="#" class="course-info__instructor">parra</a>
                                                <div class="course-info__price">
                                                    <span class="free">Free</span>
                                                </div>
                                                <div class="course-info__rating">

                                                    <div class="rating-star">
                                                        <div class="rating-label" style="width: 80%;"></div>
                                                    </div>

                                                    <span>(2)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Course End -->

                                    </div>
                                    <div class="col-lg-4 col-sm-6">

                                        <!-- Course Start -->
                                        <div class="course-item" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="course-header">
                                                <div class="course-header__thumbnail ">
                                                    <a href="course-single.php"><img src="assets/images/courses/courses-5.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                                <div class="course-header__badge">
                                                    <span class="free">Free</span>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-all">All Levels</span>
                                                <h3 class="course-info__title"><a href="course-single.php">The Business Intelligence Analyst Course 2020</a></h3>
                                                <a href="#" class="course-info__instructor">parra</a>
                                                <div class="course-info__price">
                                                    <span class="free">Free</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Course End -->

                                    </div>
                                    <div class="col-lg-4 col-sm-6">

                                        <!-- Course Start -->
                                        <div class="course-item" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="course-header">
                                                <div class="course-header__thumbnail ">
                                                    <a href="course-single.php"><img src="assets/images/courses/courses-6.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                                <div class="course-header__badge">
                                                    <span class="free">Free</span>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-all">All Levels</span>
                                                <h3 class="course-info__title"><a href="course-single.php">Become a Product Manager | Learn the Skills & Get the Job</a></h3>
                                                <a href="#" class="course-info__instructor">parra</a>
                                                <div class="course-info__price">
                                                    <span class="free">Free</span>
                                                </div>
                                                <div class="course-info__rating">

                                                    <div class="rating-star">
                                                        <div class="rating-label" style="width: 80%;"></div>
                                                    </div>

                                                    <span>(2)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Course End -->

                                    </div>
                                    <div class="col-lg-4 col-sm-6">

                                        <!-- Course Start -->
                                        <div class="course-item" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="course-header">
                                                <div class="course-header__thumbnail ">
                                                    <a href="course-single.php"><img src="assets/images/courses/courses-7.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-beginner">Beginner</span>
                                                <h3 class="course-info__title"><a href="course-single.php">Mechanical Engineering and Electrical Engineering Explained</a></h3>
                                                <a href="#" class="course-info__instructor">Oliver Porter</a>
                                                <div class="course-info__price">
                                                    <span class="sale-price">$84.<small class="separator">00</small></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Course End -->

                                    </div>
                                    <div class="col-lg-4 col-sm-6">

                                        <!-- Course Start -->
                                        <div class="course-item" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="course-header">
                                                <div class="course-header__thumbnail ">
                                                    <a href="course-single.php"><img src="assets/images/courses/courses-8.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-beginner">Beginner</span>
                                                <h3 class="course-info__title"><a href="course-single.php">Learn Algebra The Easy Way!</a></h3>
                                                <a href="#" class="course-info__instructor">Oliver Porter</a>
                                                <div class="course-info__price">
                                                    <span class="sale-price">$45.<small class="separator">00</small></span>
                                                </div>
                                                <div class="course-info__rating">

                                                    <div class="rating-star">
                                                        <div class="rating-label" style="width: 80%;"></div>
                                                    </div>

                                                    <span>(2)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Course End -->

                                    </div>
                                    <div class="col-lg-4 col-sm-6">

                                        <!-- Course Start -->
                                        <div class="course-item" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="course-header">
                                                <div class="course-header__thumbnail ">
                                                    <a href="course-single.php"><img src="assets/images/courses/courses-10.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-beginner">Beginner</span>
                                                <h3 class="course-info__title"><a href="course-single.php">Adobe Lightroom For Beginners : Complete Photo/Image Editing</a></h3>
                                                <a href="#" class="course-info__instructor">Alex Itzel</a>
                                                <div class="course-info__price">
                                                    <span class="free">Free</span>
                                                </div>
                                                <div class="course-info__rating">

                                                    <div class="rating-star">
                                                        <div class="rating-label" style="width: 100%;"></div>
                                                    </div>

                                                    <span>(2)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Course End -->

                                    </div>
                                    <div class="col-lg-4 col-sm-6">

                                        <!-- Course Start -->
                                        <div class="course-item" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="course-header">
                                                <div class="course-header__thumbnail ">
                                                    <a href="course-single.php"><img src="assets/images/courses/courses-22.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                                <div class="course-header__badge">
                                                    <span class="hot">Featured</span>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-intermediate">Intermediate</span>
                                                <h3 class="course-info__title"><a href="course-single.php">The Complete Graphic Design Theory for Beginners Course</a></h3>
                                                <a href="#" class="course-info__instructor">Donald Logan</a>
                                                <div class="course-info__price">
                                                    <span class="sale-price">$45.<small class="separator">00</small></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Course End -->

                                    </div>
                                    <div class="col-lg-4 col-sm-6">

                                        <!-- Course Start -->
                                        <div class="course-item" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="course-header">
                                                <div class="course-header__thumbnail ">
                                                    <a href="course-single.php"><img src="assets/images/courses/courses-9.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-intermediate">Intermediate</span>
                                                <h3 class="course-info__title"><a href="course-single.php">User Experience Design Fundamentals</a></h3>
                                                <a href="#" class="course-info__instructor">Owen Christ</a>
                                                <div class="course-info__price">
                                                    <span class="sale-price">$42.<small class="separator">00</small></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Course End -->

                                    </div>
                                    <div class="col-lg-4 col-sm-6">

                                        <!-- Course Start -->
                                        <div class="course-item" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="course-header">
                                                <div class="course-header__thumbnail ">
                                                    <a href="course-single.php"><img src="assets/images/courses/courses-23.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                                <div class="course-header__badge">
                                                    <span class="hot">Featured</span>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-beginner">Beginner</span>
                                                <h3 class="course-info__title"><a href="course-single.php">Graphic Design Bootcamp: Photoshop, Illustrator, InDesign</a></h3>
                                                <a href="#" class="course-info__instructor">Owen Christ</a>
                                                <div class="course-info__price">
                                                    <span class="sale-price">$29.<small class="separator">99</small></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Course End -->

                                    </div>
                                    <div class="col-lg-4 col-sm-6">

                                        <!-- Course Start -->
                                        <div class="course-item" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="course-header">
                                                <div class="course-header__thumbnail ">
                                                    <a href="course-single.php"><img src="assets/images/courses/courses-29.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-beginner">Beginner</span>
                                                <h3 class="course-info__title"><a href="course-single.php">Illustrator 2020 MasterClass</a></h3>
                                                <a href="#" class="course-info__instructor">Owen Christ</a>
                                                <div class="course-info__price">
                                                    <span class="sale-price">$22.<small class="separator">00</small></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Course End -->

                                    </div>
                                    <div class="col-lg-4 col-sm-6">

                                        <!-- Course Start -->
                                        <div class="course-item" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="course-header">
                                                <div class="course-header__thumbnail ">
                                                    <a href="course-single.php"><img src="assets/images/courses/courses-13.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                                <div class="course-header__badge">
                                                    <span class="hot">Featured</span>
                                                    <span class="free">Free</span>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-beginner">Beginner</span>
                                                <h3 class="course-info__title"><a href="course-single.php">Adobe Illustrator CC – Essentials Training Course</a></h3>
                                                <a href="#" class="course-info__instructor">parra</a>
                                                <div class="course-info__price">
                                                    <span class="free">Free</span>
                                                </div>
                                                <div class="course-info__rating">

                                                    <div class="rating-star">
                                                        <div class="rating-label" style="width: 80%;"></div>
                                                    </div>

                                                    <span>(2)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Course End -->

                                    </div>
                                    <div class="col-lg-4 col-sm-6">

                                        <!-- Course Start -->
                                        <div class="course-item" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="course-header">
                                                <div class="course-header__thumbnail ">
                                                    <a href="course-single.php"><img src="assets/images/courses/courses-30.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                                <div class="course-header__badge">
                                                    <span class="onsale">-50%</span>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-intermediate">Intermediate</span>
                                                <h3 class="course-info__title"><a href="course-single.php">UX & Web Design Master Course</a></h3>
                                                <a href="#" class="course-info__instructor">Emilee Logan</a>
                                                <div class="course-info__price">
                                                    <span class="sale-price">$45.<small class="separator">00</small></span>
                                                    <span class="regular-price">$79.<small class="separator">00</small></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Course End -->

                                    </div>
                                    <div class="col-lg-4 col-sm-6">

                                        <!-- Course Start -->
                                        <div class="course-item" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="course-header">
                                                <div class="course-header__thumbnail ">
                                                    <a href="course-single.php"><img src="assets/images/courses/courses-31.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                                <div class="course-header__badge">
                                                    <span class="hot">Featured</span>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-beginner">Beginner</span>
                                                <h3 class="course-info__title"><a href="course-single.php">Fundamentals of Graphic Design</a></h3>
                                                <a href="#" class="course-info__instructor">Owen Christ</a>
                                                <div class="course-info__price">
                                                    <span class="sale-price">$39.<small class="separator">00</small></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Course End -->

                                    </div>
                                    <div class="col-lg-4 col-sm-6">

                                        <!-- Course Start -->
                                        <div class="course-item" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="course-header">
                                                <div class="course-header__thumbnail ">
                                                    <a href="course-single.php"><img src="assets/images/courses/courses-21.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                                <div class="course-header__badge">
                                                    <span class="hot">Featured</span>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-all">All Levels</span>
                                                <h3 class="course-info__title"><a href="course-single.php">The Business Intelligence Analyst Course 2020</a></h3>
                                                <a href="#" class="course-info__instructor">Owen Christ</a>
                                                <div class="course-info__price">
                                                    <span class="sale-price">$39.<small class="separator">99</small></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Course End -->

                                    </div>
                                    <div class="col-lg-4 col-sm-6">

                                        <!-- Course Start -->
                                        <div class="course-item" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="course-header">
                                                <div class="course-header__thumbnail ">
                                                    <a href="course-single.php"><img src="assets/images/courses/courses-27.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                                <div class="course-header__badge">
                                                    <span class="hot">Featured</span>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-all">All Levels</span>
                                                <h3 class="course-info__title"><a href="course-single.php">Communication Skills Machine: Master Persuasion</a></h3>
                                                <a href="#" class="course-info__instructor">Owen Christ</a>
                                                <div class="course-info__price">
                                                    <span class="sale-price">$35.<small class="separator">00</small></span>
                                                </div>
                                                <div class="course-info__rating">

                                                    <div class="rating-star">
                                                        <div class="rating-label" style="width: 100%;"></div>
                                                    </div>

                                                    <span>(2)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Course End -->

                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="list">

                                <!-- Course List Start -->
                                <div class="course-list-item">
                                    <div class="course-list-header">
                                        <div class="course-list-header__thumbnail">
                                            <a href="course-single.php"><img src="assets/images/courses/courses-1.jpg" alt="courses" width="270" height="181"></a>
                                        </div>
                                    </div>
                                    <div class="course-list-info">
                                        <h3 class="course-list-info__title"><a href="course-single.php">Successful Negotiation: Master Your Negotiating Skills</a></h3>
                                        <div class="course-list-info__meta">
                                            <span><i class="fas fa-play-circle"></i> 5 Lessons</span>
                                            <span><i class="fas fa-clock"></i> 2.3 hours</span>
                                            <span><i class="fas fa-sliders-h"></i> All Levels</span>
                                        </div>
                                        <div class="course-list-info__description">
                                            <p>Negotiation is a skill well worth mastering – by putting …</p>
                                        </div>
                                        <div class="course-list-info__action">
                                            <button class="btn btn-primary btn-hover-secondary">Add to cart</button>
                                            <button class="btn-icon btn-light btn-hover-primary" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="far fa-heart"></i></button>
                                        </div>
                                        <div class="course-list-info__footer">
                                            <div class="course-list-info__price">
                                                <span class="sale-price">$42.<small class="separator">00</small></span>
                                            </div>
                                            <div class="course-list-info__rating">

                                                <div class="rating-star">
                                                    <div class="rating-label" style="width: 100%;"></div>
                                                </div>

                                                <div class="rating-average">
                                                    <span class="rating-average__average">5.0</span>
                                                    <span class="rating-average__total">/5</span>
                                                </div>

                                                <p class="course-list-info__rating-count">(2 ratings)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Course List End -->

                                <!-- Course List Start -->
                                <div class="course-list-item">
                                    <div class="course-list-header">
                                        <div class="course-list-header__thumbnail ">
                                            <a href="course-single.php"><img src="assets/images/courses/courses-2.jpg" alt="courses" width="270" height="181"></a>
                                        </div>
                                    </div>
                                    <div class="course-list-info">
                                        <h3 class="course-list-info__title"><a href="course-single.php">Time Management Mastery: Do More, Stress Less</a></h3>
                                        <div class="course-list-info__meta">
                                            <span><i class="fas fa-play-circle"></i> 7 Lessons</span>
                                            <span><i class="fas fa-clock"></i> 3.5 hours</span>
                                            <span><i class="fas fa-sliders-h"></i> All Levels</span>
                                        </div>
                                        <div class="course-list-info__description">
                                            <p>If you’re someone who has a LOT on their plate …</p>
                                        </div>
                                        <div class="course-list-info__action">
                                            <button class="btn btn-primary btn-hover-secondary">Add to cart</button>
                                            <button class="btn-icon btn-light btn-hover-primary" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="far fa-heart"></i></button>
                                        </div>
                                        <div class="course-list-info__footer">
                                            <div class="course-list-info__price">
                                                <span class="sale-price">$29.<small class="separator">00</small></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Course List End -->

                                <!-- Course List Start -->
                                <div class="course-list-item">
                                    <div class="course-list-header">
                                        <div class="course-list-header__thumbnail ">
                                            <a href="course-single.php"><img src="assets/images/courses/courses-3.jpg" alt="courses" width="270" height="181"></a>
                                        </div>
                                    </div>
                                    <div class="course-list-info">
                                        <h3 class="course-list-info__title"><a href="course-single.php">Angular – The Complete Guide (2020 Edition)</a></h3>
                                        <div class="course-list-info__meta">
                                            <span><i class="fas fa-play-circle"></i> 5 Lessons</span>
                                            <span><i class="fas fa-clock"></i> 2.3 hours</span>
                                            <span><i class="fas fa-sliders-h"></i> All Levels</span>
                                        </div>
                                        <div class="course-list-info__description">
                                            <p>From Setup to Deployment, this course covers it all! You’ll learn all about Components, Directives, Services, Forms, Http Access, Authentication, …</p>
                                        </div>
                                        <div class="course-list-info__action">
                                            <button class="btn btn-primary btn-hover-secondary">Add to cart</button>
                                            <button class="btn-icon btn-light btn-hover-primary" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="far fa-heart"></i></button>
                                        </div>
                                        <div class="course-list-info__footer">
                                            <div class="course-list-info__price">
                                                <span class="sale-price">$49.<small class="separator">00</small></span>
                                            </div>
                                            <div class="course-list-info__rating">

                                                <div class="rating-star">
                                                    <div class="rating-label" style="width: 100%;"></div>
                                                </div>

                                                <div class="rating-average">
                                                    <span class="rating-average__average">5.0</span>
                                                    <span class="rating-average__total">/5</span>
                                                </div>

                                                <p class="course-list-info__rating-count">(2 ratings)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Course List End -->

                                <!-- Course List Start -->
                                <div class="course-list-item">
                                    <div class="course-list-header">
                                        <div class="course-list-header__thumbnail ">
                                            <a href="course-single.php"><img src="assets/images/courses/courses-4.jpg" alt="courses" width="270" height="181"></a>
                                        </div>
                                        <div class="course-header__badge">
                                            <span class="free">Free</span>
                                        </div>
                                    </div>
                                    <div class="course-list-info">
                                        <h3 class="course-list-info__title"><a href="course-single.php">Consulting Approach to Problem Solving</a></h3>
                                        <div class="course-list-info__meta">
                                            <span><i class="fas fa-play-circle"></i> 5 Lessons</span>
                                            <span><i class="fas fa-clock"></i> 2.3 hours</span>
                                            <span><i class="fas fa-sliders-h"></i> All Levels</span>
                                        </div>
                                        <div class="course-list-info__description">
                                            <p>Consulting Approach to Problem Solving</p>
                                        </div>
                                        <div class="course-list-info__action">
                                            <button class="btn btn-primary btn-hover-secondary">Add to cart</button>
                                            <button class="btn-icon btn-light btn-hover-primary" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="far fa-heart"></i></button>
                                        </div>
                                        <div class="course-list-info__footer">
                                            <div class="course-list-info__price">
                                                <span class="free">Free</span>
                                            </div>
                                            <div class="course-list-info__rating">

                                                <div class="rating-star">
                                                    <div class="rating-label" style="width: 100%;"></div>
                                                </div>

                                                <div class="rating-average">
                                                    <span class="rating-average__average">5.0</span>
                                                    <span class="rating-average__total">/5</span>
                                                </div>

                                                <p class="course-list-info__rating-count">(1 ratings)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Course List End -->

                                <!-- Course List Start -->
                                <div class="course-list-item">
                                    <div class="course-list-header">
                                        <div class="course-list-header__thumbnail ">
                                            <a href="course-single.php"><img src="assets/images/courses/courses-5.jpg" alt="courses" width="270" height="181"></a>
                                        </div>
                                        <div class="course-header__badge">
                                            <span class="free">Free</span>
                                        </div>
                                    </div>
                                    <div class="course-list-info">
                                        <h3 class="course-list-info__title"><a href="course-single.php">The Business Intelligence Analyst Course 2020</a></h3>
                                        <div class="course-list-info__meta">
                                            <span><i class="fas fa-play-circle"></i> 7 Lessons</span>
                                            <span><i class="fas fa-clock"></i> 22.5 hours</span>
                                            <span><i class="fas fa-sliders-h"></i> Beginner</span>
                                        </div>
                                        <div class="course-list-info__description">
                                            <p>Our program is different than the rest of the materials …</p>
                                        </div>
                                        <div class="course-list-info__action">
                                            <button class="btn btn-primary btn-hover-secondary">Add to cart</button>
                                            <button class="btn-icon btn-light btn-hover-primary" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="far fa-heart"></i></button>
                                        </div>
                                        <div class="course-list-info__footer">
                                            <div class="course-list-info__price">
                                                <span class="free">Free</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Course List End -->

                                <!-- Course List Start -->
                                <div class="course-list-item">
                                    <div class="course-list-header">
                                        <div class="course-list-header__thumbnail ">
                                            <a href="course-single.php"><img src="assets/images/courses/courses-6.jpg" alt="courses" width="270" height="181"></a>
                                        </div>
                                        <div class="course-header__badge">
                                            <span class="free">Free</span>
                                        </div>
                                    </div>
                                    <div class="course-list-info">
                                        <h3 class="course-list-info__title"><a href="course-single.php">Become a Product Manager | Learn the Skills & Get the Job</a></h3>
                                        <div class="course-list-info__meta">
                                            <span><i class="fas fa-play-circle"></i> 6 Lessons</span>
                                            <span><i class="fas fa-clock"></i> 22.5 hours</span>
                                            <span><i class="fas fa-sliders-h"></i> All Levels</span>
                                        </div>
                                        <div class="course-list-info__description">
                                            <p>Negotiation is a skill well worth mastering – by putting …</p>
                                        </div>
                                        <div class="course-list-info__action">
                                            <button class="btn btn-primary btn-hover-secondary">Add to cart</button>
                                            <button class="btn-icon btn-light btn-hover-primary" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="far fa-heart"></i></button>
                                        </div>
                                        <div class="course-list-info__footer">
                                            <div class="course-list-info__price">
                                                <span class="free">Free</span>
                                            </div>
                                            <div class="course-list-info__rating">

                                                <div class="rating-star">
                                                    <div class="rating-label" style="width: 100%;"></div>
                                                </div>

                                                <div class="rating-average">
                                                    <span class="rating-average__average">5.0</span>
                                                    <span class="rating-average__total">/5</span>
                                                </div>

                                                <p class="course-list-info__rating-count">(1 ratings)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Course List End -->

                                <!-- Course List Start -->
                                <div class="course-list-item">
                                    <div class="course-list-header">
                                        <div class="course-list-header__thumbnail ">
                                            <a href="course-single.php"><img src="assets/images/courses/courses-7.jpg" alt="courses" width="270" height="181"></a>
                                        </div>
                                    </div>
                                    <div class="course-list-info">
                                        <h3 class="course-list-info__title"><a href="course-single.php">Mechanical Engineering and Electrical Engineering Explained</a></h3>
                                        <div class="course-list-info__meta">
                                            <span><i class="fas fa-play-circle"></i> 5 Lessons</span>
                                            <span><i class="fas fa-clock"></i> 9.9 hours</span>
                                            <span><i class="fas fa-sliders-h"></i> Beginner</span>
                                        </div>
                                        <div class="course-list-info__description">
                                            <p>Electronics has become important to many fields; communications, automotive, security, …</p>
                                        </div>
                                        <div class="course-list-info__action">
                                            <button class="btn btn-primary btn-hover-secondary">Add to cart</button>
                                            <button class="btn-icon btn-light btn-hover-primary" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="far fa-heart"></i></button>
                                        </div>
                                        <div class="course-list-info__footer">
                                            <div class="course-list-info__price">
                                                <span class="sale-price">$84.<small class="separator">00</small></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Course List End -->

                                <!-- Course List Start -->
                                <div class="course-list-item">
                                    <div class="course-list-header">
                                        <div class="course-list-header__thumbnail ">
                                            <a href="course-single.php"><img src="assets/images/courses/courses-8.jpg" alt="courses" width="270" height="181"></a>
                                        </div>
                                    </div>
                                    <div class="course-list-info">
                                        <h3 class="course-list-info__title"><a href="course-single.php">Learn Algebra The Easy Way!</a></h3>
                                        <div class="course-list-info__meta">
                                            <span><i class="fas fa-play-circle"></i> 5 Lessons</span>
                                            <span><i class="fas fa-clock"></i> 8.5 hours</span>
                                            <span><i class="fas fa-sliders-h"></i> Beginner</span>
                                        </div>
                                        <div class="course-list-info__description">
                                            <p>This course will begin with an overview of data types …</p>
                                        </div>
                                        <div class="course-list-info__action">
                                            <button class="btn btn-primary btn-hover-secondary">Add to cart</button>
                                            <button class="btn-icon btn-light btn-hover-primary" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="far fa-heart"></i></button>
                                        </div>
                                        <div class="course-list-info__footer">
                                            <div class="course-list-info__price">
                                                <span class="sale-price">$42.<small class="separator">00</small></span>
                                            </div>
                                            <div class="course-list-info__rating">

                                                <div class="rating-star">
                                                    <div class="rating-label" style="width: 100%;"></div>
                                                </div>

                                                <div class="rating-average">
                                                    <span class="rating-average__average">5.0</span>
                                                    <span class="rating-average__total">/5</span>
                                                </div>

                                                <p class="course-list-info__rating-count">(2 ratings)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Course List End -->

                            </div>
                        </div>

                        <!-- Page Pagination Start -->
                        <div class="page-pagination">
                            <ul class="pagination justify-content-center">
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">7</a></li>
                                <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- Page Pagination End -->

                    </div>
                    <div class="col-lg-3">
                        <!-- Sidebar Widget Start -->
                        <?php include("includes/courses-left-sidebar.php") ?>
                        <!-- Sidebar Widget End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses End -->

        <!-- Courses Hover End -->
        <div id="course-hover">
            <div class="course-item-hover">
                <div class="course-item-hover__category">
                    <a href="#">Communications</a>
                </div>
                <h2 class="course-item-hover__title"><a href="course-single.php">Successful Negotiation: Master Your Negotiating Skills</a></h2>
                <div class="course-item-hover__rating">

                    <div class="rating-star">
                        <div class="rating-label" style="width: 100%;"></div>
                    </div>

                    <div class="rating-average">
                        <span class="rating-average__average">5.0</span>
                        <span class="rating-average__total">/5</span>
                    </div>

                    <p class="course-item-hover__rating-count">(2 ratings)</p>
                </div>
                <div class="course-item-hover__meta">
                    <span>5 Lessons</span>
                    <span>2.3 hours</span>
                    <span>All Levels</span>
                </div>
                <div class="course-item-hover__benefits">
                    <h6 class="course-item-hover__benefits-title">What you'll learn</h6>
                    <ul class="course-item-hover__benefits-list">
                        <li>Negotiate effectively and fairly to make 1000s more than they would otherwise</li>
                        <li>Be confident in starting and finishing a negotiation</li>
                        <li>Use smart tactics to increase their bargaining power</li>
                        <li>Develop mental and emotional strength to keep pushing until they get a great price</li>
                        <li>Use negotiating skills in both personal and professional situations</li>
                    </ul>
                </div>
                <div class="course-item-hover__btn">
                    <a class="btn btn-primary btn-hover-secondary w-100" href="#">Add to cart</a>
                    <a class="btn-link" href="#"><i class="far fa-heart"></i> Add to wishlist</a>
                </div>
            </div>
        </div>
        <!-- Courses Hover End -->

        <!-- Courses List Hover End -->
        <div id="course-list-hover">
            <div class="course-item-hover">
                <div class="course-item-hover__category">
                    <a href="#">Communications</a>
                </div>
                <h2 class="course-item-hover__title"><a href="course-single.php">Successful Negotiation: Master Your Negotiating Skills</a></h2>
                <div class="course-item-hover__rating">

                    <div class="rating-star">
                        <div class="rating-label" style="width: 100%;"></div>
                    </div>

                    <div class="rating-average">
                        <span class="rating-average__average">5.0</span>
                        <span class="rating-average__total">/5</span>
                    </div>

                    <p class="course-item-hover__rating-count">(2 ratings)</p>
                </div>
                <div class="course-item-hover__meta">
                    <span>5 Lessons</span>
                    <span>2.3 hours</span>
                    <span>All Levels</span>
                </div>
                <div class="course-item-hover__benefits">
                    <h6 class="course-item-hover__benefits-title">What you'll learn</h6>
                    <ul class="course-item-hover__benefits-list">
                        <li>Negotiate effectively and fairly to make 1000s more than they would otherwise</li>
                        <li>Be confident in starting and finishing a negotiation</li>
                        <li>Use smart tactics to increase their bargaining power</li>
                        <li>Develop mental and emotional strength to keep pushing until they get a great price</li>
                        <li>Use negotiating skills in both personal and professional situations</li>
                    </ul>
                </div>
                <div class="course-item-hover__btn">
                    <a class="btn btn-primary btn-hover-secondary w-100" href="#">Add to cart</a>
                    <a class="btn-link" href="#"><i class="far fa-heart"></i> Add to wishlist</a>
                </div>
            </div>
        </div>
        <!-- Courses List Hover End -->

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
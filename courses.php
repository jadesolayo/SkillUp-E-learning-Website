<?php
require "../includes/functions.php";
if(!isset($_SESSION['user'])) {
    header("location: ../auth/instructor-login.php");
    exit();
}
?>
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
                                        <li><button data-bs-toggle="tab" data-bs-target="#grid"><i class="fas fa-th"></i></button></li>
                                        <li><button class="active" data-bs-toggle="tab" data-bs-target="#list"><i class="fas fa-bars"></i></button></li>
                                    </ul>
                                    <div class="filter-select">
                                        <form action="#">
                                            <select class="edumall-nice-select" data-select="{&quot;fieldLabel&quot;:&quot;Sort by:&quot;}">
                                                <option value="Latest" selected='selected'> Latest </option>
                                                <option value="oldest"> Oldest</option>
                                                <option value="Course Title (a-z)"> Course Title (a-z)</option>
                                                <option value="Course Title (a-z)"> Course Title (a-z)</option>
                                            </select>
                                            <input type="hidden" name="paged" value="1">
                                        </form>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- Archive Filter Bars End -->

                        <div class="tab-content">
                            <div class="tab-pane fade" id="grid">

                                <div class="row gy-6">
                                    <div class="col-lg-4 col-sm-6">

                                        <!-- Course Start -->
                                        <div class="course-item" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="course-header">
                                                <div class="course-header__thumbnail ">
                                                    <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-1.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-all">All Levels</span>
                                                <h3 class="course-info__title"><a href="course-single-layout-01.html">Successful Negotiation: Master Your Negotiating Skills</a></h3>
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
                                                    <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-2.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-all">All Levels</span>
                                                <h3 class="course-info__title"><a href="course-single-layout-01.html">Time Management Mastery: Do More, Stress Less</a></h3>
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
                                                    <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-3.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-beginner">Beginner</span>
                                                <h3 class="course-info__title"><a href="course-single-layout-01.html">Angular – The Complete Guide (2020 Edition)</a></h3>
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
                                                    <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-4.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                                <div class="course-header__badge">
                                                    <span class="free">Free</span>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-beginner">All Levels</span>
                                                <h3 class="course-info__title"><a href="course-single-layout-01.html">Consulting Approach to Problem Solving</a></h3>
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
                                                    <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-5.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                                <div class="course-header__badge">
                                                    <span class="free">Free</span>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-all">All Levels</span>
                                                <h3 class="course-info__title"><a href="course-single-layout-01.html">The Business Intelligence Analyst Course 2020</a></h3>
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
                                                    <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-6.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                                <div class="course-header__badge">
                                                    <span class="free">Free</span>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-all">All Levels</span>
                                                <h3 class="course-info__title"><a href="course-single-layout-01.html">Become a Product Manager | Learn the Skills & Get the Job</a></h3>
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
                                                    <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-7.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-beginner">Beginner</span>
                                                <h3 class="course-info__title"><a href="course-single-layout-01.html">Mechanical Engineering and Electrical Engineering Explained</a></h3>
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
                                                    <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-8.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-beginner">Beginner</span>
                                                <h3 class="course-info__title"><a href="course-single-layout-01.html">Learn Algebra The Easy Way!</a></h3>
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
                                                    <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-10.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-beginner">Beginner</span>
                                                <h3 class="course-info__title"><a href="course-single-layout-01.html">Adobe Lightroom For Beginners : Complete Photo/Image Editing</a></h3>
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
                                                    <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-22.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                                <div class="course-header__badge">
                                                    <span class="hot">Featured</span>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-intermediate">Intermediate</span>
                                                <h3 class="course-info__title"><a href="course-single-layout-01.html">The Complete Graphic Design Theory for Beginners Course</a></h3>
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
                                                    <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-9.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-intermediate">Intermediate</span>
                                                <h3 class="course-info__title"><a href="course-single-layout-01.html">User Experience Design Fundamentals</a></h3>
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
                                                    <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-23.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                                <div class="course-header__badge">
                                                    <span class="hot">Featured</span>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-beginner">Beginner</span>
                                                <h3 class="course-info__title"><a href="course-single-layout-01.html">Graphic Design Bootcamp: Photoshop, Illustrator, InDesign</a></h3>
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
                                                    <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-29.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-beginner">Beginner</span>
                                                <h3 class="course-info__title"><a href="course-single-layout-01.html">Illustrator 2020 MasterClass</a></h3>
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
                                                    <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-13.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                                <div class="course-header__badge">
                                                    <span class="hot">Featured</span>
                                                    <span class="free">Free</span>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-beginner">Beginner</span>
                                                <h3 class="course-info__title"><a href="course-single-layout-01.html">Adobe Illustrator CC – Essentials Training Course</a></h3>
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
                                                    <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-30.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                                <div class="course-header__badge">
                                                    <span class="onsale">-50%</span>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-intermediate">Intermediate</span>
                                                <h3 class="course-info__title"><a href="course-single-layout-01.html">UX & Web Design Master Course</a></h3>
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
                                                    <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-31.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                                <div class="course-header__badge">
                                                    <span class="hot">Featured</span>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-beginner">Beginner</span>
                                                <h3 class="course-info__title"><a href="course-single-layout-01.html">Fundamentals of Graphic Design</a></h3>
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
                                                    <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-21.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                                <div class="course-header__badge">
                                                    <span class="hot">Featured</span>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-all">All Levels</span>
                                                <h3 class="course-info__title"><a href="course-single-layout-01.html">The Business Intelligence Analyst Course 2020</a></h3>
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
                                                    <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-27.jpg" alt="courses" width="330" height="221"></a>
                                                </div>
                                                <div class="course-header__badge">
                                                    <span class="hot">Featured</span>
                                                </div>
                                            </div>
                                            <div class="course-info">
                                                <span class="course-info__badge-text badge-all">All Levels</span>
                                                <h3 class="course-info__title"><a href="course-single-layout-01.html">Communication Skills Machine: Master Persuasion</a></h3>
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
                            <div class="tab-pane fade show active" id="list">

                                <!-- Course List Start -->
                                <div class="course-list-item">
                                    <div class="course-list-header">
                                        <div class="course-list-header__thumbnail">
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-1.jpg" alt="courses" width="270" height="181"></a>
                                        </div>
                                    </div>
                                    <div class="course-list-info">
                                        <h3 class="course-list-info__title"><a href="course-single-layout-01.html">Successful Negotiation: Master Your Negotiating Skills</a></h3>
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
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-2.jpg" alt="courses" width="270" height="181"></a>
                                        </div>
                                    </div>
                                    <div class="course-list-info">
                                        <h3 class="course-list-info__title"><a href="course-single-layout-01.html">Time Management Mastery: Do More, Stress Less</a></h3>
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
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-3.jpg" alt="courses" width="270" height="181"></a>
                                        </div>
                                    </div>
                                    <div class="course-list-info">
                                        <h3 class="course-list-info__title"><a href="course-single-layout-01.html">Angular – The Complete Guide (2020 Edition)</a></h3>
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
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-4.jpg" alt="courses" width="270" height="181"></a>
                                        </div>
                                        <div class="course-header__badge">
                                            <span class="free">Free</span>
                                        </div>
                                    </div>
                                    <div class="course-list-info">
                                        <h3 class="course-list-info__title"><a href="course-single-layout-01.html">Consulting Approach to Problem Solving</a></h3>
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
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-5.jpg" alt="courses" width="270" height="181"></a>
                                        </div>
                                        <div class="course-header__badge">
                                            <span class="free">Free</span>
                                        </div>
                                    </div>
                                    <div class="course-list-info">
                                        <h3 class="course-list-info__title"><a href="course-single-layout-01.html">The Business Intelligence Analyst Course 2020</a></h3>
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
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-6.jpg" alt="courses" width="270" height="181"></a>
                                        </div>
                                        <div class="course-header__badge">
                                            <span class="free">Free</span>
                                        </div>
                                    </div>
                                    <div class="course-list-info">
                                        <h3 class="course-list-info__title"><a href="course-single-layout-01.html">Become a Product Manager | Learn the Skills & Get the Job</a></h3>
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
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-7.jpg" alt="courses" width="270" height="181"></a>
                                        </div>
                                    </div>
                                    <div class="course-list-info">
                                        <h3 class="course-list-info__title"><a href="course-single-layout-01.html">Mechanical Engineering and Electrical Engineering Explained</a></h3>
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
                                            <a href="course-single-layout-01.html"><img src="assets/images/courses/courses-8.jpg" alt="courses" width="270" height="181"></a>
                                        </div>
                                    </div>
                                    <div class="course-list-info">
                                        <h3 class="course-list-info__title"><a href="course-single-layout-01.html">Learn Algebra The Easy Way!</a></h3>
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
                        <div class="sidebar-widget-wrapper">

                            <!-- Sidebar Widget Wrapper Start -->
                            <div class="sidebar-widget-wrap bg-color-10">
                                <h4 class="sidebar-widget-wrap__title">Filter by category</h4>

                                <!-- Widget Filter Start -->
                                <div class="widget-filter">

                                    <!-- Widget Filter Wrapper Start -->
                                    <div class="widget-filter__wrapper">
                                        <ul class="widget-filter__list">
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories13" name="sort-by">
                                                    <label for="categories13">Art & Design <span>(8)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories14" name="sort-by">
                                                    <label for="categories14">Business <span>(12)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories15" name="sort-by">
                                                    <label for="categories15">Data Science <span>(7)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories16" name="sort-by">
                                                    <label for="categories16">Development <span>(10)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories17" name="sort-by">
                                                    <label for="categories17">Finance <span>(8)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories18" name="sort-by">
                                                    <label for="categories18">Health & Fitness <span>(8)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories19" name="sort-by">
                                                    <label for="categories19">Lifestyle <span>(9)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories20" name="sort-by">
                                                    <label for="categories20">Marketing <span>(8)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories21" name="sort-by">
                                                    <label for="categories21">Music <span>(8)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories22" name="sort-by">
                                                    <label for="categories22">Personal Development <span>(9)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories23" name="sort-by">
                                                    <label for="categories23">Photography <span>(7)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="categories24" name="sort-by">
                                                    <label for="categories24">Teaching & Academics <span>(7)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Widget Filter Wrapper End -->
                                </div>
                                <!-- Widget Filter End -->

                            </div>
                            <!-- Sidebar Widget Wrapper End -->

                            <!-- Sidebar Widget Wrapper Start -->
                            <div class="sidebar-widget-wrap bg-color-10 mt-4">
                                <h4 class="sidebar-widget-wrap__title">Filter by</h4>

                                <!-- Widget Filter Start -->
                                <div class="widget-filter">
                                    <h4 class="widget-filter__title-02">Instructor</h4>

                                    <!-- Widget Filter Wrapper Start -->
                                    <div class="widget-filter__wrapper">
                                        <ul class="widget-filter__list">
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="instructor9" name="sort-by">
                                                    <label for="instructor9">Donald Logan <span>(11)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="instructor10" name="sort-by">
                                                    <label for="instructor10">Emilee Logan <span>(12)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="instructor11" name="sort-by">
                                                    <label for="instructor11">Nahla Jones <span>(9)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Widget Filter Wrapper End -->
                                </div>
                                <!-- Widget Filter End -->

                                <!-- Widget Filter Start -->
                                <div class="widget-filter">
                                    <h4 class="widget-filter__title-02">Price</h4>

                                    <!-- Widget Filter Wrapper Start -->
                                    <div class="widget-filter__wrapper">
                                        <ul class="widget-filter__list">
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="radio" id="radio4" checked name="sort-by">
                                                    <label for="radio4">All <span>(101)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="radio" id="radio5" name="sort-by">
                                                    <label for="radio5">Free <span>(6)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="radio" id="radio6" name="sort-by">
                                                    <label for="radio6">Paid <span>(95)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Widget Filter Wrapper End -->
                                </div>
                                <!-- Widget Filter End -->

                                <!-- Widget Filter Start -->
                                <div class="widget-filter">
                                    <h4 class="widget-filter__title-02">Level</h4>

                                    <!-- Widget Filter Wrapper Start -->
                                    <div class="widget-filter__wrapper">
                                        <ul class="widget-filter__list">
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="level5" name="sort-by">
                                                    <label for="level5">All Levels <span>(50)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="level6" name="sort-by">
                                                    <label for="level6">Beginner <span>(32)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="level7" name="sort-by">
                                                    <label for="level7">Intermediate <span>(17)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="level8" name="sort-by">
                                                    <label for="level8">Expert <span>(2)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Widget Filter Wrapper End -->
                                </div>
                                <!-- Widget Filter End -->

                                <!-- Widget Filter Start -->
                                <div class="widget-filter">
                                    <h4 class="widget-filter__title">Language</h4>

                                    <!-- Widget Filter Wrapper Start -->
                                    <div class="widget-filter__wrapper">
                                        <ul class="widget-filter__list">
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="language10" name="sort-by">
                                                    <label for="language10">English <span>(21)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Widget Filter Wrapper End -->
                                </div>
                                <!-- Widget Filter End -->

                                <!-- Widget Filter Start -->
                                <div class="widget-filter">
                                    <h4 class="widget-filter__title-02">Rating</h4>

                                    <!-- Widget Filter Wrapper Start -->
                                    <div class="widget-filter__wrapper">
                                        <ul class="widget-filter__list">
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="rating6" name="sort-by">
                                                    <label for="rating6">
                                                        <span class="star-line">
                                                            <span class="star" style="width: 100%;"></span>
                                                        </span>

                                                        <span>(07)</span>
                                                    </label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="rating7" name="sort-by">
                                                    <label for="rating7">
                                                        <span class="star-line">
                                                            <span class="star" style="width: 80%;"></span>
                                                        </span>

                                                        <span>(0)</span>
                                                    </label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="rating8" name="sort-by">
                                                    <label for="rating8">
                                                        <span class="star-line">
                                                            <span class="star" style="width: 60%;"></span>
                                                        </span>

                                                        <span>(0)</span>
                                                    </label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="rating9" name="sort-by">
                                                    <label for="rating9">
                                                        <span class="star-line">
                                                            <span class="star" style="width: 40%;"></span>
                                                        </span>

                                                        <span>(0)</span>
                                                    </label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="rating10" name="sort-by">
                                                    <label for="rating10">
                                                        <span class="star-line">
                                                            <span class="star" style="width: 20%;"></span>
                                                        </span>

                                                        <span>(0)</span>
                                                    </label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Widget Filter Wrapper End -->
                                </div>
                                <!-- Widget Filter End -->

                                <!-- Widget Filter Start -->
                                <div class="widget-filter">
                                    <h4 class="widget-filter__title-02">Duration</h4>

                                    <!-- Widget Filter Wrapper Start -->
                                    <div class="widget-filter__wrapper">
                                        <ul class="widget-filter__list">
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="duration5" name="sort-by">
                                                    <label for="duration5">Less than 2 hours <span>(57)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="duration6" name="sort-by">
                                                    <label for="duration6">3 - 6 hours <span>(7)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="duration7" name="sort-by">
                                                    <label for="duration7">7 - 16 hours <span>(10)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="checkbox" id="duration8" name="sort-by">
                                                    <label for="duration8">17+ Hours <span>(27)</span></label>
                                                </div>
                                                <!-- Widget Filter Item End -->
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Widget Filter Wrapper End -->
                                </div>
                                <!-- Widget Filter End -->

                            </div>
                            <!-- Sidebar Widget Wrapper End -->

                        </div>
                        <!-- Sidebar Widget End -->
                    </div>
                </div>
            </div>
        </div>

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
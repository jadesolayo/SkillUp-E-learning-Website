<?php
require "includes/functions.php";


$allCourses = getAllCourses();

// Apply filters if provided in the URL
$categoryFilter = isset($_GET['category']) ? $_GET['category'] : null;
$priceFilter = isset($_GET['price']) ? $_GET['price'] : null;
$durationFilter = isset($_GET['duration']) ? $_GET['duration'] : null;

// Filter courses based on selected filters
$filteredCourses = filterCourses($allCourses, $categoryFilter, $priceFilter, $durationFilter);

$coursesPerPage = 2;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

$totalCourses = count($filteredCourses);
$totalPages = ceil($totalCourses / $coursesPerPage);

if ($currentPage < 1) {
    $currentPage = 1;
} elseif ($currentPage > $totalPages) {
    $currentPage = $totalPages;
}

$startCourseIndex = ($currentPage - 1) * $coursesPerPage;
$displayedCourses = array_slice($filteredCourses, $startCourseIndex, $coursesPerPage);

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

                        <div class="archive-filter-bar">
                            <?php
                            $numberOfCourses = count($allCourses);
                            ?>
                            <p>We found <span><?php echo $numberOfCourses; ?></span> courses available for you</p>
                        </div>
                        <div class="dashboard-courses">
                            <?php if (isset($course)) : ?>
                                <!-- Display course details -->
                                <div class="dashboard-courses__item">
                                    <div class="dashboard-courses__thumbnail">
                                        <a href="course-single.php">
                                            <?php foreach ($courseImages as $image) : ?>
                                                <img src="uploads/<?php echo $image; ?>" alt="Course" width="260" height="174">
                                            <?php endforeach; ?>
                                        </a>
                                    </div>
                                    <div class="dashboard-courses__content">
                                        <!-- Display course content here -->
                                        <h3 class="dashboard-courses__title">
                                            <a href="course-single.php?id=<?= $course['id']; ?>"><?php echo $course['coursetitle']; ?></a>
                                        </h3>
                                        <p class="">
                                            <?php echo $course['coursedescription']; ?>
                                        </p>
                                        <ul class="dashboard-courses__meta">
                                            <li>
                                                <span class="meta-label">Duration:</span>
                                                <span class="meta-value"><?php echo $course['duration']; ?></span>
                                            </li>
                                        </ul>
                                        <div class="dashboard-courses__footer">
                                            <div class="dashboard-courses__price">
                                                <span class="sale-price">
                                                    <?php echo $course['price']; ?>
                                                </span>
                                            </div>
                                            <div class="course-list-info__action">
                                                <button class="btn btn-primary btn-hover-secondary">Apply</button>
                                                <button class="btn-icon btn-light btn-hover-primary" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="far fa-heart"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Dashboard Course Item End -->
                            <?php else : ?>
                                <?php foreach ($allCourses as $course) : ?>
                                    <!-- Dashboard Course Item Start (for all courses) -->
                                    <div class="dashboard-courses__item">
                                        <div class="dashboard-courses__thumbnail">
                                            <a href="#">
                                                <img src="uploads/<?php echo $course['courseimage']; ?>" alt="Course" width="260" height="174">
                                            </a>
                                        </div>
                                        <div class="dashboard-courses__content">
                                            <!-- Display course content here -->
                                            <h3 class="dashboard-courses__title">
                                                <a href="course-single.php?id=<?= $course['id']; ?>">
                                                    <?php echo $course['coursetitle']; ?>
                                                </a>
                                            </h3>
                                            <p class="dashboard-courses__title">
                                                <a href="#">
                                                    <?php echo $course['coursedescription']; ?>
                                                </a>
                                            </p>
                                            <ul class="dashboard-courses__meta">
                                                <li>
                                                    <span class="meta-label">Duration:</span>
                                                    <span class="meta-value"><?php echo $course['duration']; ?></span>
                                                </li>
                                            </ul>
                                            <div class="dashboard-courses__footer">
                                                <div class="dashboard-courses__price">
                                                    <span class="sale-price">
                                                        <?php echo $course['price']; ?>
                                                    </span>
                                                </div>
                                                <div class="course-list-info__action">
                                                    <button class="btn btn-primary btn-hover-secondary">Add to cart</button>
                                                    <button class="btn-icon btn-light btn-hover-primary" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="far fa-heart"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Dashboard Course Item End -->
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <!-- Page Pagination Start -->
                        <!-- <div class="page-pagination">
                            <ul class="pagination justify-content-center">
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">7</a></li>
                                <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                            </ul>
                        </div> -->
                        <!-- Page Pagination End -->
                        <!-- Pagination Start -->
                        <div class="page-pagination">
                            <ul class="pagination justify-content-center">
                            <?php
                if ($totalPages > 1) {
                    // Display previous page link
                    if ($currentPage > 1) {
                        echo '<li><a href="?page=' . ($currentPage - 1) . '"><i class="fas fa-angle-left"></i></a></li>';
                    }
    
                    // Display page number links
                    for ($page = 1; $page <= $totalPages; $page++) {
                        echo '<li><a class="' . ($page == $currentPage ? 'active' : '') . '" href="?page=' . $page . '">' . $page . '</a></li>';
                    }
    
                    // Display next page link
                    if ($currentPage < $totalPages) {
                        echo '<li><a href="?page=' . ($currentPage + 1) . '"><i class="fas fa-angle-right"></i></a></li>';
                    }
                }
                ?>
                            </ul>
                        </div>
                        <!-- Pagination End -->
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
                                                    <input type="checkbox" id="categories24" name="sort-by">
                                                    <label for="categories24">Teaching & Academics <span>(7)</span></label>
                                                    <?php
                                    // Assuming you have a list of categories, loop through and display filter options
                                    foreach ($allCourses as $category) {
                                        echo '<li>';
                                        echo '<input type="radio" id="categories24' . $category['id'] . '" name="category" value="' . $category['id'] . '" ' . ($categoryFilter == $category['id'] ? 'checked' : '') . '>';
                                        echo '<label for="category-' . $category['id'] . '">' . $category['name'] . '</label>';
                                        echo '</li>';
                                    }
                                    ?>
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
                                    <h4 class="widget-filter__title-02">Price</h4>

                                    <!-- Widget Filter Wrapper Start -->
                                    <div class="widget-filter__wrapper">
                                        <ul class="widget-filter__list">
                                            <li>
                                                <!-- Widget Filter Item Start -->
                                                <div class="widget-filter__item">
                                                    <input type="radio" id="radio5" name="sort-by">
                                                    <label for="radio5">Free <span>(6)</span></label>
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
    <script>
        function sortCourses() {
            var select = document.getElementById("sort-select");
            var selectedValue = select.options[select.selectedIndex].value;

            // Redirect to the same page with the selected sorting order
            window.location.href = "courses.php?sort=" + selectedValue;
        }
    </script>

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
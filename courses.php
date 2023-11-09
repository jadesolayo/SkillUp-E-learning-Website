<?php
require "includes/functions.php";

$allCourses = getAllCourses();

$categoryFilter = isset($_POST['category']) ? $_POST['category'] : null;
$priceFilter = isset($_POST['price']) ? $_POST['price'] : null;
$durationFilter = isset($_POST['duration']) ? $_POST['duration'] : null;

$categories = array_unique(array_column($allCourses, 'category'));
$prices = array_unique(array_column($allCourses, 'price'));
$durations = array_unique(array_column($allCourses, 'duration'));

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
                            <?php if (!empty($displayedCourses)) : ?>
                                <?php foreach ($displayedCourses as $course) : ?>
                                    <div class="dashboard-courses__item">
                                        <div class="dashboard-courses__thumbnail">
                                            <a href="course-single.php?id=<?= $course['id']; ?>">
                                                <img src="uploads/<?php echo $course['courseimage']; ?>" alt="Course" width="260" height="174">
                                            </a>
                                        </div>
                                        <div class="dashboard-courses__content">
                                            <h3 class="dashboard-courses__title">
                                                <a href="course-single.php?id=<?= $course['id']; ?>"><?php echo $course['coursetitle']; ?></a>
                                            </h3>
                                            <p>
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
                                                    <button class="btn btn-primary btn-hover-secondary"><a href="course-single.php?id=<?= $course['id']; ?>">Apply</a></button>
                                                    <button class="btn-icon btn-light btn-hover-primary" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist"><i class="far fa-heart"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <p>No courses found.</p>
                            <?php endif; ?>
                        </div>

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

                    <!-- Sidebar Widget Start -->
                    <div class="col-lg-3">
                        <div class="sidebar-widget-wrapper">
                            <div class="sidebar-widget-wrap bg-color-10">
                                <h4 class="sidebar-widget-wrap__title">Filter by category</h4>
                                <div class="widget-filter">
                                    <div class="widget-filter__wrapper">
                                        <ul class="widget-filter__list">
                                            <li>
                                                <?php
                                                foreach ($categories as $category) {
                                                    $categoryId = strtolower(str_replace(' ', '', $category));
                                                    echo '<div class="widget-filter__item">
                                                        <input type="checkbox" id="' . $categoryId . 'Filter" name="category" value="' . $categoryId . '">
                                                        <label for="' . $categoryId . 'Filter">' . $category . '</label>
                                                    </div>';
                                                }
                                                ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-widget-wrap bg-color-10 mt-4">
                                <h4 class="sidebar-widget-wrap__title">Filter by</h4>
                                <div class="widget-filter">
                                    <h4 class="widget-filter__title-02">Price</h4>
                                    <div class="widget-filter__wrapper">
                                        <ul class="widget-filter__list">
                                            <li>
                                                <?php
                                                foreach ($prices as $price) {
                                                    $priceId = strtolower(str_replace(' ', '', $price));
                                                    echo '<div class="widget-filter__item">
                                                        <input type="checkbox" id="' . $priceId . 'Filter" name="price" value="' . $priceId . '">
                                                        <label for="' . $priceId . 'Filter">' . $price . '</label>
                                                    </div>';
                                                }
                                                ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="widget-filter">
                                    <h4 class="widget-filter__title-02">Duration</h4>
                                    <div class="widget-filter__wrapper">
                                        <ul class="widget-filter__list">
                                            <li>
                                                <?php
                                                foreach ($durations as $duration) {
                                                    $durationId = strtolower(str_replace(' ', '', $duration));
                                                    echo '<div class="widget-filter__item">
                        <input type="checkbox" id="' . $durationId . 'Filter" name="duration" value="' . $durationId . '">
                        <label for="' . $durationId . 'Filter">' . $duration . '</label>
                    </div>';
                                                }
                                                ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Start -->
        <?php include("includes/footer.php") ?>
        <!-- Footer End -->

        <!-- Back To Top Button -->
        <button id="backBtn" class="back-to-top backBtn">
            <i class="arrow-top fas fa-arrow-up"></i>
            <i class="arrow-bottom fas fa-arrow-up"></i>
        </button>
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
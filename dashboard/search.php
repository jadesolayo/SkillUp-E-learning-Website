<?php
require_once "../includes/functions.php";

if (isset($_GET['query'])) {
    $searchQuery = $_GET['query'];

    $searchResults = searchCourses($searchQuery);

    // Display the search results
    if (!empty($searchResults)) {
        foreach ($searchResults as $result) {
            echo "<p>Course Title: " . htmlentities($result['coursetitle']) . "</p>";
            echo "<p>Category: " . htmlentities($result['category']) . "</p>";
        }
    } else {
        echo "No results found.";
    }
} else {
    echo "No search query provided.";
}
?>

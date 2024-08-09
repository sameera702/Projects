<?php

$dbhost = "localhost:4306";
$dbuser = "root";
$dbpass = "";
$db = "obs";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
if (!$conn) {
    die("Something went wrong;");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = $_POST['name'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    // Create a new review array
    $newReview = [
        'name' => $name,
        'rating' => (int)$rating,
        'comment' => $comment,
    ];

    // Load existing reviews from the file
    $reviewsFile = 'reviews.json';
    $existingReviews = file_exists($reviewsFile) ? json_decode(file_get_contents($reviewsFile), true) : [];

    // Add the new review
    $existingReviews[] = $newReview;

    // Save the reviews back to the file
    file_put_contents($reviewsFile, json_encode($existingReviews));

    // Return the new review as JSON
    header('Content-Type: application/json');
    echo json_encode($newReview);
    exit;
}
?>

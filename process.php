<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data as you did before

    // You should insert this data into your database. For demonstration purposes, we return the HTML for a single post.
    
    $postHTML = '<div class="post">';
    $postHTML .= '<img src="https://via.placeholder.com/150" alt="Post Image" class="post-image">';
    $postHTML .= '<h2 class="post-title">' . $title . '</h2>';
    $postHTML .= '<p class="post-content">' . $content . '</p>';
    $postHTML .= '<p class="post-reqs">' . $requirements . '</p>';
    $postHTML .= '<p class="post-date">' . $date . '</p>';
    $postHTML .= '<div class="post-actions">';
    $postHTML .= '<button class="update-button">Update</button>';
    $postHTML .= '<button class="reset-button">Reset</button>';
    $postHTML .= '</div>';
    $postHTML .= '</div>';
    
    echo $postHTML;
}
?>

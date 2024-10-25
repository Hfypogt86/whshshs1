<?php
$file = 'posts.txt';
if (file_exists($file)) {
    $posts = file($file, FILE_IGNORE_NEW_LINES);
    foreach ($posts as $post) {
        echo '<div class="post">' . htmlspecialchars($post) . '</div>';
    }
}
?>
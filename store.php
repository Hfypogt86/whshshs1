<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = $_POST['content'] ?? '';
    if (!empty($content)) {
        $file = 'posts.txt';
        if (is_writable($file)) {
            $current = file_get_contents($file);
            $current .= htmlspecialchars($content) . "\n";
            file_put_contents($file, $current);
            echo "Success";
        } else {
            echo "Error: File not writable";
        }
    } else {
        echo "Error: Content is empty";
    }
} else {
    echo "Error: Invalid request method";
}
?>
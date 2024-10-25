<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = $_POST['content'] ?? '';
    if (!empty($content)) {
        $file = 'posts.txt';
        $current = file_get_contents($file);
        $current .= htmlspecialchars($content) . "\n";
        file_put_contents($file, $current);
    }
}
?>
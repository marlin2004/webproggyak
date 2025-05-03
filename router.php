<?php
$page = $_GET['page'] ?? 'home';
$pageFile = "{$page}.php";

if (file_exists($pageFile)) {
    include $pageFile;
} else {
    echo "<h2>Az oldal nem található!</h2>";
}
?>

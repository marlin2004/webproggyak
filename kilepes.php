<?php
unset($_SESSION['felhasznalo']);
session_destroy();
header('Location: index.php');
?>

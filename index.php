<?php
session_start();
require_once 'config/config.php';

$page = $_GET['oldal'] ?? 'fooldal';
$eleres = "controllers/{$page}.php";

if (file_exists($eleres)) {
    include $eleres;
} else {
    include "controllers/fooldal.php";
}
?>

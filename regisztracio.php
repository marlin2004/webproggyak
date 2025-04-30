<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'] ?? '';
    $jelszo = $_POST['jelszo'] ?? '';
    $vezetek = $_POST['vezetek'] ?? '';
    $kereszt = $_POST['kereszt'] ?? '';

    $sor = "$login|$jelszo|$vezetek|$kereszt\n";
    file_put_contents('data/users.txt', $sor, FILE_APPEND);

    header('Location: index.php?oldal=belepes');
    exit;
}
include 'views/regisztracio.view.php';
?>

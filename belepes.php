<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nev = $_POST['nev'] ?? '';
    $jelszo = $_POST['jelszo'] ?? '';

    $sorok = file('data/users.txt');
    foreach ($sorok as $sor) {
        list($login, $jelszo2, $vezetek, $kereszt) = explode('|', trim($sor));
        if ($login === $nev && $jelszo === trim($jelszo2)) {
            $_SESSION['felhasznalo'] = "$vezetek $kereszt ($login)";
            header('Location: index.php');
            exit;
        }
    }

    $hiba = 'Hibás név vagy jelszó';
}
include 'views/belepes.view.php';
?>

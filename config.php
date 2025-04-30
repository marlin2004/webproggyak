<?php
$menu = [
    'fooldal' => 'Főoldal',
    'urlap' => 'Űrlap',
    'tablazat' => 'Táblázat'
];

if (!isset($_SESSION['felhasznalo'])) {
    $menu['belepes'] = 'Belépés';
    $menu['regisztracio'] = 'Regisztráció';
} else {
    $menu['kilepes'] = 'Kilépés';
}
?>

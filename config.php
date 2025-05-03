<?php
session_start();

$menu = [
    "home" => "Főoldal",
    "about" => "Rólunk",
];

if (!isset($_SESSION["user"])) {
    $menu["login"] = "Belépés";
} else {
    $menu["logout"] = "Kilépés";
}

function getCurrentUserDisplay() {
    if (isset($_SESSION["user"])) {
        $u = $_SESSION["user"];
        return "Bejelentkezett: {$u['lastname']} {$u['firstname']} ({$u['username']})";
    }
    return "";
}
?>

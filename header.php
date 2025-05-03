<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Beadandó projekt</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Beadandó weboldal</h1>
        <nav>
            <ul>
                <?php foreach ($menu as $key => $value): ?>
                    <li><a href="?page=<?= $key ?>"><?= $value ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
        <p class="user-display"><?= getCurrentUserDisplay() ?></p>
    </header>
    <main>

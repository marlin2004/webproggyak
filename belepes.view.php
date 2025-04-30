<h2>Belépés</h2>
<?php if (isset($hiba)) echo "<p style='color:red;'>$hiba</p>"; ?>
<form method="post">
    Felhasználónév: <input type="text" name="nev" required><br>
    Jelszó: <input type="password" name="jelszo" required><br>
    <button type="submit">Belépés</button>
</form>

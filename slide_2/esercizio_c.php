<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Tabella quadrati e cubi</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n = (int)$_POST['numero'];

    if ($n >= 1 && $n <= 10) {
        echo "<table border='1'>";
        echo "<tr><th>Numero</th><th>Quadrato</th><th>Cubo</th></tr>";
        for ($i = 1; $i <= $n; $i++) {
            echo "<tr><td>$i</td><td>" . ($i ** 2) . "</td><td>" . ($i ** 3) . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Inserisci un numero tra 1 e 10.</p>";
    }
} else {
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="numero">Scegli un numero:</label>
        <select id="numero" name="numero">
            <?php for ($i = 1; $i <= 10; $i++) { echo "<option value='$i'>$i</option>"; } ?>
        </select>
        <button type="submit">Crea Tabella</button>
    </form>
<?php
}
?>
</body>
</html>

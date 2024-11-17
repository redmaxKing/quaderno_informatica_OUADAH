<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio c - Triangoli</title>
    <style>
        body { font-family: monospace; text-align: center; }
    </style>
</head>
<body>
    <h1>Triangoli di Asterischi</h1>
    <h3>(a)</h3>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    ?>
    <h3>(b)</h3>
    <?php
    for ($i = 10; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    ?>
    <a href="index.html">Torna alla pagina principale</a>
</body>
</html>

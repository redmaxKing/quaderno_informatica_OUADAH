<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio b - Saluto</title>
</head>
<body>
    <?php
    $ora = date("H"); 
    $nome = "Paolo"; 
    $saluto = "";

    if ($ora >= 8 && $ora < 12) {
        $saluto = "Buongiorno";
    } elseif ($ora >= 12 && $ora < 20) {
        $saluto = "Buonasera";
    } else {
        $saluto = "Buonanotte";
    }
    ?>
    <h1><?php echo "$saluto, $nome!"; ?></h1>
    <p>Stai usando il browser: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
    <a href="index.html">Torna alla pagina principale</a>
</body>
</html>

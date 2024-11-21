<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esito Registrazione</title>
    <link rel="stylesheet" href="registrazione_process.css">
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);

            if (!empty($username) && !empty($password)) {
                $file = 'users.txt';
                $data = $username . ',' . password_hash($password, PASSWORD_DEFAULT) . "\n";

                if (file_put_contents($file, $data, FILE_APPEND)) {
                    echo "<h2 class='success'>Registrazione completata con successo!</h2>";
                } else {
                    echo "<h2 class='error'>Errore nella registrazione. Si prega di riprovare.</h2>";
                }
            } else {
                echo "<h2 class='error'>Tutti i campi sono obbligatori.</h2>";
            }
        }
        ?>
        <a href="index.html" class="back-link">Torna alla Home</a>
    </div>
</body>
</html>

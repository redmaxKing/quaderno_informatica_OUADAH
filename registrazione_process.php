<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);


    if (!empty($username) && !empty($password)) {

        $file = 'users.txt';
        $data = $username . ',' . password_hash($password, PASSWORD_DEFAULT) . "\n";

        if (file_put_contents($file, $data, FILE_APPEND)) {
            echo "<h2>Registrazione completata!</h2>";
        } else {
            echo "<h2>Errore nella registrazione. Riprova.</h2>";
        }
    } else {
        echo "<h2>Tutti i campi sono obbligatori.</h2>";
    }
}
?>
<a href="index.html">Torna alla Home</a>



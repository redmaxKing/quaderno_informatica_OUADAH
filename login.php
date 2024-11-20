<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);


    $file = 'users.txt';
    $users = file($file, FILE_IGNORE_NEW_LINES);

    $found = false;

    foreach ($users as $user) {
        list($stored_user, $stored_hash) = explode(',', $user);

        if ($username === $stored_user && password_verify($password, $stored_hash)) {
            $found = true;
            break;
        }
    }

    if ($found) {
        echo "<h2>Benvenuto, $username!</h2>";
    } else {
        echo "<h2>Credenziali non valide.</h2>";
    }
}
?>
<a href="index.html">Torna alla Home</a>



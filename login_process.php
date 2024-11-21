<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $file = 'users.txt'; 


    if (file_exists($file)) {
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
            echo "<div style='text-align: center;'><h2 style='color: green;'>Benvenuto, $username!</h2>";
            echo "<a href='index.html' style='color: blue;'>Torna alla Home</a></div>";
        } else {
            echo "<div style='text-align: center;'><h2 style='color: red;'>Credenziali non valide.</h2>";
            echo "<a href='login.html' style='color: blue;'>Riprova</a></div>";
        }
    } else {
        echo "<h2 style='color: red;'>Errore: Il file degli utenti non esiste.</h2>";
    }
}
?>

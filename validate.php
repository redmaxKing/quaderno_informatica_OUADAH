<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    if (strlen($password) < 6) {
        echo "<p>La password deve contenere almeno 6 caratteri.</p>";
    } else {
        echo "<p>Benvenuto, $username!</p>";
    }
    echo '<a href="exercise3.html">Torna</a>';
}
?>

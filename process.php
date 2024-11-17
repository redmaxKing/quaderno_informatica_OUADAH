<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    echo "<h1>Dati Inseriti:</h1>";
    echo "<p>Nome: $name</p>";
    echo "<p>Email: $email</p>";
    echo '<a href="exercise2.html">Torna al modulo</a>';
}
?>

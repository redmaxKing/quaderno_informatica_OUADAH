<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === 'admin' && $password === '12345') {
        echo "<h1>Benvenuto, $username!</h1>";
        echo "<a href='index.html'>Torna alla Home</a>";
    } else {
        echo "<h1>Accesso negato! Credenziali errate.</h1>";
    }
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <button type="submit">Accedi</button>
    </form>
</body>
</html>

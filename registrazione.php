<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Registrazione Utente</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Registrazione Utente</h1>
    <form action="registrazione_process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit">Registrati</button>
    </form>
</body>
</html>




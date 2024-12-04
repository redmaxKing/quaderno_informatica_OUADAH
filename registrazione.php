<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Registrazione Utente</title>
</head>
<body>
    <div class="container">
        <h1>Registrazione Utente</h1>
        <form action="registrazione_process.php" method="post" class="registration-form">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Inserisci il tuo username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Crea una password" required>
            </div>
            <button type="submit" class="btn-submit">Registrati</button>
        </form>
    </div>
</body>
</html>

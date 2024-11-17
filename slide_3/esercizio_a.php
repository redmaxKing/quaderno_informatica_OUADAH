<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Form Validation</title>
</head>
<body>
    <form action="es_a_process.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" pattern="[a-zA-Z\s]+" required><br>

        <label for="cognome">Cognome:</label>
        <input type="text" id="cognome" name="cognome" pattern="[a-zA-Z\s']+" required><br>

        <label for="data_nascita">Data di Nascita:</label>
        <input type="date" id="data_nascita" name="data_nascita" required><br>

        <label for="codice_fiscale">Codice Fiscale:</label>
        <input type="text" id="codice_fiscale" name="codice_fiscale"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="cellulare">Cellulare:</label>
        <input type="tel" id="cellulare" name="cellulare" pattern="\d{12}"><br>

        <label for="indirizzo">Indirizzo:</label>
        <input type="text" id="indirizzo" name="indirizzo" required><br>

        <label for="nickname">Nickname:</label>
        <input type="text" id="nickname" name="nickname" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" 
               pattern="(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).{8,}" required><br>

        <button type="submit">Invia</button>
    </form>
</body>
</html>

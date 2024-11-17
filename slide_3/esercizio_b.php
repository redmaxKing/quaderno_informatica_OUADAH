<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio B: Validazione con PHP</title>
</head>
<body>
    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $errors = [];
        
  
        $nome = isset($_POST['nome']) ? trim($_POST['nome']) : '';
        $cognome = isset($_POST['cognome']) ? trim($_POST['cognome']) : '';
        $email = isset($_POST['email']) ? trim($_POST['email']) : '';
        $nickname = isset($_POST['nickname']) ? trim($_POST['nickname']) : '';
        $password = isset($_POST['password']) ? trim($_POST['password']) : '';

        if (empty($nome) || !preg_match("/^[a-zA-Z\s]+$/", $nome)) {
            $errors[] = "Nome non valido. Deve contenere solo lettere e spazi.";
        }

        if (empty($cognome) || !preg_match("/^[a-zA-Z\s']+$/", $cognome)) {
            $errors[] = "Cognome non valido. Deve contenere solo lettere, spazi o apostrofi.";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Email non valida.";
        }

        if ($nickname === $nome || $nickname === $cognome) {
            $errors[] = "Il nickname deve essere diverso da nome e cognome.";
        }

        if (!preg_match("/(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).{8,}/", $password)) {
            $errors[] = "Password non valida. Deve contenere almeno una maiuscola, un numero e un simbolo speciale.";
        }

      
        if (!empty($errors)) {
            echo "<h2>Errori trovati:</h2>";
            echo "<ul>";
            foreach ($errors as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
        } else {
           
            echo "<h2>Dati validi:</h2>";
            echo "Nome: $nome<br>";
            echo "Cognome: $cognome<br>";
            echo "Email: $email<br>";
            echo "Nickname: $nickname<br>";
        }
    } else {
    ?>
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br>

            <label for="cognome">Cognome:</label>
            <input type="text" id="cognome" name="cognome" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="nickname">Nickname:</label>
            <input type="text" id="nickname" name="nickname" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>

            <button type="submit">Invia</button>
        </form>
    <?php
    }
    ?>
</body>
</html>

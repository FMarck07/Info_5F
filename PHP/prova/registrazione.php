<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrazione</title>
</head>
<body>
    <form action="debug.php" method="post">

        <label for="nome">Inserisci il nome</label>
        <input type="text" id = "nome" name = "nome" required>
        <br>

        <label for="cognome">Inserisci il cognome</label>
        <input type="text" id = "cognome" name = "cognome" required>
        <br>

        <label for="data_iscrizione">Inserisci la data di iscrizione</label>
        <input type="date" id = "data_iscrizione" name = "data_iscrizione" required>
        <br>

        <label for="pass">Inserisci la password</label>
        <input type="password" id = "pass" name = "pass" required>
        <br>

        <button type="submit">Invia i dati</button>

    </form>
</body>
</html>

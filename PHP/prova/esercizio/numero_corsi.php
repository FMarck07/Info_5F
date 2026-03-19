<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Numero Corsi</title>
</head>
<body>
    <form action="inserisci_docenti.php" method = "POST">
        <label for="corsi">Inserisci numero di corsi</label>
        <input type="number" id = "corsi" name = "corsi" min = 1 max = 10 required>
        <br>
        <button type="submit">Invia il numero di corsi che si vogliono attivare</button>
    </form>
</body>
</html>

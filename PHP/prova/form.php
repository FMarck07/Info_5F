<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="pilota">Inserisci un pilota</label>
        <input type="text" id = "pilota" name = "pilota">
        <br>
        <label for="punteggio">Inserisci il punteggio</label>
        <input type="number" id = "punteggio" name = "punteggio">
        <br>
        <button type="submit">Invia modulo</button>
    </form>
</body>
</html>

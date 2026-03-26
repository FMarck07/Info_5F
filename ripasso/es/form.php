<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="home_page.php" method="POST">
    <label for="titolo">Titolo del corso:</label>
    <input type="text" id="titolo" name="titolo" required>
    <br>

    <label for="categoria">Categoria:</label>
    <input type="text" id="categoria" name="categoria" required>
    <br>

    <label for="ore">Ore totali:</label>
    <input type="number" id="ore" name="ore" required>
    <br>

    <label for="prezzo">Prezzo (€):</label>
    <input type="number" step="0.01" id="prezzo" name="prezzo" required>
    <br>

    <label for="pass">Password</label>
    <input type="password" id="pass" name="pass" required>
    <br>

    <button type="submit">Aggiungi all'Array</button>
</form>
</body>
</html>

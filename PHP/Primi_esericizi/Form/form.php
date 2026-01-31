<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="elabora.php">
        <h1>INFORMAZIONI</h1>
        <label for="nome">Nome:</label> <input id = "nome" type="text" name="nome"><br>
        <label for="cognome">Cognome:</label> <input id = "cognome" type="text" name="cognome"><br>
        <label for="email">Email:</label> <input id = "email" type="email" name="email"><br>
        <label for=password>Password:</label> <input id = "password" type="password" name="password"><br>
        <label for=eta>Età:</label> <input id = "eta" type="number" name="eta"><br>
        <br>
        <label>Sesso:</label>
        <label for=sessoM>M</label>
        <input id = "sessoM" type="radio" name="sesso" value="M">
        <label for=sessoF>F</label>
        <input id = "sessoF" type="radio" name="sesso" value="F"><br>
        <br>
        <label>Corsi:</label><br>
        <label for = "corsophp">PHP</label>
        <input id = "corsophp" type="checkbox" name="corsi[]" value="PHP"><br>
        <label for = "corsojava">JAVA</label>
        <input id = "corsojava" type="checkbox" name="corsi[]" value="JAVA"><br>
        <label for = "corsohtml">HTML</label>
        <input id = "corsohtml" type="checkbox" name="corsi[]" value="HTML"><br>
        <br>
        <!-- Drop down list -->
        <label for="citta">Città di residenza</label><br>
        <select name="citta">
            <option value = "">--SELEZIONA--</option>
            <option value = "Roma">Roma</option>
            <option value = "Milano">Milano</option>
            <option value = "Firenze">Firenze</option>
            <option value = "Rovigo">Rovigo</option>
            <option value = "Napoli">Napoli</option>
            <option value = "Palermo">Palermo</option>
        </select><br>
        <!-- List box multipla -->
        <br>
        <label for = "lingua">Lingue conosciute</label><br>
        <select name="lingua[]" multiple>
            <option value = "Italiano">Italiano</option>
            <option value = "Inglese">Inglese</option>
            <option value = "Tedesco">Tedesco</option>
            <option value = "Francese">Francese</option>
            <option value = "Cinese">Cinese</option>
        </select><br>
        <br>
        <label for="area">Parlaci di te...</label><br>
        <textarea name="area"></textarea>
        <br>
        <button type="submit">INVIA</button>
    </form>
</body>
</html>

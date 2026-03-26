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
    <form action="tabella.php" method="post">
        <label for="nome">Inserisci il nome</label>
        <input type="text" id = "nome" name="nome">
        <br>
        <label for="cognome">Inserisci il cognome</label>
        <input type="text" id = "cognome" name="cognome">
        <br>
        <label for="data_iscrizione">Inserisci la data di iscrizione</label>
        <input type="date" id = "data_iscrizione" name="data_iscrizione">
        <br>
        <label for="pass">Inserisci la data di password</label>
        <input type="password" id = "pass" name="pass">
        <br>
        <label for="libri">Inserisci i libri</label>
        <select name="libri[]" id="libri">
            <option value="DC">DC</option>
            <option value="ORV">ORV</option>
            <option value="SS">SS</option>
        </select>
        <br>
        <strong>Vuoi la consegna?</strong>
        <label for="consegna_si">si</label>
        <input type="radio" id="consegna_si" name = "consegna" value = "si">
        <label for="consegna_no">no</label>
        <input type="radio" id="consegna_no" name = "consegna" value = "no">
        <br>
        <button type="submit">Invia i dati</button>
    </form>
</body>
</html>

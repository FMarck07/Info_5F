<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST["nome_pilota"];
    $punteggio = $_POST["punteggio_pilota"];
    $nome = trim($nome);
    $punteggio = trim($punteggio);
}
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
    <h1>Dati inseriti</h1>
    <?=$nome?>
    <?=$punteggio?>
</body>
</html>

<?php

$database_utenti = [
    [
        "nome" => "Mario",
        "cognome" => "Rossi",
        "numero_tessera" => 1,
        "data_iscrizione" => "2023-01-15",
        "pass" => "hash_vecchio_utente"
    ]
];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST["data_iscrizione"] !== date("Y-m-d")){
        $message = "Errore nella data iscrizione";
        include "es/error.php";
        exit;
    }
    $utente = [];
    $utente["nome"] = $_POST["nome"] ?? "";
    $utente["cognome"] = $_POST["cognome"] ?? "";
    $utente["data_iscrizione"] = $_POST["data_iscrizione"];
    $utente["numero_tessera"] = count($database_utenti) + 1;
    $pass = $_POST["pass"];
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    $utente["pass"] = $hash;
    $database_utenti[] = $utente;
}
$intestazione = $database_utenti[0];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabella</title>
</head>
<body>
    <table>
        <tr>
            <?php foreach ($intestazione as $items):?>
                <?php if($items !== "pass"):?>
                    <th><?=$items?></th>
                <?php endif;?>
            <?php endforeach;?>
        </tr>
        <?php foreach ($database_utenti as $items => $value):?>
            <tr>
                <td><?=$value["nome"]?></td>
                <td><?=$value["cognome"]?></td>
                <td><?=$value["data_iscrizione"]?></td>
                <td><?=$value["numero_tessera"]?></td>
                <td><?=$value["pass"]?></td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>

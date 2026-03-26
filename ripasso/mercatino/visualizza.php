<?php

$prodotti = [
        [
                "id" => 101,
                "nome" => "Laptop Pro 15",
                "categoria" => "Elettronica",
                "prezzo" => 1250.00,
                "disponibile" => true,
                "codice_sconto" => "TECH20"
        ],
        [
                "id" => 102,
                "nome" => "Sedia Ergonomica",
                "categoria" => "Arredamento",
                "prezzo" => 250.50,
                "disponibile" => true,
                "codice_sconto" => null
        ],
        [
                "id" => 103,
                "nome" => "Monitor 4K 27",
                "categoria" => "Elettronica",
                "prezzo" => 400.00,
                "disponibile" => false,
                "codice_sconto" => "DISPLAY10"
        ],
        [
                "id" => 104,
                "nome" => "Tastiera Meccanica",
                "categoria" => "Elettronica",
                "prezzo" => 85.00,
                "disponibile" => true,
                "codice_sconto" => "KEY5"
        ],
        [
                "id" => 105,
                "nome" => "Scrivania Regolabile",
                "categoria" => "Arredamento",
                "prezzo" => 600.00,
                "disponibile" => true,
                "codice_sconto" => "OFFICE"
        ]
];


$ordine_cliente = [];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $prodotti_scelti = $_POST["prodotti"] ?? [];

    $totale = 0;
    foreach ($prodotti as $p){
        if(in_array($p["nome"], $prodotti_scelti)){
            $totale += $p["prezzo"];
        }
    }
    $ordine_cliente = [
        "id" => count($prodotti) + 1,
        "nome" => $_POST["nome"] ?? "",
        "cognome" => $_POST["cognome"] ?? "",
        "Spedizione" => $_POST["spedizione"] ?? "",
        "prodotti" => implode(", ", $_POST["prodotti"] ?? []),
        "giorno" => $_POST["giorno"] ?? "",
        "prezzo" => $totale
    ];
}else{
    http_response_code(400);
    $messaggio = "errore!";
    include "error.php";
    exit();
}

$intestazione = array_keys($prodotti[0]);
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
    <table>
        <tr>
            <?php foreach ($intestazione as $valore):?>
                <th><?= $valore?></th>
            <?php endforeach;?>
        </tr>
            <?php foreach ($prodotti as $chiave):?>
                <tr>
                    <?php foreach ($chiave as $valore):?>
                        <td><?= $valore?></td>
                    <?php endforeach;?>
                </tr>
            <?php endforeach;?>
    </table>
    <br>
    <table>
        <tr>
            <?php foreach ($ordine_cliente as $chiave => $valore):?>
                <th><?= $chiave?></th>
            <?php endforeach;?>
        </tr>
        <tr>
            <?php foreach ($ordine_cliente as $chiave => $valore):?>
                <td><?= $valore?></td>
            <?php endforeach;?>
        </tr>
    </table>
</body>
</html>

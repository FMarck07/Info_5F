<?php
$utenti = [
    [
        "tessera" => "1",
        "nome" => "vise",
        "cognome" => "cappella",
        "data_iscrizione" => "17/03/26",
        "pass" => "cappellino",
        "libri" => "ORV",
        "consegna" => "si"
    ],
    [
        "tessera" => "1",
        "nome" => "vise2",
        "cognome" => "cappella2",
        "data_iscrizione" => "17/03/26",
        "pass" => "cappellino",
        "libri" => "ORV",
        "consegna" => "si"
    ]
];
$nuovo_utente = [];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nuovo_utente = [
        "tessera" => count($utenti),
        "nome" => $_POST["nome"],
        "cognome" => $_POST["cognome"],
        "data_iscrizione" => $_POST["data_iscrizione"],
        "pass" => $_POST["pass"],
        "libri" => implode(", ", $_POST["libri"] ?? []),
        "consegna" => $_POST["consegna"]
    ];
}
$utenti[] = $nuovo_utente;

$intestazione = array_keys($utenti[0]);

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
            <?php foreach ($intestazione as $chiave):?>
                <th><?=$chiave?></th>
            <?php endforeach;?>
        </tr>
        <?php foreach ($utenti as $chiave):?>
            <tr>
                <?php foreach ($chiave as $value):?>
                    <td><?= $value?></td>
                <?php endforeach;?>
            </tr>
        <?php endforeach;?>
    </table>

</body>
</html>

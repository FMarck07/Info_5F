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

$giorni = ["lunedì", "martedì", "mercoledì", "giovedì", "venerdì", "sabato", "domenica"];
$oggi = new DateTime();
$oggi -> modify("+2 days");
$data_formattata = $oggi -> format("Y-m-d h:i:s")
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
    <h1><?=$data_formattata?></h1>
    <form action="visualizza.php" method="post">
        <label for="nome_cliente">Inserisci il nome</label>
        <input type="text" id = "nome_cliente" name = "nome">
        <br>
        <label for="cognome_cliente">Inserisci il cognome</label>
        <input type="text" id = "cognome_cliente" name = "cognome">
        <br>
        <strong>Vuoi la spedizione: </strong>
        <label for="spedizione_si">Si</label>
        <input type="radio" id = "spedizione_si" name = "spedizione" value = "si">
        <label for="spedizione_no">No</label>
        <input type="radio" id = "spedizione_no" name = "spedizione" value = "no">
        <br>
        <label for="prodotti">Scegli il prodotto</label>
        <select name="prodotti[]" id="prodotti" multiple>
            <?php foreach($prodotti as $value):?>
                <option value="<?=$value["nome"]?>">Prezzo: <?=$value["prezzo"]?> Nome: <?=$value["nome"]?></option>
            <?php endforeach;?>
        </select>
        <br>
        <label for="giorno">Quando vorresti ricevere il pacco: </label>
        <select name="giorno" id="giorno">
            <?php foreach ($giorni as $value):?>
                <option value="<?=$value?>"><?=$value?></option>
            <?php endforeach?>
        </select>
        <br>
        <button type="submit">Invia i dati</button>
    </form>
</body>
</html>

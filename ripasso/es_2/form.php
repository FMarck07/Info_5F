<?php
$corsi = [
    "ITA" => "italiano",
    "INFO" => "Informatica",
    "sistemi" => "Sistemi e reti"
];

$giorni_settimana = ["lunedi", "giovedi", "venerdi", "sabato"];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styke.css">

    <title>Document</title>
</head>
<body>
    <form action="poli.php" method="post">
        <label for="nome">Inserisci il nome</label>
        <input type="text" name="nome" id="nome" required>
        <br>
        <label for="cognome">Inserisci il cognome</label>
        <input type="text" name="cognome" id="cognome" required>
        <br>
        <!--Listbox -->

        <label for="corsi_list">Insersci</label>
        <select name="corsi_l[]" id="corsi_list" multiple>
            <?php foreach ($corsi as $chiave => $valore):?>
                <option value="<?= $chiave ?>"><?=$valore?></option>
            <?php endforeach;?>
        </select>
        <br>
        <label for="corsi_drop">Insersci</label>
        <select name="corsi_d" id="corsi_drop">
            <?php foreach ($corsi as $chiave => $valore):?>
                <option value="<?= $chiave ?>"><?=$valore?></option>
            <?php endforeach;?>
        </select>
        <br>
        <?php foreach ($giorni_settimana as $value):?>
            <label for="<?=$value?>"><?=ucfirst($value)?></label>
            <input type="checkbox" id="<?=$value?>" name="giorni[]" value="<?=$value?>">
            <br>
        <?php endforeach;?>

        <label for="suggerimento">Inserisci suggerimento</label>
        <textarea name="suggerimento" id="suggerimento"></textarea>
        <br>

        <strong>sesso: </strong>
        <label for="maschio">m</label>
        <input type="radio" id="maschio" name = "sesso" value = "maschio">
        <label for="femmina">f</label>
        <input type="radio" id="femmina" name = "sesso" value = "femmina">
        <br>
        <button type="submit">Invia i dati</button>
    </form>
</body>
</html>

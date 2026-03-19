<?php

$singolo_utente = [
    "Nome" => "Mario",
    "Cognome" => "Rossi",
    "Ruolo" => "Amministratore",
    "Stato" => "Attivo"
];


$classe = [
    ["Nome" => "Mario", "Voto" => 8, "Materia" => "Matematica"],
    ["Nome" => "Luigi", "Voto" => 6, "Materia" => "Storia"],
    ["Nome" => "Giulia", "Voto" => 9, "Materia" => "Informatica"]
];


$assegnazioni = [
    "Informatica" => ["Prof. Rossi", "Prof. Verdi"], // 2 prof
    "Matematica" => ["Prof. Bianchi"],               // 1 prof
    "Storia" => []                                   // 0 prof
];

$intestazione = array_keys($classe[0]);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <?php foreach ($singolo_utente as $chiave => $valore):?>
            <tr>
                <th><?= $chiave?></th>
                <td><?= $valore?></td>
            </tr>
        <?php endforeach;?>
    </table>

    <table>
        <tr>
            <?php foreach ($intestazione as $chiave):?>
                <th><?= $chiave?></th>
            <?php endforeach;?>
        </tr>

        <?php foreach ($classe as $studente):?>
            <tr>
                <?php foreach ($studente as $dato):?>
                    <td><?= $dato ?></td>
                <?php endforeach;?>

            </tr>
        <?php endforeach;?>
    </table>

    <br>

    <table>
        <tr>
            <th>Materia</th>
            <th>Corpo docenti</th>
        </tr>

        <?php foreach ($assegnazioni as $materia => $prof):?>
            <tr>
                <td><?=$materia?></td>
                <?php if (empty($prof)):?>
                    <td>Nessun prof presente</td>
                <?php else:?>
                    <td><?=implode("- ", $prof)?></td>
                <?php endif;?>
            </tr>
        <?php endforeach;?>
    </table>

</body>
</html>

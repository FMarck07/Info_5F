<?php
$classifica = [
    [ 'Pilota' => 'Hamilton',   'Punteggio' => 25 ],
    [ 'Pilota' => 'Verstappen', 'Punteggio' => 18 ],
    [ 'Pilota' => 'Leclerc',    'Punteggio' => 30 ],
    [ 'Pilota' => 'Sainz',      'Punteggio' => 15 ]
];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nuovo_pilota = $_POST["pilota"];
    $nuovo_punteggio = $_POST["punteggio"];
    $classifica[] = [ 'Pilota' => $nuovo_pilota,'Punteggio' => $nuovo_punteggio ];
}

$intestazione = array_keys($classifica[0]);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visualizza Array finale</title>
</head>
<body>
    <table>
        <tr>
            <?php foreach($intestazione as $item):?>
                <th><?=$item?></th>
            <?php endforeach;?>
        </tr>
        <?php foreach($classifica as $item):?>
            <tr>
                <td><?=$item["Pilota"]?></td>
                <td><?=$item["Punteggio"]?></td>
            </tr>
        <?php endforeach;?>

    </table>

</body>
</html>

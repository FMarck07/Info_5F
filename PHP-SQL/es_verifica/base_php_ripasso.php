<?php

$ruoloUtente = $_POST['ruoloUtente'] ?? "Studente";

$crediti = 15;
$esito = ($crediti > 15)? "Maggiore di 15" : "Minore di 15";
$autoA = 250;
$autoB = 250;
$esito2 = $autoA <=> $autoB;
$pilota = ['nome' => 'Mario', 'punteggio' => 50];
echo '<br>';
echo array_key_exists('c', $pilota) ? "Esiste" : "NO";

$classifica = [
    'Hamilton' => 25,
    'Verstappen' => 18,
    'Leclerc' => 30,
    'Norris' => 12
];
echo '<br>';
echo array_key_exists("Sainz", $classifica) ? "SI": "NO";
unset($classifica["Norris"]);
echo '<br>';

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
    <p><?=$esito?></p>
    <p><?=$esito2?></p>
    <table>
        <tr>
            <th>Pilota</th>
            <th>Punteggio</th>
        </tr>
        <?php foreach ($classifica as $pilota => $punti): ?>
            <tr>
                <td><?= $pilota ?></td>
                <td><?= $punti ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

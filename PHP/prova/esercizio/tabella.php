<?php
$corsi = [
    "MAT" => "Matematica Avanzata",
    "ITA" => "Letteratura Italiana",
    "STO" => "Storia Contemporanea",
    "ING" => "Inglese Livello B2",
    "INF" => "Informatica e Programmazione"
];

$docenti_scelti = [];
$corsi_scelti = [];
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $docenti_scelti = $_POST["nome_prof"] ?? [];
    $corsi_scelti = $_POST["corsi"] ?? [];
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tabella</title>
</head>
<body>
    <table>

        <tr>
            <th>Corso Selezionato</th>
            <th>Docenti Assegnati</th>
        </tr>

        <?php foreach($corsi_scelti as $indice => $sigla): ?>
            <tr>

                <td><?= $corsi[$sigla]?></td>

                <td>
                    <?php if (isset($docenti_scelti[$indice])): ?>

                        <?= implode(", ", $docenti_scelti[$indice]) ?>

                    <?php else: ?>

                        Nessun docente selezionato

                    <?php endif; ?>
                </td>

            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

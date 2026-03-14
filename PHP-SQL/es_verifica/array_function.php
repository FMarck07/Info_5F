<?php

function calcolaSconto (int|float $prezzo, ?int $sconto):int|float{
    if($sconto == null){
        return $prezzo;
    }
    return $prezzo - ($prezzo*$sconto/100);
}

echo calcolaSconto(100, 20);
echo '<br>';
function calcolaCostoCorso(int|float $costoCorso, ?int $borsaDiStudio, int|float $tassaFissa = 15.5) : int|float{
    if($borsaDiStudio == null){
        return $costoCorso + $tassaFissa;
    }
    return $costoCorso - $borsaDiStudio + $tassaFissa;
}

function calcolaStipendio(int|float $pagaBase, ?int $oreStraordinario, int|float $bonusAziendale = 100): int|float{
    if($oreStraordinario == null){
        return $pagaBase + $bonusAziendale;
    }
    return $pagaBase + $bonusAziendale + $oreStraordinario * 15;
}

echo calcolaCostoCorso(10, 100, 300);

$studente = [
    'Nome'    => 'Giulia',
    'Cognome' => 'Bianchi',
    'Materia' => 'Informatica',
    'Voto'    => 28
];

$catalogo = [
    ['id' => '101', 'nome' => 'Tastiera Meccanica', 'prezzo' => 45.50],
    ['id' => '102', 'nome' => 'Mouse Wireless',     'prezzo' => 25.00],
    ['id' => '103', 'nome' => 'Monitor 24 Pollici', 'prezzo' => 150.00]
];
$intestazione1 = array_keys($catalogo[0]);

$dipendenti = [
    ['matricola' => 'A01', 'nome' => 'Marco', 'paga_base' => 1200.50, 'ore_straordinario' => 10],
    ['matricola' => 'A02', 'nome' => 'Lucia', 'paga_base' => 1500.00, 'ore_straordinario' => null],
    ['matricola' => 'A03', 'nome' => 'Paolo', 'paga_base' => 1100.00, 'ore_straordinario' => 5]
];
$intestazioni = array_keys($dipendenti[0]);

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

    <table>
        <tr>
            <th>Chiave</th>
            <th>Valore</th>
        </tr>
        <?php foreach ($studente as $chiave => $valore):?>
            <tr>
                <td><?=$chiave?></td>
                <td><?=$valore?></td>
            </tr>
        <?php endforeach;?>
    </table>

    <table>
        <tr>
            <?php foreach ($intestazione1 as $titolo):?>
                <th><?= $titolo?></th>
            <?php endforeach;?>
        </tr>
        <?php foreach ($catalogo as $prodotto):?>
            <tr>
                <td><?=$prodotto['id']?></td>
                <td><?=$prodotto['nome']?></td>
                <td><?=$prodotto['prezzo']?></td>
            </tr>
        <?php endforeach;?>
    </table>

    <table>
        <tr>
            <?php foreach ($intestazioni as $titolo):?>
                <th><?= $titolo?></th>
            <?php endforeach;?>
        </tr>
        <?php foreach ($dipendenti as $dati):?>
            <tr>
                <td><?=$dati['matricola']?></td>
                <td><?=$dati['nome']?></td>
                <td><?=$dati['paga_base']?></td>
                <td><?=calcolaStipendio($dati['paga_base'], $dati['ore_straordinario'])?></td>
            </tr>
        <?php endforeach;?>
    </table>

</body>
</html>


<?php
$nome = "anonimo";
$numero = 1;
$scelta = "";
$prezzo_totale = 0;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST["nome_cliente"] ?? "anonimo";
    $numero = $_POST["numero_ordinazioni"] ?? 1;
    $scelta = $_POST["scelta"] ?? ""; // Aggiunto lo scudo ?? "" contro il Warning

    $tipi = [
            ["nome" => "pizza", "prezzo" => 10],
            ["nome" => "panino", "prezzo" => 8],
            ["nome" => "piadina", "prezzo" => 7],
    ];

    foreach ($tipi as $piatto):
        if($piatto['nome'] === $scelta){
            $prezzo_totale = $piatto['prezzo'] * $numero;
            break;
        }
    endforeach;

    // === HO SPOSTATO IL SALVATAGGIO QUI DENTRO ===
    $data_di_oggi = date("d-m-Y H:i:s");
    // Ho aggiunto \n alla fine per andare a capo nel file di testo!
    $stringa = "Data: $data_di_oggi - Cliente: $nome - Ordine: $numero x $scelta - Totale: $prezzo_totale €\n";
    $file = fopen("registro_ordini.txt", "a");
    fwrite($file, $stringa);
    fclose($file);
}
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
    <h1>Visualizzo contenuto</h1>
    <table>
        <tr>
            <th>Cliente</th>
            <td><?=$nome?></td>
        </tr>
        <tr>
            <th>Numero Ordini</th>
            <td><?=$numero?></td>
        </tr>
        <tr>
            <th>Tipo</th>
            <td><?=ucfirst($scelta)?></td>
        </tr>
        <tr>
            <th>Prezzo</th>
            <td><?=$prezzo_totale?></td>
        </tr>
    </table>
    <br>
    <a href="index.php">Torna al form</a>
</body>
</html>

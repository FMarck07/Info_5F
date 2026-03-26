<?php
$nuovo_utente = [];
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nuovo_utente = [
        "nome" => strtoupper(trim($_POST["nome"] ?? "")),
        "cognome" => strtoupper(trim($_POST["cognome"] ?? "")),
        "corsi_l" => implode(",",$_POST["corsi_l"] ?? []),
        "corsi_d" => $_POST["corsi_d"] ?? "",
        "giorni" => implode(",", $_POST["giorni"] ?? []),
        "suggerimento" => $_POST["suggerimento"] ?? "suggerimento",
        "sesso" => $_POST["sesso"] ?? ""
    ];
}

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
    <table>
        <tr>
            <?php foreach ($nuovo_utente as $chiave => $valore): ?>
                <th><?= $chiave ?></th>
            <?php endforeach; ?>
        </tr>
        <tr>
            <?php foreach ($nuovo_utente as $valore => $val): ?>
                <td><?= $val ?></td>
            <?php endforeach; ?>
        </tr>
    </table>
</body>
</html>

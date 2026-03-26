<?php

$corsi = [
    [ "id" => 1, "titolo" => "PHP Base", "categoria" => "Programmazione", "ore" => 20, "prezzo" => 150.00, "password" => "php123" ],
    [ "id" => 2, "titolo" => "Design UI/UX", "categoria" => "Grafica", "ore" => 15, "prezzo" => 120.50, "password" => "designSicuro99" ],
    [ "id" => 3, "titolo" => "Sviluppo Web Avanzato", "categoria" => "Programmazione", "ore" => 40, "prezzo" => 300.00, "password" => "webmaster" ],
    [ "id" => 4, "titolo" => "Marketing Digitale", "categoria" => "Marketing", "ore" => 25, "prezzo" => 200.00, "password" => "mkt" ],
    [ "id" => 5, "titolo" => "JavaScript per Front-end", "categoria" => "Programmazione", "ore" => 30, "prezzo" => 220.00, "password" => "jsRules2024!" ]
];

$pass = $_POST["pass"];
$passhash = password_hash($pass, PASSWORD_DEFAULT);

if(password_verify($pass, $passhash)){
    echo "Nigga";
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nuovo_corso = [
        "id" => count($corsi) + 1,
        "titolo" => $_POST["titolo"],
        "categoria" => $_POST["categoria"],
        "ore" => $_POST["ore"],
        "prezzo" => $_POST["prezzo"],
        "password" => $passhash
    ];
    $corsi[] = $nuovo_corso;
}

$file = fopen("nigga.txt", "a");
foreach ($corsi as $value){
    $nigga = implode(",", $value).PHP_EOL;
    fwrite($file, $nigga);
}
$intestazioni = array_keys($corsi[0]);


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
            <?php foreach ($intestazioni as $value):?>
                <?php if ($value != "password"):?>
                    <th><?=$value?></th>
                <?php endif;?>
            <?php endforeach;?>
        </tr>

        <?php foreach ($corsi as $value):?>
            <tr>
                <?php foreach ($value as $chiave => $scappella):?>
                    <?php if ($chiave != "password"):?>
                        <td><?=$scappella?></td>
                    <?php endif;?>
                <?php endforeach;?>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>


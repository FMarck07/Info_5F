<?php


$posizioni_aperte = [
    "DEV" => "Sviluppatore Web",
    "DES" => "Web Designer",
    "SYS" => "Sistemista"
];

// 2. IL DATABASE DEGLI ISCRITTI (Array Multidimensionale)
$candidati = [
    [
        "nome" => "Harry",
        "cognome" => "Potter",
        "codice_ruolo" => "DIF-99",
        "anni_esperienza" => "45",
        "password" => "hash_segreto_123"
    ]
];


function VerificaCorso($codice_inserito, $lista_corsi)
{
    if(!(array_key_exists($codice_inserito, $lista_corsi))){
        http_response_code(400);
        $message = "Errore codice posizione aperte non esistente";
        include "error.php";
        exit;
    }else{

    }
}



if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome_pulito = "";
    $cognome_pulito = "";
    $codice_pulito = "";

    $candidato = [];

    $candidato["nome"] = ucfirst(trim($_POST["nome"] ?? ""));
    $candidato["cognome"] = ucfirst(trim($_POST["cognome"] ?? ""));
    $candidato["codice_ruolo"] = strtoupper(trim($_POST["codice_ruolo"] ?? ""));
    $candidato["anni_esperienza"] = $_POST["anni_esperienza"] ?? "";
    VerificaCorso($candidato["codice_ruolo"], $posizioni_aperte);
    $pass = $_POST["password"];
    $pass_c = password_hash($pass, PASSWORD_DEFAULT);
    $candidato["password"] = $pass_c;
    $candidati[] = $candidato;
}

$intestazione2 = array_keys($candidati[0]);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="nome">Inserisci il nome</label>
        <input type="text" id ="nome" name = "nome" required>
        <br>

        <label for="cognome">Inserisci il cognome</label>
        <input type="text" id ="cognome" name = "cognome" required>
        <br>

        <label for="codice_ruolo">Inserisci il Codice Ruolo</label>
        <input type="text" id ="codice_ruolo" name = "codice_ruolo" required>
        <br>

        <label for="anni_esperienza">Inserisci il Codice Ruolo</label>
        <input type="number" id ="anni_esperienza" name = "anni_esperienza" required>
        <br>

        <label for="password">Inserisci il Codice Ruolo</label>
        <input type="password" id ="password" name = "password" required>
        <br>

        <button type="submit">Invia i dati</button>
    </form>
    <br>
    <br>

    <table>
        <?php foreach ($posizioni_aperte as $chiave => $valore):?>
            <tr>
                <th><?= $chiave?></th>
                <td><?= $valore?></td>
            </tr>
        <?php endforeach;?>
    </table>

    <br>
    <br>

    <table>
        <tr>
            <?php foreach ($intestazione2 as $chiave):?>
                <?php if($chiave !== "password"):?>
                    <th><?= $chiave?></th>
                <?php endif;?>
            <?php endforeach;?>
        </tr>
        <?php foreach ($candidati as $chiave => $valore):?>
            <tr>
                <?php foreach ($valore as $dati):?>
                    <?php if($chiave != "password"):?>
                        <td><?=$dati?></td>
                    <?php endif;?>
                <?php endforeach;?>

            </tr>
        <?php endforeach;?>
    </table>

</body>
</html>

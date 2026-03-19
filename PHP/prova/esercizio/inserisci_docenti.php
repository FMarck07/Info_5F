<?php
$numero_corsi = 0;
$corsi = [
    "MAT" => "Matematica Avanzata",
    "ITA" => "Letteratura Italiana",
    "STO" => "Storia Contemporanea",
    "ING" => "Inglese Livello B2",
    "INF" => "Informatica e Programmazione"
];

$docenti = [
    "Prof. Rossi" => "Matematica",
    "Prof.ssa Bianchi" => "Lettere e Storia",
    "Prof. Verdi" => "Informatica",
    "Prof.ssa Neri" => "Lingua Inglese",
    "Prof. Gialli" => "Educazione Fisica"
];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $numero_corsi = $_POST["corsi"];
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Inserimento dei corsi</title>
</head>
<body>
    <form action="tabella.php" method = "POST">

        <?php for($i = 0; $i < $numero_corsi; $i++):?>
        <div>
            <label for="nome_prof"></label>
            <select name="nome_prof[<?= $i?>][]" id="nome_prof" size = "5" multiple>
                <?php foreach ($docenti as $nome_docente => $materia):?>
                    <option value="<?=$nome_docente?>">
                        <?= $materia?>
                    </option>
                <?php endforeach;?>
            </select>
            <label for="corsi"></label>
            <select name="corsi[<?= $i?>]" id="corsi">
                <?php foreach ($corsi as $item => $nome_esteso):?>
                    <!-- viene mandato solo questo -->
                    <option value="<?=$item?>">
                        <?= $nome_esteso?>
                    </option>
                <?php endforeach;?>
            </select>
        </div>

        <?php endfor;?>
        <button type="submit">Invia i dati</button>
    </form>
</body>
</html>

<?php
    /*
    _POST = Variabile "super global", È un array associativo che
    contiene i dati inseriti nel form se si usa il metodo "POST".
    Per ottenere una determinata variabile da questo bisogna specificare
    nelle parentesi quadre l'attributo "name" del tag
    */
    $nome = $_POST["nome"] ?? "";
    $cognome = $_POST["cognome"] ?? "";
    $email = $_POST["email"] ?? "";
    $pass = $_POST["password"] ?? "";
    $eta = $_POST["eta"] ?? "";
    $sesso = $_POST["sesso"] ?? "";
    $corsi = $_POST["corsi"] ?? "";
    $citta = $_POST["citta"] ?? "";
    $lingua = $_POST["lingua"] ?? "";
    $area = $_POST["area"] ?? ""
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
<p>Nome: <?= $nome?></p>
<p>Cognome: <?= $cognome?></p>
<p>Email: <?= $email?></p>
<p>Password: <?= $pass?></p>
<p>Età: <?= $eta?></p>
<p>Sesso: <?= $sesso?></p>
    <p>Corsi: <?php foreach ($corsi as $corso):?> <?= htmlspecialchars($corso) ?>
        <?php endforeach; ?>></p> <!--Da correggere-->
<p>Città: <?= $citta?></p>
<p>Lingua: </p>
<?php foreach ($lingua as $sel){?>
    <p><?= ($sel)?></p>
<?php }?>
<p>Area: <?= $area?></p>
</body>
</html>

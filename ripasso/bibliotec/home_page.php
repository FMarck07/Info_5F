<?php
$data = date("Y-m-d h:i:s");
$data2 = new DateTime();
$data2 -> modify("+2 days");
$data_form = $data2 -> format("Y-m-d h:i:s");
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
    <?= $data_form?>
    <br>
    <?= $data?>
    <br>
    <a href="inseriscidati.php">link</a>
</body>
</html>
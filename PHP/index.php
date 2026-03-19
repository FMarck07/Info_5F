<?php

/*Istruzioni per l'HTML (in basso):
Crea un form che invia i dati tramite il metodo POST alla stessa pagina
in cui ti trovi (quindi lascia action="" vuoto).
Il form deve avere:

Un input di testo per il Nome del cliente.

Un input numerico per la Quantità di pizze (minimo 1).

Un bottone di tipo submit per inviare l'ordine.*/

$tipi = [
    ["nome" => "pizza", "prezzo" => "10"],
    ["nome" => "panino", "prezzo" => "8"],
    ["nome" => "piadina", "prezzo" => "7"],
];
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
    <form action="input_ricevuto.php" method="POST">
        <label for="nome">Inserisci il nome</label>
        <input type="text" id = "nome" name = "nome_cliente"><br>

        <label for="numero">Inserisci il numero di ordinazioni</label>
        <input type="number" id = "numero" name = "numero_ordinazioni"><br>

        <label for="scelta">Cosa vuoi mangiare?</label><br>
        <select name="scelta" id="scelta">
            <?php foreach ($tipi as $piatto):?>
                <option value="<?=$piatto['nome']?>"><?=$piatto['nome']?> - <?= $piatto['prezzo']?>€</option>
            <?php endforeach;?>
        </select><br><br>

        </select><br><br>

    <button type = "submit">Invia ordine</button>
    </form>
</body>
</html>




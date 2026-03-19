<?php
// 1. ECCO IL SEGRETO: Strutturo l'array come se fosse una tabella del Database!
// Ora le parole 'Pilota' e 'Punteggio' ESISTONO come chiavi.
$classifica = [
    [ 'Pilota' => 'Hamilton',   'Punteggio' => 25 ],
    [ 'Pilota' => 'Verstappen', 'Punteggio' => 18 ],
    [ 'Pilota' => 'Leclerc',    'Punteggio' => 30 ],
    [ 'Pilota' => 'Sainz',      'Punteggio' => 15 ]
];

// Esempio: voglio eliminare il pilota all'indice 3 (Sainz)
unset($classifica[3]);
?>

<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Tabella Dinamica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!--<table>

    <tr>
        <?php
        // Prendo le chiavi ('Pilota', 'Punteggio') dal primissimo elemento dell'array (indice 0)
        $intestazioni = array_keys($classifica[0]);

        foreach ($intestazioni as $titolo):
            ?>
            <th><?= $titolo ?></th>
        <?php endforeach; ?>
    </tr>

    <?php foreach ($classifica as $riga): ?>
        <tr>
            <?php foreach ($riga as $valori):?>
                <td><?= $valori ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>

</table>!-->

<form action="gianni.php" method="post">
    <label for="nome">Inserisci il tuo nome:</label>
    <input type = "text" id = "nome" name ="nome_pilota" required><br>
    <label for = "punteggio"> Inserisci il tuo punteggio:</label>
    <input type = "number" id = "punteggio" name = "punteggio_pilota" required><br>
    <button type = "submit">Inscrivi Pilota</button>
</form>


</body>
</html>
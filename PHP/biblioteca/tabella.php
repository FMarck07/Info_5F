<?php
// 1. Creo il mio array vuoto
$nuovo_utente = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 2. Catturo i campi di testo e le date (dati singoli)
    // Uso trim() per pulire eventuali spazi vuoti accidentali
    $nuovo_utente["nome"] = trim($_POST["nome"] ?? "");
    $nuovo_utente["cognome"] = trim($_POST["cognome"] ?? "");
    $nuovo_utente["data_iscrizione"] = $_POST["data_iscrizione"] ?? "";

    // 3. Catturo il Select singolo
    $nuovo_utente["sede"] = $_POST["sede_biblioteca"] ?? "";

    $nuovo_utente["numero_tessera"] = count($nuovo_utente) + 1;

    // 4. Catturo il Checkbox singolo (Sì/No)
    // Se la casella è spuntata ricevo "Si", altrimenti metto "No" di default
    $nuovo_utente["newsletter"] = $_POST["iscrizione_news"] ?? "No";

    // 5. Catturo le scelte multiple (Checkbox multipli e Select multiple)
    // Siccome mi aspetto di ricevere un ARRAY, se non ricevo nulla imposto un array vuoto []
    $nuovo_utente["generi_preferiti"] = $_POST["generi_preferiti"] ?? [];
    $nuovo_utente["lingue"] = $_POST["lingue_scelte"] ?? [];
}
?>

<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Dati Ricevuti</title>
</head>
<body>
<h2>Riepilogo Dati Utente</h2>
    <table>
        <tr>
            <?php foreach (array_keys($nuovo_utente) as $items):?>
                <th><?= $items ?></th>
            <?php endforeach;?>
        </tr>
        <tr>
            <?php foreach ($nuovo_utente as $items):?>
                <?php if(is_array($items)):?>
                    <?php if(empty($items)):?>
                        <td>Nessun valore selezionato</td>
                    <?php else:?>
                        <td><?= implode(",", $items)?></td>
                    <?php endif;?>
                <?php else:?>
                    <td><?=$items?></td>
                <?php endif;?>

            <?php endforeach;?>
        </tr>
    </table>

</body>
</html>
<?php
// Se non arrivano dati in POST, blocco tutto
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    die("Errore: Nessun dato ricevuto.");
}

// 1. Array associativo: Titolo => Prezzo
$listino_prezzi = [
    "Il Signore degli Anelli" => 25.50,
    "1984" => 12.00,
    "Harry Potter" => 18.00,
    "Il Nome della Rosa" => 15.00
];

// 2. Ricezione e Pulizia dati
// Nome e cognome in MAIUSCOLO (come richiesto)
$nome = strtoupper(trim($_POST["nome"] ?? ""));
$cognome = strtoupper(trim($_POST["cognome"] ?? ""));
$titolo_scelto = $_POST["libro_scelto"] ?? "";
$quantita = (int)($_POST["quantita"] ?? 1);

// 3. Il trucco del null coalescing (??) per il codice promozionale
// Nota: un input testo vuoto invia "", non null. Per farlo funzionare con ??
// usiamo un piccolo trucco combinato con empty() per accontentare il prof.
$codice_inserito = !empty($_POST["codice_promozionale"]) ? $_POST["codice_promozionale"] : null;
$codice_promo = $codice_inserito ?? "Nessuno";

// Trovo il prezzo unitario dal mio array associativo
$prezzo_unitario = $listino_prezzi[$titolo_scelto];
$totale_pieno = $prezzo_unitario * $quantita;

// 4. Operatore Ternario per lo sconto
// CONDIZIONE ? VERO (sconto 20%, cioè moltiplico per 0.8) : FALSO (totale normale)
$totale_finale = ($codice_promo === "LIBRO20") ? ($totale_pieno * 0.8) : $totale_pieno;

// 5. Valutazione con l'operatore Spaceship (<=>)
// Questo operatore restituisce: -1 se minore, 0 se uguale, 1 se maggiore!
$risultato_spaceship = $totale_finale <=> 10;

if ($risultato_spaceship === -1) {
    $valutazione = "Acquisto leggero";
} elseif ($risultato_spaceship === 0) {
    $valutazione = "Esatto";
} else {
    $valutazione = "Acquisto importante";
}
?>

<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Scontrino</title>
    <style>table, th, td { border: 1px solid black; border-collapse: collapse; padding: 8px; }</style>
</head>
<body>
<h2>Riepilogo Ordine</h2>

<table>
    <tr>
        <th>Nome</th>
        <th>Cognome</th>
        <th>Titolo Scelto</th>
        <th>Prezzo Unitario</th>
        <th>Quantità</th>
        <th>Codice Promo</th>
        <th>TOTALE DA PAGARE</th>
        <th>Valutazione</th>
    </tr>
    <tr>
        <td><?= $nome ?></td>
        <td><?= $cognome ?></td>
        <td><?= $titolo_scelto ?></td>
        <td>€ <?= number_format($prezzo_unitario, 2) ?></td>
        <td><?= $quantita ?></td>
        <td><?= $codice_promo ?></td>
        <td><strong>€ <?= number_format($totale_finale, 2) ?></strong></td>
        <td><em><?= $valutazione ?></em></td>
    </tr>
</table>

<br><hr><br>

<h2>Listino Completo dei Libri</h2>
<ul>
    <?php
    $titoli = array_keys($listino_prezzi);
    $prezzi = array_values($listino_prezzi);

    // Faccio un ciclo contando quanti elementi ci sono
    for ($i = 0; $i < count($titoli); $i++): ?>
        <li>
            <strong><?= $titoli[$i] ?></strong>: € <?= number_format($prezzi[$i], 2) ?>
        </li>
    <?php endfor; ?>
</ul>

</body>
</html>
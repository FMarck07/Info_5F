<?php
$num = 10;

if ($num > 0) {
    // 1. Dico al browser che c'è un errore (per lo screenshot della Rete)
    http_response_code(400);

    // 2. Creo la variabile col messaggio
    $message = "Errore: Numero negativo non consentito!";

    // 3. Includo la grafica della pagina di errore
    include "../es/error.php";

    // 4. FERMO L'ESECUZIONE! (Importantissimo)
    exit;
}
?>
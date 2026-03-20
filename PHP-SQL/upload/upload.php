<?php
// metto i file nel filesystem perchè sovracaricherei troppo il database
// 1. Configurazione
$allowed = ['jpg', 'png', 'pdf']; // Sicurezza: NO php
$maxSize = 2 * 1024 * 1024; // 2MB
$msg = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Controllo se il file è arrivato (usiamo 'carica' come nel form)
    if (isset($_FILES['carica']) && $_FILES['carica']['error'] === UPLOAD_ERR_OK) {

        $tmpPath = $_FILES['carica']['tmp_name'];
        $originalName = basename($_FILES['carica']['name']);
        $username = preg_replace("/[^a-zA-Z0-9]/", "", $_POST['nome']); // Pulizia nome

        $ext = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));

        // Validazione
        if (!in_array($ext, $allowed)) {
            $msg = "Errore: Estensione .$ext non permessa.";
        } elseif ($_FILES['carica']['size'] > $maxSize) {
            $msg = "Errore: Il file supera i 2MB.";
        } else {
            // Creazione cartella
            $userDir = "upload/" . $username;
            if (!is_dir($userDir)) {
                mkdir($userDir, 0755);
            }

            $destination = $userDir . "/" . $originalName;

            // Spostamento finale
            if (move_uploaded_file($tmpPath, $destination)) {
                $msg = "Ottimo! File caricato in: " . $destination;
            } else {
                $msg = "Errore tecnico nello spostamento del file.";
            }
        }
    } else {
        $msg = "Nessun file selezionato o errore di sistema.";
    }
}
include 'message.php';
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Pagina 3: Riepilogo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Fase 3: Tabella Finale</h1>

        <?php
        // Recupero l'array multidimensionale inviato da pagina 2
        $datiRicevuti = isset($_POST['dati']) ? $_POST['dati'] : [];
        
        $righeTabella = [];
        $controlloDuplicati = []; // Array di appoggio per verificare l'univocità

        // Elaborazione Logica
        if (!empty($datiRicevuti)) {
            foreach ($datiRicevuti as $blocco) {
                // Recupero materia e array docenti per ogni blocco
                $materia = $blocco['materia'];
                $docenti = isset($blocco['docenti']) ? $blocco['docenti'] : [];

                foreach ($docenti as $docente) {
                    // Creiamo una "impronta digitale" unica per questa coppia
                    $chiaveUnivoca = $docente . "-" . $materia;

                    // Se NON abbiamo già incontrato questa coppia, la aggiungiamo
                    if (!in_array($chiaveUnivoca, $controlloDuplicati)) {
                        
                        // Segno che ora questa coppia esiste
                        $controlloDuplicati[] = $chiaveUnivoca;
                        
                        // Aggiungo alla lista da stampare
                        $righeTabella[] = [
                            'docente' => $docente,
                            'corso'   => $materia
                        ];
                    }
                }
            }
        }
        ?>

        <?php if (count($righeTabella) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Nome Cognome Docente</th>
                        <th>Corso</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($righeTabella as $riga): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($riga['docente']); ?></td>
                            <td><?php echo htmlspecialchars($riga['corso']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p style="color: red;">Nessun dato valido ricevuto. Torna indietro e riprova.</p>
        <?php endif; ?>

        <br><br>
        <a href="pagina1.php">
            <button class="btn-reset">Ricomincia</button>
        </a>
    </div>
</body>
</html>
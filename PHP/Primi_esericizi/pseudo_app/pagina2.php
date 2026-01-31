<?php
// Dati statici (Arrays)
$listaCorsi = [
    "Sistemi e reti", "Robotica", "Contabilità", "Meccatronica", "Chimica",
    "Statistica", "Matematica", "Informatica", "Marketing", "Economia Politica"
];

$listaDocenti = [
    "Rossi Mario", "Bianchi Luigi", "Verdi Anna", 
    "Neri Giulia", "Esposito Antonio", "Ferrari Laura", 
    "Romano Francesco", "Colombo Sofia"
];

// Recupero il numero inviato da pagina 1
// Se non c'è (accesso diretto), imposto default a 1
$numCorsi = isset($_POST['num_corsi']) ? (int)$_POST['num_corsi'] : 1;

// Controllo lato server dei limiti
if ($numCorsi < 1) $numCorsi = 1;
if ($numCorsi > 10) $numCorsi = 10;
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Pagina 2: Selezione Dettagli</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Fase 2: Assegnazione Docenti</h1>
        <p>Inserisci i dati per i <strong><?php echo $numCorsi; ?></strong> corsi richiesti.</p>

        <form action="pagina3.php" method="POST">
            
            <?php for($i = 0; $i < $numCorsi; $i++): ?>
                <div class="sezione-corso">
                    <h3>Sezione Corso #<?php echo ($i + 1); ?></h3>
                    
                    <div class="form-group">
                        <label>Materia:</label>
                        <select name="dati[<?php echo $i; ?>][materia]" required>
                            <option value="" disabled selected>-- Scegli materia --</option>
                            <?php foreach($listaCorsi as $corso): ?>
                                <option value="<?php echo $corso; ?>"><?php echo $corso; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Docenti:</label>
                        <select name="dati[<?php echo $i; ?>][docenti][]" multiple size="5" required>
                            <?php foreach($listaDocenti as $docente): ?>
                                <option value="<?php echo $docente; ?>"><?php echo $docente; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <span class="hint">Usa Ctrl (o Cmd) per selezionare più docenti.</span>
                    </div>
                </div>
            <?php endfor; ?>

            <button type="submit" class="btn-primary">Invia a Pagina 3 &raquo;</button>
        </form>
    </div>
</body>
</html>
<?php
require_once 'DatabaseConn.php';
$dbconfig = require 'configuration/DBconfiguration.php';
require_once 'function/funzioni_db.php';

$db = DatabaseConn::getDB($dbconfig);
if(is_null($db)) exit("Errore database");

// Gestione Form
if (isset($_POST['btn_gara'])) {
    try {
        inserisciGara($db, $_POST['circuito'], $_POST['data_gara']);
        $msg_gara = "<b class='msg-ok'>Gara inserita!</b><br>";
    } catch (PDOException $e) {
        $msg_gara = "<b class='msg-err'>Errore: " . $e->getMessage() . "</b><br>";
    }
}

if (isset($_POST['btn_risultato'])) {
    try {
        $giro_veloce = isset($_POST['giro']) ? 1 : 0;
        inserisciRisultato($db, $_POST['id_gara'], $_POST['id_pilota'], $_POST['posizione'], $_POST['punti'], $giro_veloce);
        $msg_risultato = "<b class='msg-ok'>Risultato salvato!</b><br>";
    } catch (PDOException $e) {
        $msg_risultato = "<b class='msg-err'>Errore: " . $e->getMessage() . "</b><br>";
    }
}

// INIZIO PAGINA HTML
require_once 'header.php';
?>

    <h2>1. Crea Nuova Gara</h2>
<?php if(isset($msg_gara)) echo $msg_gara; ?>
    <form action="gare.php" method="POST">
        Circuito: <input type="text" name="circuito" required><br>
        Data: <input type="date" name="data_gara" required><br>
        <button type="submit" name="btn_gara">Crea Gara</button>
    </form>

    <hr>

    <h2>2. Inserisci Risultato Pilota</h2>
<?php if(isset($msg_risultato)) echo $msg_risultato; ?>
    <form action="gare.php" method="POST">
        Gara:
        <select name="id_gara" required>
            <?php
            $stmt_gare = getGare($db);
            while($gara = $stmt_gare->fetch()) {
                echo "<option value='" . $gara->ID_Gara . "'>" . $gara->Nome_Circuito . "</option>";
            }
            ?>
        </select><br>

        Pilota:
        <select name="id_pilota" required>
            <?php
            $stmt_piloti = getPiloti($db);
            while($pilota = $stmt_piloti->fetch()) {
                echo "<option value='" . $pilota->ID_Pilota . "'>" . $pilota->Nome . " " . $pilota->Cognome . "</option>";
            }
            ?>
        </select><br>

        Posizione Arrivo: <input type="number" name="posizione" required><br>
        Punti Ottenuti: <input type="number" name="punti" required><br>
        <input type="checkbox" name="giro" value="1"> Ha fatto il Giro Veloce?<br><br>

        <button type="submit" name="btn_risultato">Salva Risultato</button>
    </form>

    <hr>

    <h2>3. Vedi Ordine di Arrivo di una Gara</h2>
    <form action="gare.php" method="GET">
        Scegli Gara:
        <select name="id_gara_cerca" required>
            <?php
            $stmt_gare2 = getGare($db);
            while($gara = $stmt_gare2->fetch()) {
                echo "<option value='" . $gara->ID_Gara . "'>" . $gara->Nome_Circuito . "</option>";
            }
            ?>
        </select>
        <button type="submit">Mostra Risultati</button>
    </form>

<?php
if (isset($_GET['id_gara_cerca'])) {
    $id_cercato = (int)$_GET['id_gara_cerca'];
    $stmt_risultati = getRisultatiGara($db, $id_cercato);

    echo "<table>";
    echo "<tr><th>Posizione</th><th>Pilota</th><th>Punti</th><th>Giro Veloce</th></tr>";

    while($riga = $stmt_risultati->fetch()) {
        echo "<tr>";
        echo "<td>" . $riga->Posizione_Arrivo . "</td>";
        echo "<td>" . $riga->Nome . " " . $riga->Cognome . "</td>";
        echo "<td>" . $riga->Punti_Ottenuti . "</td>";
        echo "<td>" . ($riga->Giro_Veloce ? "Sì" : "No") . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}

// FINE PAGINA HTML
require_once 'footer.php';
?>
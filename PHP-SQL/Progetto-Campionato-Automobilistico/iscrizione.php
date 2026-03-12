<?php
require_once 'DatabaseConn.php';
$dbconfig = require 'configuration/DBconfiguration.php';
require_once 'function/funzioni_db.php';

$db = DatabaseConn::getDB($dbconfig);
if(is_null($db)) exit("Errore database");

// Gestione Form
if (isset($_POST['btn_casa'])) {
    try {
        inserisciCasa($db, $_POST['nome_casa'], $_POST['colore']);
        $msg_casa = "<b class='msg-ok'>Scuderia inserita!</b><br>";
    } catch (PDOException $e) {
        $msg_casa = "<b class='msg-err'>Errore: " . $e->getMessage() . "</b><br>";
    }
}

if (isset($_POST['btn_pilota'])) {
    try {
        inserisciPilota($db, $_POST['nome'], $_POST['cognome'], $_POST['nazione'], $_POST['numero'], $_POST['id_casa']);
        $msg_pilota = "<b class='msg-ok'>Pilota inserito!</b><br>";
    } catch (PDOException $e) {
        $msg_pilota = "<b class='msg-err'>Errore: " . $e->getMessage() . "</b><br>";
    }
}

// INIZIO PAGINA HTML
require_once 'header.php';
?>

    <h2>1. Inserisci Scuderia</h2>
<?php if(isset($msg_casa)) echo $msg_casa; ?>
    <form action="iscrizione.php" method="POST">
        Nome Scuderia: <input type="text" name="nome_casa" required><br>
        Colore Livrea: <input type="text" name="colore" required><br>
        <button type="submit" name="btn_casa">Salva Scuderia</button>
    </form>

    <hr>

    <h2>2. Inserisci Pilota</h2>
<?php if(isset($msg_pilota)) echo $msg_pilota; ?>
    <form action="iscrizione.php" method="POST">
        Nome: <input type="text" name="nome" required><br>
        Cognome: <input type="text" name="cognome" required><br>
        Nazionalità: <input type="text" name="nazione" required><br>
        Numero Gara: <input type="number" name="numero" required><br>

        Scegli Scuderia:
        <select name="id_casa" required>
            <?php
            $stmt_case = getCaseAutomobilistiche($db);
            while($casa = $stmt_case->fetch()) {
                echo "<option value='" . $casa->ID_Casa . "'>" . $casa->Nome . "</option>";
            }
            ?>
        </select><br><br>
        <button type="submit" name="btn_pilota">Salva Pilota</button>
    </form>

<?php
// FINE PAGINA HTML
require_once 'footer.php';
?>
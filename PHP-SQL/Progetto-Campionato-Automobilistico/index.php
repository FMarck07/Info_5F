<?php
require_once 'DatabaseConn.php';
$dbconfig = require 'configuration/DBconfiguration.php';
require_once 'function/funzioni_db.php';

$db = DatabaseConn::getDB($dbconfig);
if(is_null($db)) exit("Errore database");

// Richiamo l'header (HTML + Menu)
require_once 'header.php';
?>

    <h1>Classifiche</h1>

    <h2>Classifica Piloti</h2>
    <table>
        <tr><th>Pilota</th><th>Team</th><th>Punti</th></tr>
        <?php
        $stmt_piloti = getClassificaPiloti($db);
        while($riga = $stmt_piloti->fetch()) {
            echo "<tr>";
            echo "<td>" . $riga->Nome . " " . $riga->Cognome . "</td>";
            echo "<td>" . $riga->Team . "</td>";
            echo "<td>" . $riga->Punti . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <h2>Classifica Squadre</h2>
    <table>
        <tr><th>Squadra</th><th>Colore Livrea</th><th>Punti Totali</th></tr>
        <?php
        $stmt_squadre = getClassificaSquadre($db);
        while($riga = $stmt_squadre->fetch()) {
            echo "<tr>";
            echo "<td>" . $riga->Team . "</td>";
            echo "<td>" . $riga->Colore_Livrea . "</td>";
            echo "<td>" . $riga->Punti . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

<?php
// Richiamo il footer per chiudere la pagina
require_once 'footer.php';
?>
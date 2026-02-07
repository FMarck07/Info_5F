<?php
// Connessione al database con PDO
try {
    $db = new PDO(
        'mysql:host=192.168.60.144;dbname=francesco_marchetto_scuolaDemo;charset=utf8mb4',
        'francesco_marchetto',
        'orlasti.alleavate.',
        [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]
    );
} catch (PDOException $e) {
    die("Errore di connessione al DB");
}

// QUERY PRINCIPALE (tutti gli studenti)
$queryAll = "SELECT * FROM studenti";
$stmtAll = $db->prepare($queryAll);
$stmtAll->execute();

// QUERY SELEZIONE + PROIEZIONE
$querySelect = "SELECT nome, media FROM studenti WHERE media >= :media";
$stmtSelect = $db->prepare($querySelect);
$stmtSelect->bindValue(':media', 8, PDO::PARAM_STR);
$stmtSelect->execute();
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Gestione Studenti</title>
</head>
<body>

<h2>Elenco completo studenti</h2>

<table>
    <tr>
        <th>Nome</th>
        <th>Cognome</th>
        <th>Media</th>
        <th>Classe</th>
        <th>Data iscrizione</th>
    </tr>

    <?php while ($s = $stmtAll->fetch()): ?>
        <tr>
            <td><?= $s->nome ?></td>
            <td><?= $s->cognome ?></td>
            <td><?= $s->media ?></td>
            <td><?= $s->classe ?></td>
            <td><?= $s->data_iscrizione ?></td>
        </tr>
    <?php endwhile; ?>
</table>

<h2>Studenti con media ≥ 8 (selezione + proiezione)</h2>

<?php while ($s = $stmtSelect->fetch()): ?>
    <?= $s->nome ?> — Media: <?= $s->media ?><br>
<?php endwhile; ?>

</body>
</html>

<?php

// --- LETTURA DATI (Restituiscono lo $stmt per fare il while) ---

function getClassificaPiloti($db) {
    $query = 'SELECT Pilota.Nome, Pilota.Cognome, CasaAutomobilistica.Nome AS Team, SUM(Risultato.Punti_Ottenuti) AS Punti 
              FROM Pilota 
              INNER JOIN Risultato ON Pilota.ID_Pilota = Risultato.ID_Pilota 
              INNER JOIN CasaAutomobilistica ON Pilota.ID_Casa = CasaAutomobilistica.ID_Casa 
              GROUP BY Pilota.ID_Pilota 
              ORDER BY Punti DESC';
    $stmt = $db->prepare($query);
    $stmt->execute();
    return $stmt;
}

function getClassificaSquadre($db) {
    $query = 'SELECT CasaAutomobilistica.Nome AS Team, CasaAutomobilistica.Colore_Livrea, SUM(Risultato.Punti_Ottenuti) AS Punti 
              FROM CasaAutomobilistica 
              INNER JOIN Pilota ON CasaAutomobilistica.ID_Casa = Pilota.ID_Casa 
              INNER JOIN Risultato ON Pilota.ID_Pilota = Risultato.ID_Pilota 
              GROUP BY CasaAutomobilistica.ID_Casa 
              ORDER BY Punti DESC';
    $stmt = $db->prepare($query);
    $stmt->execute();
    return $stmt;
}

function getCaseAutomobilistiche($db) {
    $stmt = $db->prepare('SELECT ID_Casa, Nome FROM CasaAutomobilistica');
    $stmt->execute();
    return $stmt;
}

function getPiloti($db) {
    $stmt = $db->prepare('SELECT ID_Pilota, Nome, Cognome FROM Pilota');
    $stmt->execute();
    return $stmt;
}

function getGare($db) {
    $stmt = $db->prepare('SELECT ID_Gara, Nome_Circuito FROM Gara');
    $stmt->execute();
    return $stmt;
}

// ECCO LA QUERY CHE MANCAVA SPOSTATA QUI:
function getRisultatiGara($db, $id_gara) {
    $query = 'SELECT Pilota.Nome, Pilota.Cognome, Risultato.Posizione_Arrivo, Risultato.Punti_Ottenuti, Risultato.Giro_Veloce 
              FROM Risultato 
              INNER JOIN Pilota ON Risultato.ID_Pilota = Pilota.ID_Pilota 
              WHERE Risultato.ID_Gara = :id_gara 
              ORDER BY Risultato.Posizione_Arrivo ASC';
    $stmt = $db->prepare($query);
    $stmt->bindValue(':id_gara', $id_gara, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt;
}

// --- INSERIMENTO DATI ---

function inserisciCasa($db, $nome, $colore) {
    $query = 'INSERT INTO CasaAutomobilistica (Nome, Colore_Livrea) VALUES (:nome, :colore)';
    $stmt = $db->prepare($query);
    $stmt->bindValue(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindValue(':colore', $colore, PDO::PARAM_STR);
    $stmt->execute();
}

function inserisciPilota($db, $nome, $cognome, $nazione, $numero, $id_casa) {
    $query = 'INSERT INTO Pilota (Nome, Cognome, Nazionalita, Numero_Gara, ID_Casa) 
              VALUES (:nome, :cognome, :nazione, :numero, :id_casa)';
    $stmt = $db->prepare($query);
    $stmt->bindValue(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindValue(':cognome', $cognome, PDO::PARAM_STR);
    $stmt->bindValue(':nazione', $nazione, PDO::PARAM_STR);
    $stmt->bindValue(':numero', (int)$numero, PDO::PARAM_INT);
    $stmt->bindValue(':id_casa', (int)$id_casa, PDO::PARAM_INT);
    $stmt->execute();
}

function inserisciGara($db, $circuito, $data) {
    $query = 'INSERT INTO Gara (Nome_Circuito, Data_Gara) VALUES (:circuito, :data)';
    $stmt = $db->prepare($query);
    $stmt->bindValue(':circuito', $circuito, PDO::PARAM_STR);
    $stmt->bindValue(':data', $data, PDO::PARAM_STR);
    $stmt->execute();
}

function inserisciRisultato($db, $id_gara, $id_pilota, $posizione, $punti, $giro) {
    $query = 'INSERT INTO Risultato (ID_Gara, ID_Pilota, Posizione_Arrivo, Punti_Ottenuti, Giro_Veloce) 
              VALUES (:id_gara, :id_pilota, :pos, :punti, :giro)';
    $stmt = $db->prepare($query);
    $stmt->bindValue(':id_gara', (int)$id_gara, PDO::PARAM_INT);
    $stmt->bindValue(':id_pilota', (int)$id_pilota, PDO::PARAM_INT);
    $stmt->bindValue(':pos', (int)$posizione, PDO::PARAM_INT);
    $stmt->bindValue(':punti', (int)$punti, PDO::PARAM_INT);
    $stmt->bindValue(':giro', (int)$giro, PDO::PARAM_INT);
    $stmt->execute();
}
?>
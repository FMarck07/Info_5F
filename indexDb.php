<?php
//dsn = data source name, nome driver per noi mysql --- username= root di default --- password = non abbiamo nulla -- si possono poi aggiungere
//delle opzioni di configurazione []: ---> PDO:: (andiamo a prendere una costante per sollerare un errore) ASSEGNAMO QUINDI UN ARRAY CHIAVE VALORE.
//PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ ---------> TUTTE LE TRUPLE VOGLIO TRATTARLE COME UN OGETTO
$db = new PDO('mysql:host=localhost;dbname=itis', 'root', '', [PDO:: ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]); //pdo serve per il collegamento con il database è un ogetto

//var_dump($db); //Andiamo a vedere cosa è presente in $db
//echo  $db->getAttribute(PDO::ATTR_DRIVER_NAME);

//FACCIAMO UNA READ
/**/

 $query = 'SELECT * FROM studenti'; //stringa
try{

    $stm = $db->prepare($query); //metodo di preparazione della quesry
    //Una volta preparata la query eseguila

    $stm->execute();
    while($studente = $stm -> fetch()){ //mi raccogli una tupla alla volta finche non hai finito
        //come la tratto quella tupla posso deciderlo io, posso trattarla come un ogetto i quali attributi sono i valori della tupla
        echo 'Matricola: '.$studente->matricola_studente.'<br>';
        echo 'Nome: '.$studente->nome.'<br>';
        echo 'Cognome: '.$studente->cognome.'<br>';
        echo 'Media: '.$studente->media.'<br>';
        echo 'Data Iscrizione:'.$studente->data_iscrizione.'<br>';
        echo '<hr>';
    }
    //Facciamo la chiusura
    $stm->closeCursor();

}catch (Exception $e){
    //echo $e->getMessage();
    //directory log, questo comandi ci permetti di far vedere all'utente un errore generico e nello specifico in una directory viene dalvato il codice errore
    logError($e); //richiamiamo l afunzione logError fatta di seguito
}

/*function logError(Exception $e){
    error_log($e-> getMessage().'---'.date('Y-m-d H:i:s'. "\n"),3,'log/database_log'); //directory log, questo c
    echo 'A DB error occurred. Please try again';
}*/


//READ

/*$query = 'SELECT media,cognome FROM studenti where nome=:name'; //stringa
try{

    $stm = $db->prepare($query); //metodo di preparazione della query
    $stm->bindValue(':name', 'Antonella');

    $stm->execute();
    while($studente = $stm -> fetch()){ //mi raccogli una tupla alla volta finche non hai finito
        //come la tratto quella tupla posso deciderlo io, posso trattarla come un ogetto i quali attributi sono i valori della tupla
        echo 'Cognome: '.$studente->cognome.'<br>';
        echo 'Media: '.$studente->media.'<br>';
        echo '<hr>';
    }
    //Facciamo la chiusura
    $stm->closeCursor();

}catch (Exception $e){
    //echo $e->getMessage();
    //directory log, questo comandi ci permetti di far vedere all'utente un errore generico e nello specifico in una directory viene dalvato il codice errore
    logError($e); //richiamiamo l afunzione logError fatta di seguito
}

function logError(Exception $e){
    error_log($e-> getMessage().'---'.date('Y-m-d H:i:s'. "\n"),3,'log/database_log'); //directory log, questo c
    echo 'A DB error occurred. Please try again';
}
*/

//CREATE
/*
$query = 'INSERT INTO studenti(matricola_studente,nome,cognome,media,data_iscrizione) values(:matricola_studente,:nome,:cognome,:media,NOW())';
try{
    $stm = $db->prepare($query);
    $stm ->bindValue(':matricola_studente', '00010');
    $stm ->bindValue(':nome', 'Lucy');
    $stm ->bindValue(':cognome', 'Taylor');
    $stm ->bindValue(':media', 8);
    if($stm->execute())
        $stm->closeCursor();
    else
        throw new PDOException('Errore nella query');

}catch (Exception $e){
    logError($e); //richiamiamo l afunzione logError fatta di seguito
}




function logError(Exception $e){
    error_log($e-> getMessage().'---'.date('Y-m-d H:i:s'. "\n"),3,'log/database_log'); //directory log, questo c
    echo 'A DB error occurred. Please try again';
}*/

//UPDATE
/*
$query = 'UPDATE studenti SET media=:media WHERE nome=:nome';
try{
    $stm = $db->prepare($query);
    $stm ->bindValue(':nome', 'Lucy');
    $stm ->bindValue(':media', 10);
    if($stm->execute())
        $stm->closeCursor();
    else
        throw new PDOException('Errore nella query');

}catch (Exception $e){
    logError($e); //richiamiamo l afunzione logError fatta di seguito
}
*/


//DELETE
/*
$query = 'DELETE FROM studenti WHERE nome=:nome';
try{
    $stm = $db->prepare($query);
    $stm ->bindValue(':nome', 'Lucy');
    $stm->execute()
    $stm->closeCursor();

}catch (Exception $e){
    logError($e); //richiamiamo l afunzione logError fatta di seguito
}
*/

function logError(Exception $e){
    error_log($e-> getMessage().'---'.date('Y-m-d H:i:s'. "\n"),3,'log/database_log'); //directory log, questo c
    echo 'A DB error occurred. Please try again';
}




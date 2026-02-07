<?php
require 'DatabaseConn.php';
$dbconfig = require 'configuration/DBconfiguration.php';
$db = DatabaseConn::getDB($dbconfig);


/*
$studentename = 'Marco';
// mettere antonio qui al posto di :name è sbagliato
$query = 'SELECT media, cognome FROM studenti where nome = :name';

try{
    $stmt = $db -> prepare($query);
    $stmt -> bindValue(':name', $studentename, PDO::PARAM_STR);
    $stmt->execute();
    while($user = $stmt -> fetch()){
        echo "cognome: " . $user->cognome. "<br>";
        echo "media: " . $user->media. "<br>";
        echo "<br>";
    }
    $stmt->closeCursor();
}catch (PDOException $e){
    echo "A DB error occured";
}*/



// CREATE

/*$query = 'INSERT INTO studenti(nome, cognome, media,data_iscrizione)
VALUES(:nome,:cognome,:media, NOW())';

try{
    $stmt = $db->prepare($query);
    $stmt -> bindValue(':nome', 'Lucy', PDO::PARAM_STR);
    $stmt -> bindValue(':cognome', 'Taylor', PDO::PARAM_STR);
    $stmt -> bindValue(':media', 8, PDO::PARAM_INT);
    $stmt -> execute();
    echo "Insert successful";
    $stmt -> closeCursor();
}catch (PDOException $e){
    echo "A DB error occured";
};*/

/*
$query = 'SELECT * FROM studenti';

try{
    // preparazione delle query
    $stmt = $db -> prepare($query); // statement preparo la query
    $stmt -> execute(); // poi la eseguo la query

    while($user = $stmt -> fetch()){
        echo "nome: ". $user->nome . "<br>";
        echo "cognome: ". $user->cognome . "<br>";
        echo "media: ". $user->media . "<br>";
        echo "data_iscrizione: ". $user->data_iscrizione . "<br>";
        echo '<hr>';
    }
    $stmt ->closeCursor();
}catch (PDOException $e){
    echo "A DB error occured.";
};
/*
$query = 'UPDATE studenti SET media = :media WHERE nome = :name';

try {
    $stmt = $db->prepare($query);

    $stmt->bindValue(':name', 'Lucy', PDO::PARAM_STR);
    $stmt->bindValue(':media', 8, PDO::PARAM_INT);

    $stmt->execute();

    if ($stmt->rowCount() === 0) {
        echo "No rows were updated";
    } else {
        echo "Update successful!";
    }

    $stmt->closeCursor();

} catch (PDOException $e) {
    echo "A DB error occurred.";
    echo '<br>';
}
*/


// DELETE

$query = 'DELETE FROM studenti WHERE nome = :name';

try {
    $stmt = $db->prepare($query);

    $stmt->bindValue(':name', 'Lucy', PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->rowCount() === 0) {
        echo "Nessuna riga eliminata";
    } else {
        echo "Cancellazione avvenuta con successo!";
        $stmt->closeCursor();
    }



} catch (PDOException $e) {
    echo "A DB error occurred.";
}
echo '<br>';
echo '<br>';
// READ
$query = 'SELECT * FROM studenti';

try{
    // preparazione delle query
    $stmt = $db -> prepare($query); // statement preparo la query
    $stmt -> execute(); // poi la eseguo la query

    while($user = $stmt -> fetch()){
        echo "nome: ". $user->nome . "<br>";
        echo "cognome: ". $user->cognome . "<br>";
        echo "media: ". $user->media . "<br>";
        echo "data_iscrizione: ". $user->data_iscrizione . "<br>";
        echo '<hr>';
    }
    $stmt ->closeCursor();
}catch (PDOException $e){
    echo "A DB error occured.";
}

<?php
// usiamo classe PDO per connetterci alle tabelle
$db = new PDO(
    // dns = data source
    'mysql:host=192.168.60.144;dbname=francesco_marchetto_itis;charset=utf8mb4',
    'francesco_marchetto',
    'orlasti.alleavate.',
    [
        // array associativo come quarto elemento che passo al costruttore di PDO
        // risultati delle query restituite come oggetto
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        // gestisce le eccezioni con un try-catch
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]
);
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
}*/
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


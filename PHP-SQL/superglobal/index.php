<?php
    // Prendiamo i dati inviati tramite POST dal form, usando l'operatore null coalescing '??' per impostare stringhe vuote come valore di default.
    // La funzione trim() serve a rimuovere eventuali spazi bianchi prima e dopo il valore.

    $nome = trim((string)($_POST['nome'] ?? ''));
    $cognome = trim((string)($_POST['cognome'] ?? ''));
    $numero_tessera = $_POST['numero_tessera'] ?? '';
    $data_iscrizione = $_POST['data_iscrizione'] ?? '';
    $password = $_POST['password'] ?? '';

    // Controlliamo che tutte le variabili abbiano un valore non vuoto.
    if ($nome && $cognome && $numero_tessera && $data_iscrizione && $password) {

        // Creiamo un hash sicuro della password usando password_hash con l'algoritmo di default.
        $hash = password_hash($password, PASSWORD_DEFAULT);

        // Creiamo una connessione al database tramite un ipotetico metodo getConnection() della classe DBConn.
        // (Presuppone che questa classe e metodo siano definiti altrove nel progetto).
        $db = DBConn::getConnection();

        // Preparo la query SQL parametrizzata per inserire i dati nella tabella "utenti"
        // Usare query parametrizzate evita attacchi di tipo SQL injection.
        $query = "INSERT INTO utenti (nome, cognome, numero_tessera, data_iscrizione, password) 
                  VALUES (:nome, :cognome, :numero_tessera, :data_iscrizione, :password)";

        // Preparo la query per l'esecuzione
        $stmt = $db->prepare($query);

        // Eseguo la query passando i parametri associativi con i dati degli utenti e l'hash della password.
        $stmt->execute([
            ':nome' => $nome,
            ':cognome' => $cognome,
            ':numero_tessera' => $numero_tessera,
            ':data_iscrizione' => $data_iscrizione,
            ':password' => $hash
        ]);

        // Se vuoi puoi gestire qui un messaggio di successo, redirect, ecc.
        echo "Registrazione completata con successo!";
    } else {
        // Se qualche dato è mancante, puoi gestire un messaggio di errore.
        echo "Errore: compilare tutti i campi.";
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>

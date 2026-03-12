<?php
// Configurazione del database
return [
    'dsn' => 'mysql:host=127.0.0.1;dbname=francesco_marchetto_campionato_automobilistico;charset=utf8mb4',
    'username' => 'root', // Cambia con il tuo utente (es. francesco_marchetto) se necessario
    'password' => '',     // Cambia con la tua password se necessario
    'options' => [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]
];
?>
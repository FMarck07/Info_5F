<?php
// file configurazione del database
// non si fa nel file index ma in un file di configurazione se ho bisogno di cambiare vado qua
// separation of concerns
return [
    // usiamo classe PDO per connetterci alle tabelle

    'dsn' => 'mysql:host=192.168.60.144;dbname=francesco_marchetto_itis;charset=utf8mb4',
    'username' => 'francesco_marchetto',
    'password' => 'orlasti.alleavate.',
    'options' => [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]
];

<?php
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $nome = trim($_GET['nome'] ?? '');
    $cognome = trim($_GET['cognome'] ?? '');
    $numero_tessera = $_GET['numero_tessera'] ?? '';
    $data_iscrizione = $_GET['data_iscrizione'] ?? '';
    $password = $_GET['password'] ?? '';

    echo $nome . '<br>';
    echo $cognome . '<br>';
    echo $numero_tessera . '<br>';
    echo $data_iscrizione . '<br>';
    echo $password . '<br>';
}
?>
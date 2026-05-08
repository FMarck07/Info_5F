<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = trim($_POST['nome'] ?? '');
    $cognome = trim($_POST['cognome'] ?? '');
    $numero_tessera = $_POST['numero_tessera'] ?? '';
    $data_iscrizione = $_POST['data_iscrizione'] ?? '';
    $password = $_POST['password'] ?? '';

    echo $nome . '<br>';
    echo $cognome . '<br>';
    echo $numero_tessera . '<br>';
    echo $data_iscrizione . '<br>';
    echo $password . '<br>';
}
?>
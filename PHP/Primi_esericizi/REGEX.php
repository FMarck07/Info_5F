<?php
//proviamo il regex

$testo = "Ciao mondo254";

echo preg_match("#mondo#", $testo) ? "Pattern" : "Pattern non trovato";
echo '<br>';
echo preg_match("#^Ciao#", $testo) ? "Pattern all'inizio" : "Pattern non trovato";
echo '<br>';
echo preg_match("#Mondo$#", $testo) ? "Pattern alla fine" : "Pattern non trovato";
echo '<br>';
echo preg_match("#[0-9]#", $testo) ? "Pattern numerico trovato" : "Pattern non trovato";
echo '<br>';
echo preg_match("#[A-Ca-c]#", $testo) ? "Pattern trovato" : "Pattern non trovato";
echo '<br>';
// ^negato coi numeri
echo preg_match("#[^0-2]#", "222") ? "true" : "false"; //false = solo numeri true = con lettere
echo '<br>';
// ? = 0 numeri di vocali o 1 numeri di vocali
// * quante vocali voglio della roba tra parentesi
// + devo mettere almeno 1
echo preg_match("#R[aeiou]*#", "54454Roiouavigo", $matches) ? "true" : "false";
echo '<br>';
var_dump($matches);
echo '<br>';

echo preg_match("#ciao#i", "CIAO") ? "Pattern ignora le maiscuole" : "Pattern non trovato";
echo '<br>';
$tel = '1';
// {1,8} minimo 1 massimo 8
echo preg_MATCH("#[0-9]{1,8}#", $tel, $matches) ? "true" : "false";
echo '<br>';
var_dump($matches);

echo '<br>';
echo preg_match("#verde|rosso|blu#", "verde") ? "true" : "false";

<?php
$pas = '1234';

// primo argomento = password
// secondo argomento = algoritmo (quello di default consigliato)
$hash = password_hash($pas, PASSWORD_DEFAULT);
// verifica
// $2y10$ di default parametri di configurazione

// primo parametr password in chiaro
// secondo hash della password salvata precedentemente
if (password_verify('1234', $hash)) {
    echo "Password corretta";
    echo '<br>';
} else {
    echo "Password errata";
    echo '<br>';
}
$lunghezza = strlen($hash);
// lunghezza non varia se vario la password sempre 60
// ogni volta che ricarico l'hash cambia perchè? per il salt ossia numero casuale
// serve anche per rafforzare la sicurezza
echo $lunghezza;
echo '<br>';

echo $hash;

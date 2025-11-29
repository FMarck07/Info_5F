<?php

// Array di esempio
$frutti = [
    "rosso" => "mela",
    "giallo" => "banana",
    "verde" => "kiwi",
    "arancione" => "arancia",
    "blu" => "mirtillo"
];

echo "<h3>Array originale:</h3>";
print_r($frutti);

// 1. array_keys() -> restituisce tutte le chiavi
$chiavi = array_keys($frutti);
echo "<br><br><b>Chiavi:</b> ";
print_r($chiavi);

// 2. array_values() -> restituisce tutti i valori
$valori = array_values($frutti);
echo "<br><br><b>Valori:</b> ";
print_r($valori);

// 3. array_key_exists() -> controlla se una chiave esiste
echo "<br><br>Esiste la chiave 'rosso'? ";
echo array_key_exists("rosso", $frutti) ? "Sì" : "No";

// 4. isset() -> controlla se la chiave esiste e non è null
echo "<br>isset su chiave 'giallo'? ";
echo isset($frutti['giallo']) ? "Sì" : "No";

// 5. in_array() -> controlla se un valore esiste
echo "<br>Esiste il valore 'kiwi'? ";
echo in_array('kiwi', $frutti) ? "Sì" : "No";

// 6. array_search() -> cerca un valore e restituisce la chiave
$chiave_kiwi = array_search('kiwi', $frutti);
echo "<br>La chiave del valore 'kiwi' è: $chiave_kiwi";

// 7. unset() -> elimina un elemento
unset($frutti['blu']);
echo "<br><br>Dopo unset('blu'):<br>";
print_r($frutti);

// 8. array_merge() -> unisce array
$altri_frutti = ["fragola", "uva"];
$unione = array_merge($frutti, $altri_frutti);
echo "<br><br>Array unito con array_merge():<br>";
print_r($unione);

// 9. asort() -> ordina valori mantenendo le chiavi
asort($frutti);
echo "<br><br>Dopo asort():<br>";
print_r($frutti);

// 10. arsort() -> ordina valori in modo decrescente mantenendo le chiavi
arsort($frutti);
echo "<br><br>Dopo arsort():<br>";
print_r($frutti);

// 11. ksort() -> ordina chiavi in ordine crescente
ksort($frutti);
echo "<br><br>Dopo ksort():<br>";
print_r($frutti);

// 12. krsort() -> ordina chiavi in ordine decrescente
krsort($frutti);
echo "<br><br>Dopo krsort():<br>";
print_r($frutti);

// 13. array_map() -> applica funzione a tutti i valori
$lunghezze = array_map('strlen', $frutti);
echo "<br><br>Lunghezza dei frutti con array_map():<br>";
print_r($lunghezze);

// 14. array_filter() -> filtra i valori con una funzione
$filtrati = array_filter($frutti, function($v){ return strlen($v) > 5; });
echo "<br><br>Frutti con nome più lungo di 5 caratteri:<br>";
print_r($filtrati);

// 15. array_walk() -> applica funzione a tutti i valori (senza modificare l’array)
echo "<br><br>Usando array_walk():<br>";
array_walk($frutti, function($v,$k){ echo "$k => $v<br>"; });

// 16. array_slice() -> prende una fetta dell’array
$fetta = array_slice($frutti, 1, 2, true); // mantiene le chiavi
echo "<br>Fetta dell'array (indice 1, 2 elementi):<br>";
print_r($fetta);

// 17. array_splice() -> rimuove e sostituisce parte dell’array
$da_splice = $frutti;
array_splice($da_splice, 1, 2, ["pesca","lampone"]);
echo "<br>Array dopo array_splice():<br>";
print_r($da_splice);

?>

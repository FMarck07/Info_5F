<?php
echo "Index 3"; // output è il browser
echo '<br>';
$var = 10;
echo "Variabile 1: " , $var. '<br>';
echo '<br>';
var_dump($var);
$var2 = 20.25;
echo "Variabile 2: " , $var2 . '<br>';
echo '<br>';
var_dump($var2);
$var = 'ciao';
echo "Variabile 1: ", $var. '<br>';
var_dump($var);
echo '<br>'. '<br>';
echo M_PI. '<br>';
echo PHP_INT_MAX. '<br>';
echo PHP_INT_MIN. '<br>';
if($var2>5)
    echo "confrontoeffetuato2",  '<br>';
else echo 'ciao', '<br>';
$vet = [10, 20, 30];
$index = array_search(20, $vet);
echo "vettore posizione: ",$index. " con numero ", $vet[1]. '<br>';
$n = count($vet);
echo $n;
echo '<br>', "Visualizzo elementi del vettore con ciclo for",'<br>';
for($i = 0; $i<$n; $i++)
    echo '<br>'. $vet[$i]. '<br>';
echo "Visualizzo elementi del vettore con print_r",'<br>';
print_r($vet);
echo '<br>', "Visualizzo elementi del vettore con var_dump",'<br>';
var_dump($vet);
$vet2 = [10, 20, 30, "a", 'b'];
echo '<br>';
var_dump($vet2); // i vettori possono contenere tipi diversi di variabili
echo '<br>', "Aggiungo elemento alla fine del vet",'<br>';
array_push($vet2, 50);
array_push($vet2, 2);
echo implode(" ", $vet2);
$vet2[] = 60;
echo '<br>';
echo implode(" ", $vet2);
echo '<br>', "Cancello elemento alla fine del vettore",'<br>';
array_pop($vet2);
echo '<br>';
echo implode(" ", $vet2);
echo '<br>', "Cancello elemento all'inzio del vettore",'<br>';
array_shift($vet2);
echo '<br>';
echo implode(" ", $vet2);
if(in_array(20, $vet2))
    echo '<br>', "Elemento presente";
else echo '<br>', "Non presente";
echo '<br>', "Ordino elementi del vettore",'<br>';
sort($vet2);
echo implode(" ", $vet2);
$studente = [
    "nome" => "Marco",
    "eta" => 18
];
echo '<br>';
echo $studente['nome'];
$studente["cognome" ] = "Vis";

foreach ($studente as $studente_key => $valore) {
    echo "$studente_key: $valore<br>";
}

echo "Associativo", '<br>';
$studenti =[
    "studenti1"=>[
        "nome" => "Marco",
        "voto" => 7,
    ],
    "studenti2"=>[
        "nome" => "Nicola",
        "voto" => 8,
    ]
];
echo $studenti["studenti2"]["nome"]. '<br>', "voto ";
echo $studenti["studenti2"]["voto"];

$config = [
    "database" => "mio_db",
    "utente" => "admin",
    "password" => "12345",
];



$chiavi = [];

if (array_key_exists("nome", $studente))
    echo '<br>', "La chiave esiste nell'array.";
else
    $chiavi = array_keys($studente);

var_dump($chiavi);
echo '<br>';
$valori = array_values($studente);
var_dump($valori);
echo '<br>';
echo "$valori[1]";
if (array_key_exists("eta", $studente))
    echo '<br>', "La chiave esiste nell'array. Età: ";
else
    $chiavi = array_keys($studente);

echo $studente['eta'];

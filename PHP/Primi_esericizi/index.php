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
//for($i = 0; )

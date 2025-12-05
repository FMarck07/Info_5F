<?php

$array = [1,2,3,4];

// 13. array_map()

$result = array_map(function($n) {
    return $n * 2;
}, $array);

print_r($result);

$result = array_filter($array, function ($n) {
    return $n > 2;
});
echo '<br>';
var_dump($result);
echo '<br>';

array_walk($array, function(&$value) {
    $value = $value * 2; // Doppia ogni valore dell'array
});
print_r($array);


// oparatore condizionale = teranrio
$variabile = 8;
echo '<br>';
echo $risulatato = $variabile < 6 ? "va bene" : "nigga";
echo '<br>';
// operatore coaleshing
$nome = null;

$risulato = $nome ?? "default";
var_dump($risulato);

// spaceship
echo '<br>';
echo 5 <=> 5; // 0
echo '<br>';
echo 3 <=> 10; // -1
echo '<br>';
echo 10 <=> 3; // 1
echo '<br>';


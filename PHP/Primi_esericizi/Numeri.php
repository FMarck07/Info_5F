<?php

echo "=== 1. MATEMATICA BASE ===\n";
$n_neg = -15.6;
$n_pos = 25;
$base = 2;
$esp = 3;

// abs() - Valore assoluto
echo "Valore assoluto di $n_neg: " . abs($n_neg) . "\n";

// sqrt() - Radice quadrata
echo "Radice quadrata di $n_pos: " . sqrt($n_pos) . "\n";

// pow() - Potenza
echo "$base alla potenza di $esp: " . pow($base, $esp) . "\n";

// intdiv() - Divisione intera
echo "Divisione intera 10 diviso 3: " . intdiv(10, 3) . " (resto scartato)\n";

// pi() - Pigreco
echo "Il valore di Pi Greco: " . pi() . "\n\n";


echo "=== 2. LOGARITMI ED ESPONENZIALI ===\n";
// log() - Logaritmo naturale
echo "Logaritmo naturale di 10: " . log(10) . "\n";

// exp() - Esponenziale (e elevato a...)
echo "Esponenziale di 1 (valore di e): " . exp(1) . "\n\n";


echo "=== 3. ARROTONDAMENTO ===\n";
$float = 3.56;
echo "Numero di partenza: $float\n";

// ceil() - Per eccesso
echo "Ceil (su): " . ceil($float) . "\n";

// floor() - Per difetto
echo "Floor (giù): " . floor($float) . "\n";

// round() - All'intero più vicino
echo "Round (vicino): " . round($float) . "\n\n";


echo "=== 4. NUMERI CASUALI ===\n";
// rand() - Numero casuale
echo "Rand (tra 1 e 10): " . rand(1, 10) . "\n";

// mt_rand() - Mersenne Twister (più veloce/affidabile)
echo "Mt_rand (tra 100 e 200): " . mt_rand(100, 200) . "\n\n";


echo "=== 5. CONFRONTO E FORMATTAZIONE ===\n";
$lista = [5, 12, 1, 88, 43];

// min() - Minimo
echo "Valore minimo della lista: " . min($lista) . "\n";

// max() - Massimo
echo "Valore massimo della lista: " . max($lista) . "\n";

// number_format() - Formattazione valuta/decimali
$soldi = 12345.6789;
echo "Formattazione valuta: " . number_format($soldi, 2, ',', '.') . " €\n\n";


echo "=== 6. CONTROLLO TIPI E CONVERSIONI ===\n";
$stringaNum = "42.5";
$intero = 10;
$decimale = 10.5;

// is_numeric()
echo "La stringa '$stringaNum' è numerica? " . (is_numeric($stringaNum) ? "Sì" : "No") . "\n";

// is_int()
echo "Il valore $intero è un intero? " . (is_int($intero) ? "Sì" : "No") . "\n";

// is_float()
echo "Il valore $decimale è un float? " . (is_float($decimale) ? "Sì" : "No") . "\n";

// intval() - Estrae l'intero
echo "Intval di '$stringaNum': " . intval($stringaNum) . "\n";

// floatval() - Estrae il float
echo "Floatval di '$stringaNum': " . floatval($stringaNum) . "\n";

?>

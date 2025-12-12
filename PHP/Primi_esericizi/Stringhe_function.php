<?php
// Funzioni per le Stringhe in PHP - Esempi Completi con <br>

// strlen() - Calcola la lunghezza della stringa
echo strlen("Ciao") . "<br>"; // 4

// strrev() - Inverte la stringa
echo strrev("Ciao") . "<br>"; // "oaiC"

// strtolower() - Converte tutto in minuscolo
echo strtolower("CIAO") . "<br>"; // "ciao"

// strtoupper() - Converte tutto in maiuscolo
echo strtoupper("ciao") . "<br>"; // "CIAO"

// ucfirst() - Prima lettera maiuscola
echo ucfirst("ciao mondo") . "<br>"; // "Ciao mondo"

// ucwords() - Prima lettera di ogni parola maiuscola
echo ucwords("ciao mondo") . "<br>"; // "Ciao Mondo"

// trim() - Rimuove spazi vuoti dall'inizio e dalla fine
echo trim("  ciao  ") . "<br>"; // "ciao"

// ltrim() - Rimuove spazi vuoti solo dall'inizio (Left)
echo ltrim("  ciao") . "<br>"; // "ciao"

// rtrim() - Rimuove spazi vuoti solo dalla fine (Right)
echo rtrim("ciao  ") . "<br>"; // "ciao"

// explode() - Divide una stringa in un array (basandosi su un separatore)
print_r(explode(",", "mela,pera,banana"));
echo "<br>";

// implode() - Unisce gli elementi di un array in una stringa
echo implode("-", ["mela","pera","banana"]) . "<br>"; // "mela-pera-banana"

// str_replace() - Sostituisce una porzione di stringa
echo str_replace("mondo", "PHP", "Ciao mondo") . "<br>"; // "Ciao PHP"

// substr() - Estrae una parte della stringa (stringa, inizio, lunghezza)
echo substr("Ciao", 1, 3) . "<br>"; // "iao"

// strpos() - Trova la posizione della PRIMA occorrenza (inizia da 0)
echo strpos("Ciao mondo", "o") . "<br>"; // 3 (C-i-a-o)

// strrpos() - Trova la posizione dell'ULTIMA occorrenza
echo strrpos("Ciao mondo", "o") . "<br>"; // 9 (l'ultima 'o' di mond'o')

// strstr() - Trova la prima occorrenza e restituisce il resto della stringa
echo strstr("Ciao mondo", "mondo") . "<br>"; // "mondo"

// stristr() - Come strstr, ma case-insensitive (ignora maiuscole/minuscole)
echo stristr("Ciao mondo", "MONDO") . "<br>"; // "mondo"

// sprintf() - Restituisce una stringa formattata
$formattato = sprintf("La mia età è %d", 25);
echo $formattato . "<br>"; // "La mia età è 25"

// printf() - Stampa direttamente una stringa formattata
printf("Prezzo: %.2f<br>", 9.5); // output: "Prezzo: 9.50"

// number_format() - Formatta un numero con le migliaia raggruppate
// Nota: In Italia usiamo la virgola per i decimali e il punto per le migliaia
echo number_format(12345.678, 2, ',', '.') . "<br>"; // "12.345,68"

// addslashes() - Aggiunge backslash davanti ai caratteri speciali (utile per DB)
echo addslashes("L'Aquila") . "<br>"; // "L\'Aquila"

// stripslashes() - Rimuove i backslash aggiunti da addslashes
echo stripslashes("L\'Aquila") . "<br>"; // "L'Aquila"

?>

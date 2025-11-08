<?php
//proviamo il regex

$pattern = '#abc#';
$subject = 'ciao';
//$subject = 'ciabco';

$pattern = '#^abc#'; //voglio che la parola inizi per abc, marcatore inizio stringa
$subject = 'abcoioe';

$pattern = '#abc$#'; //voglio che la stringa finisca per abc, marcatore fine stringa
$subject = 'ciao abc';

//----
$pattern = '#a[123]b#';
$subject = 'cia2bo';

//$pattern = '#a[123][123]b#'; //un solo numero in piu
$pattern = '#a[123]+b#'; //con il + posso avere caratteri illimitati. (1,N)
$subject = 'cia212121123123bo';

$pattern = '#a[123]*b#'; //con il * posso avere zero caratteri. (0,N)
$subject = 'ciabo';

$pattern = '#a[0-9]b#'; //con il - abbiamo un intervallo di numeri
$subject = 'cia8bo';

$pattern = '#4[a-zA-Z]*5#'; //con il - abbiamo un intervallo di numeri
$subject = '4asdfasA5';

//Url
$pattern = '#home/index/[a-zA-Z]*#'; //con il - abbiamo un intervallo di numeri
$subject = 'home/index/product';

$pattern = '#(/[a-z]+){1,5}#'; //() = gruppo di parole. {} = numero di ripetizioni da 1 a 5 parole
$subject = '/home/index/temp/itis/venerdi';
$subject = '/home/index/temp/itis/venerdi/computer'; //supera le 5 parole

/*if(preg_match($pattern,$subject))
    echo 'match';
else
    echo 'no match';*/

/*if(preg_match($pattern,$subject,$matches))
{
    echo 'match'.'<br>';
    var_dump($matches);
}

else
    echo 'no match';*/


if(preg_match($pattern,$subject,$matches))
{
    echo 'match'.'<br>';
    var_dump($matches);
    $result = explode("/", $matches);
    echo count($result);
    var_dump($result);
    var_dump($matches);
}

else
    echo 'no match';
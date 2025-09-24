<?php
//echo phpinfo(); //Mostra la configurazione del nostro ambiente di lavoro -- ZendEngine motore di php di solito un liguaggio interpretato come php è più lento di uno compuilato

/*array in php*/

$names  = [
    'Bob',
    'Lucy',
    'Mary',
];

echo $names[0];

echo '<br>';
echo '<br>';

$names [] = 'Anthony'; //possiamo andare ad aggiungere dei nuovi elementi ad un array di cui non sappiamo la dimensione
for($i = 0; $i < count($names); $i++)
    echo $names[$i].'<br>';

echo '<br>';

/*($names); //var_dump in questo caso descrive un array
unset($names[1]); //elimina l'elemento
for($i = 0; $i < count($names); $i++)
    echo $names[$i].'<br>';*/

echo '<br>';
var_dump($names); //var_dump in questo caso descrive un array
unset($names[1]); //elimina l'elemento
echo '<br>';
var_dump($names); //in questo caso si crea un buco
echo '<br>';
for($i = 0; $i < count($names); $i++)
   if(isset($names[$i]))
    echo $names[$i].'<br>';
echo '<br>';
foreach($names as $name)
    echo $name.'<br>';

echo '<br>';

$names = array_values($names); //array valuesm ci permette di togliere il gap, l'anomalia creata dal unset
echo '<br>';
for($i = 0; $i < count($names); $i++)
    echo $names[$i].'<br>';

//Array Associativi, coppie chiave valore, key/values, ovviamente il valore lo possiamo mettere noi e puo essere una stringa
$students = [
  'Alice' => 8,
  'Bob' => 7,
  'Lucy' => 9,
];

echo $students['Alice']; //Restituisce il valore
echo '<br>';

foreach ($students as $key => $value) //Restituisce tutto l'array con sia la chiave che il valore
    echo $key.'-'.$value.'<br>';

/*****DATE TIME******/
//legacy, timestamp, date, time, mktime, getdate, strtotime -----> funzioni usate prima di php 5 ovvero 2004
//ora si usano invece le classi

$now = new DateTime();
echo $now -> format(format: 'Y-m-d H:i:s');

//09/12/2024
echo '<br>';
$date1 = new DateTime(datetime: '+2 hours');
echo $date1 -> format(format: 'Y-m-d H:i:s');

echo '<br>';
$date2 = new DateTime(datetime: '+3 months');
echo $date2 -> format(format: 'Y-m-d H:i:s');

//
$date4 = clone $date2;
$date4 -> setDate(year: 2030, month: 12, day: 8);
echo  $date4 -> format('d-m-y H:i:s');
echo '<br>';
$date4 ->setTime(11,15,29);
echo  $date4 -> format('d-m-y H:i:s');
echo '<br>';

$date5 = new DateTime('+10 days');
$date6 = new DateTime('+15 days');
$interval = $date5 ->diff($date6);
echo  $interval ->format('%y - %m - %d - %H - %i - %s');
echo '<br>';

$intervalTime = new DateInterval('P1Y3M4DT2H3M4S'); //period: years, month, days, timing: hours, minutes, second
echo  $intervalTime ->format('%y - %m - %d - %H - %i - %s');
echo '<br>';

$now = new DateTime();
$date7 = $now -> add($intervalTime);
echo  $date7 -> format('d-m-y H:i:s');
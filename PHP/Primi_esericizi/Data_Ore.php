<?php
$data = new DateTime();
echo "data e ora di oggi : ". $data ->format('d/m/y H:i:s');
echo '<br>';
echo "ora di oggi : ". $data ->format('H:i:s');
echo '<br>';
echo "data di oggi: ". $data ->format('d/m/y');
echo '<br>';
$data->modify("+2 days");
echo "data tra 2 giorni: ". $data ->format('d/m/y');
$data2 = new DateTime('-2 days');
echo '<br>';
echo "data 2 giorni fa: ". $data ->format('d/m/y');
$data2 = new DateTime('-2 years');
echo '<br>';
echo "data -2 anni fa: ". $data2 -> format('d/m/y');
echo '<br>';
$diff = $data -> diff($data2);
echo "Differenza tra due date in giorni: ". $diff-> days;
echo '<br>';
echo "Differenza tra due date in anni: ". $diff-> y;
echo '<br>';
echo "Differenza tra due date in mesi: ". $diff-> m;
echo '<br>';
echo "Differenza tra due date: ". $diff -> format('%y %m %d %h %i %s');
echo '<br>';
echo "Differenza tra due date solo i minuti: ". $diff -> format('%i');
$intervallo = new DateInterval('P1Y3M4DT2H3M4S');
$newDate = $data-> add($intervallo);

echo '<br>';
echo "Somma: ". $newDate ->format('d/m/y H:i:s');


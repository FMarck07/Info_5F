<?php
$file = 'nigga';
// dove si trova lo script che sta girando adesso
// directory corrente dello script sappiamo dove siamo
echo (getcwd());
echo '<br>';
echo DIRECTORY_SEPARATOR;
$path = getcwd();
echo '<br>';
// per vedere se c'è un file
echo is_file($path.DIRECTORY_SEPARATOR."file.txt") ? "true" : "false";
echo '<br>';
echo is_dir($path.DIRECTORY_SEPARATOR."nig") ? "true" : "false";
$items = scandir($path.DIRECTORY_SEPARATOR."nig");
echo '<h1> file nella directory </h1>';
echo '<UL>';
foreach ($items as $item){
    if(!is_dir($item)){
        echo "<LI> $item </LI>";
    }
}
echo '</UL>';
$file1 = fopen("moh.txt", "w");
fwrite($file1, "ciao a tutti");
fclose($file1);
$file1 = fopen("moh.txt", "a");
fwrite($file1, "ciao a tutti");
fclose($file1);



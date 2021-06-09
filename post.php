<?php
$dir = $_POST["mess"];
$dirr = "txt/".$dir.".txt";
$myfile = fopen($dirr, "w");
$txt = "1.\n";
fwrite($myfile, $txt);
fclose($myfile);
if ($myfile) header('Location: index.php');
else echo 'Ошибка при записи в файл.';
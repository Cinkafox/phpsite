<?php
$dir = "txt/".$_GET["edit"];
$myfile = fopen($dir, "w");
$txt = $_POST["inp"];
fwrite($myfile, $txt);
fclose($myfile);
if ($myfile) header('Location: index.php');
else echo 'Ошибка при записи в файл.';

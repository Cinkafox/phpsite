<html>
<head>
    <title>edit</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<?php
$get = $_GET['edit'];
$fp = fopen('txt/'.$get, 'r');
if ($fp)
{
    echo "<form method='post' action='save.php?edit=$get'><p><textarea id='inp' name='inp'>";
    while (!feof($fp))
    {
        $mytext = fgets($fp, 999);
        echo $mytext;
    }
    echo "</textarea></p><p><input type='submit' value='Сохранить'></p>";
}
else echo "Нет такого файла!";
fclose($fp);
?>
<style>
    body{
        background: #222222;
    }
    form {
        padding: 15px;
        border: 1px solid #222;
        border-radius: 4px;
        color: #fff;
        background-color: #333;
        margin: 10px;
    }
    textarea {
        background: #fce9c0; /* Цвет фона */
        border: 2px solid #a9c358; /* Параметры рамки */
        padding: 10px; /* Поля */
        width: 100%; /* Ширина */
        height: 200px; /* Высота */
        box-sizing: border-box; /* Алгоритм расчёта ширины */
        font-size: 14px; /* Размер шрифта */
    }
</style>
</body>
</html>
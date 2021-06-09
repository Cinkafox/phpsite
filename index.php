<html>
<head>
    <title>Диф.зачеты</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<main>
    <form action="post.php" method="post">
        <label for="mess">Название диф.зачета:</label>
        <input type="text" id="mess" name="mess" value="Ебанная история">
        <input type="submit" value="Добавить">
    </form>
</main>
<main>
    <?php
    $dir    = 'txt';
    $files1 = scandir($dir);
    for($i=2;$i<count($files1);$i++){
        echo "<a id='$files1[$i]' style='padding: 15px;
        border: 1px solid #222;
        border-radius: 4px;
        color: #fff;
        background-color: #377;
        margin: 10px;' href='edit.php?edit=$files1[$i]'>";
        echo $files1[$i];
        echo "</a>";

    }
    ?>
</main>
</body>
<script>
    function clck(input){
        Console.log("Hello");
        document.location.replace("http://localhost:80/" + input);
    }
</script>
<style>
    body{
        background: #222;
    }
    main{
        padding: 15px;
        border: 1px solid #222;
        border-radius: 4px;
        color: #fff;
        background-color: #333;
        margin: 10px;
    }

</style>
</html>


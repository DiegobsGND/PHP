<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $valor = $_POST["v"];

        for($i = 1; $i <= 10; $i++){
            $res = $valor * $i;
            echo"$valor * $i = $res <br>";
        }
    ?>


    <br>
    <a href="index.html">
        <input type="submit" value= "voltar">
    </a>
</body>
</html>
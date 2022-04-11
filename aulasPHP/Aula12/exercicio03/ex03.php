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
        $c = 1;
        do{

            $r = $valor * $c;
            echo "$valor * $c = $r <br>";
            $c++;

        }while($c <= 10);
    ?>


    <br>
    <a href="index.html">
        <input type="submit" value= "voltar">
    </a>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $n = isset($_POST["num"])?$_POST["num"]:0;
        $o = isset($_POST["op"])?$_POST["op"]:1;

        switch ($o){

            case 1: $r = $n * 2; break;

            case 2: $r = $n ^ 3; break;

            case 3: $r = sqrt($n);

        }

        echo "o resultado da operação foi $r"
    ?>

    <br>
    <a href="index.html">
        <input type="submit" value= "voltar">
    </a>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $n1 = isset($_POST["n1"])?$_POST["n1"]:0;
        $n2 = isset($_POST["n2"])?$_POST["n2"]:0;
        $media = ($n1 + $n2)/2;

        if ($media >= 7){
            echo "média: $media | APROVADO";
        }elseif($media >= 5 && $media < 7){
            echo "média: $media | RECUPERATION";
        }else {
            echo "média: $media | BUUUUURRO! BUUUUURRO! BUUUURRO!";
        }

    ?>
    <br>
    <a href="index.html">
        <input type="submit" value= "voltar">
    </a>
</body>
</html>
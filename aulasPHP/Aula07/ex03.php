<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $media = ($nota1 + $nota2) / 2;

        echo "Nota 1 = $nota1";
        echo "<br>Nota 2 = $nota2";
        echo "<br> Media = $media";
        echo "<br>Situação = ". (($media > 5)? "Aprovado": "Reprovado");

    ?>

</body>
</html>
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
        $rq = sqrt($valor);
        echo "a raíz quadrada de $valor é ".number_format($rq,2);

    ?>
    <br>
    <a href="index.html">
        <input type="submit" value= "voltar">
    </a>
</body>
</html>
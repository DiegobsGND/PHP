<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $nome = isset($_POST["n"])?$_POST["n"]:"não informado";
    $nasc = isset($_POST["ano"]);
    $idade = date("Y") - $nasc;
    $sexo = isset($_POST["sexo"])?$_POST["sexo"]:"não informado";
    echo "$nome tem $idade anos e é $sexo"

    ?>
    <br>
    <a href="index.html">
        <input type="submit" value= "voltar">
    </a>
</body>
</html>
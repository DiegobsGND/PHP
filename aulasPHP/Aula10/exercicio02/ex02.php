<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $op = isset($_POST["dia"])?$_POST["dia"]:0;

    switch ($op){
        case 1:
        case 7:
            echo "hoje é final de semana, você não precisa ir a escola";
            break;
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            echo "hoje é dia de semana. você precisa ir para a escola";
            break;
        default: echo "valor inválido";
    }
    ?>


    <br>
    <a href="index.html">
        <input type="submit" value= "voltar">
    </a>
</body>
</html>
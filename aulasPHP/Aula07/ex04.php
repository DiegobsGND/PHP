<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $nasc = $_GET["ano"];
        $atual = 2021;
        $idade = $atual - $nasc;
        echo "Você nasceu em $nasc, então você tem $idade anos";
        $sit = ($idade > 18 && $idade < 64)?"obrigatorio":" não obrigatotrio";
        echo "<br> portanto seu voto é $sit";
    ?>

</body>
</html>
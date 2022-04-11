<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 5B</title>

</head>

<body>

<h1>Funções Aritméticas</h1>

<?php

    $v1 = $_GET["x"];
    $v2 = $_GET["y"];
    
    # url de inserção de variavéis
    # Ex: http://localhost/aulasPHP/aula5.php?a=5&b=8

    echo "os valores digitados foram $v1 e $v2";
    echo "<br>valor absoluto de $v2 é ".abs($v2);
    echo "<br>raíz de $v1 é ".sqrt($v1);
    echo "<br> o valor de $v1<sup>$v2</sup> é ".pow($v1,$v2);
    echo "<br> o valor de $v2 arrendondado é ".round($v2);
    echo "<br> a parte inteira de $v2 é ".intval($v2);
    echo "<br> o valor de $v1 em moeda é ".number_format($v1,2);

   

?>
    
</body>
</html>
<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 5A</title>

</head>

<body>

<h1>Operadores Aritméticos</h1>

<?php

    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    
    # url de inserção de variavéis
    # Ex: http://localhost/aulasPHP/aula5.php?a=5&b=8

    $soma = $n1 + $n2;
    $media = ($n1 + $n2)/2; 
    echo "$n1 + $n2 = $soma";
    echo "<br>$n1 - $n2 = ".($n1 - $n2);
    echo "<br>$n1 X $n2 = ".($n1 * $n2);
    echo "<br>$n1 / $n2 = ".($n1 / $n2);
    echo "<br>$n1 % $n2 = ".($n1 % $n2);
    echo "<br> a média de $n1 + $n2 é igual a $media";

?>
    
</body>
</html>
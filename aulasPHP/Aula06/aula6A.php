<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 6</title>

</head>

<body>

<h1>Operadores de atribuição</h1>

<?php
    $preco = $_GET["p"];
    $maisCento = $preco * 1.1;
    $menosCento = $preco - ($maisCento - $preco);
    
    # url de inserção de variavéis
    # Ex: http://localhost/aulasPHP/aula5.php?a=5&b=8

    echo "o preço do produto é R$".number_format($preco,2);
    echo "<br> Adicionando 10% o preço do produto é R$ ".number_format($maisCento,2);
    echo "<br> Subtraindo 10% o preço do produto é R$ ".number_format($menosCento,2)

   

?>
    
</body>
</html>
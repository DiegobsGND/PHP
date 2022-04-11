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
    $ano = $_GET["a"];// linha vai pegar o ano da URL
    
    /*
    url de inserção de variavéis
    # Ex: http://localhost/aulasPHP/aula5.php?a=5&b=8
    */

    echo "O atual é $ano e o próximo ano será ".++$ano;
    echo "<br> e o ano antes de ".--$ano."foi ".--$ano;
   

?>
    
</body>
</html>
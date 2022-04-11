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

    $a = 4;
    $b = &$a;//cria uma ligação entre $a e $b portanto o que for feito em um será feito em outro
    $b += 4;

    echo "O valor de A=$a";
    echo "<br> O valor de B=$b";
   

?>
    
</body>
</html>
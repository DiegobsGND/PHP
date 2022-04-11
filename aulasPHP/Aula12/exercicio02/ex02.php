<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="ex02.php">

        <?php 
            $valor = isset($_POST["v"])?$_POST["v"]:1;

            $c = $valor;
            $fat = 1;

            do{
                $fat = $fat * $c;
                $c--;

            }while($c>=1);
            echo"<h2>O fatorial de $valor é $fat</h2>";
        ?>
</body>
</html>
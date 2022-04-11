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
        $c = 1; 
        while($c <= 5){
        echo "valor $c: <input type='number' name='v$c'><br>";
        $c++;
        }
        ?>
       <input type="submit" value="enviar"> 
    </form>

        <?php
        
        $cont = 1;
    
        while($cont <= 5){
            $a = "n".$cont;
            $$a = isset($_POST["v$cont"])?$_POST["v$cont"]:0;
            $cont++;
        }
            echo"$n1 $n2 $n3 $n4 $n5 <br>";
        ?>
</body>
</html>
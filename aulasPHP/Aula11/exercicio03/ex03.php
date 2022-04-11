<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $c = isset($_POST["ini"])?$_POST["ini"]:0;
        $f = isset($_POST["final"])?$_POST["final"]:0;
        $p = isset($_POST["passo"])?$_POST["passo"]:0;

        if($f>$c){
            while($c<=$f){
                echo"$c <br>";
                $c += $p;
            }
        }elseif($c>$f){
            while($c>=$f){
                echo"$c <br>";
                $c-= $p;
            }
        }
    ?>


    <br>
    <a href="index.html">
        <input type="submit" value= "voltar">
    </a>
</body>
</html>
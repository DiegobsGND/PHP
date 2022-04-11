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
            $p = 0;
           
            echo "$valor é divisivel por: ";
            
            for($i = 1; $i <= $valor; $i++){
                $res = $valor % $i;

                if($res == 0){
                    $p++;
                    echo "$i ";

                    if($p <= 2){
                        $ep = "é primo";
                    }else{
                        $ep = "não é primo";
                    }
                }


                }
                echo "<br> ele $ep";
 

        ?>
</body>
</html>
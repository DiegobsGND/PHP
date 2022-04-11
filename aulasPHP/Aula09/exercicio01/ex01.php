<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $nome = $_POST["nome"];
        $nasc = isset($_POST["ano"])?$_POST["ano"]:1900;
        $idade = date("Y") - $nasc;

        if ($idade >= 18 && $idade < 60){
            echo "$nome é obrigado a votar por ter $idade anos";
        }elseif ($idade >=16 && $idade < 18 || $idade >= 60){
                echo "O voto opcional para $nome por ter $idade anos";
        }
        else{
                echo "$nome não pode votar, por ter $idade anos";
        }
        


    ?>
    <br>
    <a href="index.html">
        <input type="submit" value= "voltar">
    </a>
</body>
</html>
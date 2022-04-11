<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $e = isset($_POST["estado"])?$_POST["estado"]:0;

        switch($e){
            case 1:
                echo "Nordeste";
                break;
            case 2:
                echo "Sudeste"; 
                break;
            case 3:
                echo "Sul";
                break;
            case 4:
                echo "Centro-Oeste";
                break;
            case 5:
                echo "Norte";
                break;
            default: echo "Selecione esta porra para continuar!";

        }
    ?>


    <br>
    <a href="index.html">
        <input type="submit" value= "voltar">
    </a>
</body>
</html>
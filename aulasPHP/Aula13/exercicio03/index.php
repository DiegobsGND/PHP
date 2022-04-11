<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>titulo de eleitor</title>
</head>
<body>
    fazer a tabuada usando for
    <form method="POST" action="ex03.php">
        
        <select name="v">

        <?php
            for($i = 1; $i < 10; $i++){
            echo"<option>$i</option>";
            }
        ?>
        </select>

        <input type="submit" value="enviar">
    </form>
</body>
</html>
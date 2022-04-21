<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora con for</title>
</head>
<body>

        <h3>Esta es tu calculadora en php con el uso de for</h3>
        <form action="calculadora_con_for.php" method="post">

            <input type="submit" name="tabla" value="1">
            <input type="submit" name="tabla" value="2">
            <input type="submit" name="tabla" value="3">
            <input type="submit" name="tabla" value="4">
            <input type="submit" name="tabla" value="5">
            <input type="submit" name="tabla" value="6">
            <input type="submit" name="tabla" value="7">
            <input type="submit" name="tabla" value="8">
            <input type="submit" name="tabla" value="9">
            <input type="submit" name="tabla" value="10">

        </form><br/>
    
</body>
</html>

<?php

    if ($_POST)
    {
        
        $tabla = $_POST['tabla'];
        echo "La tabla que escogio es la del $tabla <br><br/>";
        for ($i=1; $i <= 10 ; $i ++) 
        {    
            $res = $tabla * $i;
            echo "$tabla x $i = $res <br />";
        }

    }


?>
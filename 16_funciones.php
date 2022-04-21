<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora con funcion php</title>
</head>
<body>
    
    <form action="16_funciones.php" method="post"><br>

        Ingrese la tabla del numero que quiera crear: <br><br>
        <input type="number" name="tabla" value="valor">
        <input type="submit" value="Enviar">

    </form>

</body>
</html>



<?php

    if($_POST){
        $tabla = $_POST['tabla'];
        
        function tablaDeMultiplicar($numero, $tabla)
        {
            $principal = 1;

            while($principal <= 10)
            {
                $resultado = $principal * $tabla;
                echo "$tabla x $principal = $resultado <br>";
                $principal++;
            }

        }

        tablaDeMultiplicar($tabla, $tabla);

    }


?>


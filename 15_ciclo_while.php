<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora con while</title>
</head>
<body>
    <h3>Esta es tu calculadora hecha en php con el ciclo while</h3>
        <form action="15_ciclo_while.php" method="post">

            <input type="submit" name="numero" value="1">
            <input type="submit" name="numero" value="2">
            <input type="submit" name="numero" value="3">
            <input type="submit" name="numero" value="4">
            <input type="submit" name="numero" value="5">
            <input type="submit" name="numero" value="6">
            <input type="submit" name="numero" value="7">
            <input type="submit" name="numero" value="8">
            <input type="submit" name="numero" value="9">
            <input type="submit" name="numero" value="10">

            

        </form><br><br>

</body>
</html>


<?php

    // Creamos una variable que llevara el conteo

    $numeroInicial = 1;

    // Si el post no esta vacio hacemos lo siguiente
    if($_POST)
    {
        // recibimos el valor post
        $tabla = $_POST['numero'];

        // realizamos la operacion aritmetica de la multiplicacion
        
        $resultado = $tabla * $numeroInicial;
        
        while ($numeroInicial<= 10) 
        {
            $resultado = $tabla * $numeroInicial;
            echo "$tabla x  $numeroInicial = $resultado <br/>";
            $numeroInicial++;
        }
    }
?>
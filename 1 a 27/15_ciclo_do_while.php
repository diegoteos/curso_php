<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de multiplecar</title>
</head>
<body>
    
    <form action="14_ciclo_do_while.php" method="post">
<h3>Esta es tu calculadora hecha en php con el ciclo do while</h3>
        <input type="submit" name="boton" value="1">
        <input type="submit" name="boton" value="2">
        <input type="submit" name="boton" value="3">
        <input type="submit" name="boton" value="4">
        <input type="submit" name="boton" value="5">
        <input type="submit" name="boton" value="6">
        <input type="submit" name="boton" value="7">
        <input type="submit" name="boton" value="8">
        <input type="submit" name="boton" value="9">
        <input type="submit" name="boton" value="10">
        <br><br/>
    </form>

</body>
</html>



<?php

    // Creamos una variable que llevara el conteo

    $numeroInicial = 1;
    
    // Si el post no esta vacio hacemos lo siguiente
    if ($_POST)
    {
        // recibimos el valor post
        $tabla = $_POST['boton'];

        // Inicializamos el ciclo con do que significa hacer y while que significa mientras 

        do
        {   
            $res = $numeroInicial * $tabla;
            echo $tabla.' x '.$numeroInicial.' = '.$res.'<br>';
            $numeroInicial++;
        } while ($numeroInicial<=10);
    } 

?>

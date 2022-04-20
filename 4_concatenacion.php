<?php
if($_POST){
    if($_POST['nombre'] == null){
        echo "Debes de incluir tu nombre.";
    }
    else if($_POST['apellido'] == null){
        echo "Debes incluir tambien tu apellido.";
    }
    
    else{
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        echo "Hola ".$nombre." ".$apellido; // Concatenacion con el uso de puntos
    }
}
    
    else{
            echo "Envie sus datos.";
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <form action="4_concatenacion.php" method="post"><br/>
        Nombre:
        <input type="text" name="nombre" id="">
        <br/>
        Apellido:
        <input type="text" name="apellido" id="">
        <br/>
        <input type="submit" value="Enviar">
       
    </form>    
</body>
</html>
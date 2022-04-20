<?php


// Con esta condicion verificamos que el metodo $_POST no este vacio

if ($_POST){ 
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];;
    if ($nombre == null || $apellido == null || $correo == null ) {
        echo "Por favor llene los campos, no puede dejar esos campos vacios.";       
} 
    else {
        echo "tu nombre es: ".$nombre." y tu apellido: ".$apellido. " y tu correo: ".$correo;
    } 
}
else {
    echo "Por favor llene los campos...";
}
?>
    

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mi formulario</title>
    </head>
    <body>
        <form action="2datosPOST.php" method="post">
            <input type="text" name="nombre" id="Nom" placeholder="hola" >
            <input type="text" name="apellido" id="Ape" placeholder="apellido" > 
            <input type="email" name="correo" id=""placeholder="correo" >
            <input type="password" name="password" id="" placeholder="contraseña">
            <input type="submit" value="Enviar">
        </form>
    </body>
    </html>
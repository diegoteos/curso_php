<?php

$servidor = "localhost"; // 127.0.0.1
$usuario = "root";
$contraseña = "";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $cons = "SELECT * FROM `fotos` WHERE `id` = 8";

    $sentencia = $conexion->prepare($cons);
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();

    //print_r($resultado);

    foreach($resultado as $foto){
        echo $foto['id'] . ' ' . $foto['nombre'] . ' ' . $foto['ruta'] . '<br/>';
    }

    echo "Conexion establecida.";


} catch (PDOException $error) {
    echo "Conexion erronea" . $error;
}

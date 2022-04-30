<?php

$servidor = "localhost"; // 127.0.0.1
$usuario = "root";
$contraseña = "";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexion establecida.";
} catch (PDOException $error) {
    echo "Conexion erronea" . $error;
}



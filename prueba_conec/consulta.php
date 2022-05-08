<?php

if (isset($_POST['telefono'])){
    $telefono = $_POST['telefono'];
}else {
    echo "Debe de ingresar un numero de telefono para consultar en la db";
}

$servidor = "localhost"; // 127.0.0.1
$usuario = "root";
$contraseña = "";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=expertajes", $usuario, $contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM `exp` WHERE `COL 17`= $telefono;";

    //$sql = "SELECT * FROM `01_30_noviembre_2020`";

    $sentencia = $conexion->prepare($sql);
    $sentencia->execute();

    $resultado = $sentencia->fetchAll();

   // print_r($resultado);

    foreach($resultado as $abonado) {
        echo 'Nombres: ' . $abonado['COL 8']."<br/> Apellidos: ".$abonado['COL 9'] ." ". ' <br/>DPI: '.$abonado['COL 10']."<br> Nit:".$abonado['11']."<br> Correo:".$abonado['13'] .'<br><br><br/>';
    }
    

    echo "Conexion establecida.";
} catch (PDOException $error) {
    echo "Conexion erronea" . $error;
}

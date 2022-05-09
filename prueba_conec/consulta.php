<?php

if (isset($_POST['telefono']) && empty($_POST['dpi'])) {
    $telefono = $_POST['telefono'];


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

        foreach ($resultado as $abonado) {
            echo 'Nombres: ' . $abonado['COL 8'] . "<br/> Apellidos: " . $abonado['COL 9'] . " " . ' <br/>DPI: ' . $abonado['COL 10'] . "<br> Nit:" . $abonado['11'] . "<br> Correo:" . $abonado['13'] . "<br> Departamento:" . $abonado['17'] .  "<br> Municipio:" . $abonado['18'] .  "<br> Dirección:" . $abonado['19'] . '<br><br><br/>';
        }


        echo "Conexion establecida.";
    } catch (PDOException $error) {
        echo "Conexion erronea" . $error;
    }

} elseif (isset($_POST['dpi']) && empty($_POST['telefono'])) {
    $dpi = $_POST['dpi'];


    $servidor = "localhost"; // 127.0.0.1
    $usuario = "root";
    $contraseña = "";

    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=expertajes", $usuario, $contraseña);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM `exp` WHERE `COL 10`= $dpi;";

        $sentencia = $conexion->prepare($sql);
        $sentencia->execute();

        $resultado = $sentencia->fetchAll();

        foreach ($resultado as $persona) {
            echo 'Nombres: ' . $persona['COL 8'] . "<br/> Apellidos: " . $persona['COL 9'] . " " . ' <br/>DPI: ' . $persona['COL 10'] . "<br> Nit:" . $persona['11'] . "<br> Correo:" . $persona['13'] . "<br> Departamento:" . $persona['17'] .  "<br> Municipio:" . $persona['18'] .  "<br> Dirección:" . $persona['19'] . '<br><br><br/>';
        }


        echo "Conexion establecida.";
    } catch (PDOException $error) {
        echo "Conexion erronea" . $error;
    }
} elseif (isset($_POST['dpi']) && !empty($_POST['telefono']) || isset($_POST['telefono']) && !empty($_POST['dpi'])) {
    echo 'Solo puede hacer una consulta, o de telefono o de DPI.';
}
else {
    echo "Debe de ingresar una consulta para que se le muestre algun resultado.";
}

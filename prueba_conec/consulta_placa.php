<?php
/*
if (!empty($_POST['placa'])) {
    $tipoPlaca = $_POST['placa'];



    $servidor = "localhost"; // 127.0.0.1
    $usuario = "root";
    $contraseña = "";

    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=expertajes", $usuario, $contraseña);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
        $sql = "SELECT * FROM `exp` WHERE `COL 22` LIKE $tipoPlaca;";


        $sentencia = $conexion->prepare($sql);
        $sentencia->execute();

        $resultado = $sentencia->fetchAll();

        if (empty($resultado)) {
            echo "<br> <h1><center>No hay registros con los datos consultados.</center></h1><br><br />";
        } else {
            foreach ($resultado as $abonado) {
                echo 'Nombres: ' . $abonado['COL 8'] . "<br/> Apellidos: " . $abonado['COL 9'] . " " . ' <br/>DPI: ' . $abonado['COL 10'] . "<br> Nit:" . $abonado['11'] . "<br> Correo:" . $abonado['13'] . "<br> Departamento:" . $abonado['17'] .  "<br> Municipio:" . $abonado['18'] .  "<br> Dirección:" . $abonado['19'] . '<br><br><br/>';
            }
        }




        echo "Exitos en su buen dia.";
    } catch (PDOException $error) {
        echo "Conexion erronea" . $error;
    }
}  elseif (isset($_POST['dpi']) && !empty($_POST['telefono']) || isset($_POST['telefono']) && !empty($_POST['dpi'])) {
    echo '<script> alert ("Solo puede hacer una consulta, o de telefono o de DPI.");</script>';
} else {
    echo "<br> <h1><center>Debe de ingresar una consulta para que se le muestre algun resultado.</center></h1>";
}

*/

if (!empty($_POST['tipoPlaca']) && !empty($_POST['placa'])) {
    $tipo = $_POST['tipoPlaca'];
    $placa = $_POST['placa'];


    $servidor = "localhost"; // 127.0.0.1
    $usuario = "root";
    $contraseña = "";

    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=expertajes", $usuario, $contraseña);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM `exp` WHERE `COL 21` = '$tipo' && `COL 22` = '$placa'";


        $sentencia = $conexion->prepare($sql);
        $sentencia->execute();

        $resultado = $sentencia->fetchAll();

        if (empty($resultado)) {
            echo "<br> <h1><center>No hay registros con los datos consultados.</center></h1><br><br />";
        } else {
            foreach ($resultado as $abonado) {
                echo 'PLACAS: ' . $tipo . $placa .' <br/> Nombres: ' . $abonado['COL 8'] . "<br/> Apellidos: " . $abonado['COL 9'] . " " . ' <br/>DPI: ' . $abonado['COL 10'] . "<br> Nit:" . $abonado['11'] . "<br> Correo:" . $abonado['13'] . "<br> Departamento:" . $abonado['17'] .  "<br> Municipio:" . $abonado['18'] .  "<br> Dirección:" . $abonado['19'] .  "<br> Telefono:" . $abonado['16'] . '<br><br><br/>';
            }
        }




        echo "Exitos en su buen dia.";
    } catch (PDOException $error) {
        echo "Conexion erronea" . $error;
    }
}elseif (empty($_POST['tipoPlaca']) && empty($_POST['placa'])) {
    echo "Debe llenar los dos campos requeridos";
}elseif (!empty($_POST['placa']) && empty($_POST['tipoPlaca'])) {
    echo "Debe de indicar el tipo de placa";
}elseif (!empty($_POST['tipoPlaca']) && empty($_POST['placa'])) {
    echo "Debe de llenar el numero de placa";
}
<H2>Presione una de las opciones:</H2><br>
<?php

if ($_POST){

    $boton = $_POST['btnValor'];


    # USO DE SWITCH POR CASOS 

    switch ($boton) {
        case '1':
            echo 'Haciendo uso de switch: El  primero<br><br/>';
            break;

         case '2':
            echo 'Haciendo uso de switch: El  segundo<br><br/>';
            break;

        case '3':
            echo 'Haciendo uso de switch: El  tercero<br><br/>';
            break;
        
            # SI NO DEFINO NINGUN OTRO VALOR O EXISTE OTRO DE LOS QUE NO AGREGUE MEDIANTE UN CASO, POR DEFECTO SE EJECUTA ESTA ACCION
        default:     
            echo 'Haciendo uso de switch: No presiono ninguno<br/>';
            break;
    } 


    #  PRACTICA EXTRA DE UN IF ANIDADO

        if ($_POST['btnValor'] != '3'){
            if ($_POST['btnValor'] == '1'){
                echo 'Usando if: Usted presiono la opcion numero 1';
            }
            if ($_POST['btnValor'] == '2'){
                echo 'Usando if: Usted presiono la opcion numero 2';
            }
        }else{
            echo 'Usando if: Usted presiono la opcion numero 3';
        }


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
<form action="12_switch.php" method="post">

    <input type="submit" name="btnValor" value="1">
    <br/>
    <input type="submit" name="btnValor" value="2">
    <br/>
    <input type="submit" name="btnValor" value="3">

</form>
</body>
</html>
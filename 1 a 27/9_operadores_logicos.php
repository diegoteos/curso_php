<?php

if($_POST){

    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];


    # OPERADORES LOGICOS && ES UNA AND "ESTE Y ESTE" Y EL || ES UN OR "EL UNO O EL OTRO"
    
 if(($valorA != $valorB) && ($valorA > $valorB)) {
     echo 'El valor A es diferente que el valor B y tambien es mayor';
 }
 if($valorA == $valorB){
     echo 'El valor A es igual que el valor B';
 }
 if($valorA < $valorB){
     echo 'El valor A es menor que el valor B';
 }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>
<body>
    <form action="9_operadores_logicos.php" method="post">
    valor A:
    <input type="text" name="valorA" id="">
    <br/>
    valor B:
    <input type="text" name="valorB" id="">
    <br/>
    <input type="submit" value="Calcular">
    </form>
</body>
</html>
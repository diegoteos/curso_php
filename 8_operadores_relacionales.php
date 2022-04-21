<?php

if($_POST){

    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

 if($valorA > $valorB){
     echo 'El valor A es mayor que el valor B';
 }
 elseif($valorA == $valorB){
     echo 'El valor A es igual que el valor B';
 }
 else{
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
    <form action="8_operadores_relacionales.php" method="post">
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
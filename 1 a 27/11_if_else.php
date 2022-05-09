<?php

if($_POST){

    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

 if($valorA != $valorB){        // pregunta si A es diferente de B

     echo 'El valor A es diferente que el valor B';

    }else{                      // en caso contrario se ejecuta el else
        
        echo 'El valor de A es igual al valor de B';

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
    <form action="11_if_else.php" method="post">
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
<?php

if($_POST){

    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    $suma = $valorA + $valorB;
    $resta = $valorA - $valorB;
    $division = $valorA / $valorB;
    $multiplicacion = $valorA * $valorB;
    echo 'la suma es: '.$suma.'<br/>';
    echo 'la resta es: '.$resta.'<br/>';
    echo 'la division es: '.$division.'<br/>';
    echo 'la multiplicacion es: '.$multiplicacion.'<br/><br/>';   
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
    <form action="7_operadores_aritmeticos.php" method="post">
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
<?php

if($_POST){

    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];
    $suma = $valorA + $valorB;
    $resta = $valorA - $valorB;
    $division = $valorA / $valorB;
    $multiplicacion = $valorA * $valorB;
    echo "la suma es: ".$suma."<br/>";
    echo "la resta es: ".$resta."<br/>";
    echo "la division es: ".$division."<br/>";
    echo "la multiplicacion es: ".$multiplicacion."<br/>"."<br/>";
 
    if($valorA ==$valorB)
        {
            echo "El valor de A es igual al de B<br/>";
        }
    if ($valorA != $valorB) {
        echo "El valor de A no es igual al valor de B <br/>";
        if($valorA < $valorB){
            echo "El valor de A es menor que el de B<br/>";
        }
        
    }
    if( ($valorA==$valorB) && ($valorA==4)){
        
        echo "El valor de A es igual a B y es un numero 4";
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
    <form action="10_if_anidado.php" method="post">
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
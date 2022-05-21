<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saber si un numero es primo</title>
</head>

<body>
    <form action="numeroPrimo.php" method="post">

        Ingresa el numero: <input type="number" name="numero" id="">
        <br>
        <button type="submit">Enviar</button>

    </form>
</body>

</html>
<?php
$alerta = 0;
if ($_POST) {
    $numero = $_POST['numero'];
    if ($numero <= 0) {
        echo "Un numero primo es un entero positivo, por lo que el $numero no lo es.";
    } else {
        if ($numero == 1) {
            echo "el numero $numero no es primo";
        } elseif ($numero == 2) {
            echo "el numero $numero si es primo";
        } else {
            for ($i = 2; $i < $numero; $i++) {
                $resultado = $numero / $i;
                $residuo = $numero % $i;

                if (is_integer($resultado)) {

                    echo "El numero $numero no es un numero primo porque es divisible por $i y el resultado es $resultado. <br/>";
                    $alerta = 1;
                    break;
                }
            }
            if ($alerta != 1) { ?>

                <script>
                    alert("<?php echo "El numero $numero si es primo, este codigo es simple pero funciona"; ?>")
                </script>
<?php
            }
        }
    }
}



?>
<?php
// iniciamos sesion
session_start();

$_SESSION['usuario'] = 'develoteca';
$_SESSION['estatus'] = 'logueado';

echo 'Session iniciada' . ':<br/>';
echo 'Usuario: ' . $_SESSION['usuario'] . ' estatus: ' . $_SESSION['estatus'] . '<br/>';

if ($_SESSION['usuario'] == 'develoteca') {
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Prueba sesion</title>
    </head>

    <body>
        <h1>Hola mundo</h1>
    </body>

    </html>
<?php

} else {
    echo 'Usted no esta logueado.';
}

?>

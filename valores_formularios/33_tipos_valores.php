<?php

$txtNombre = "";
if ($_POST) {
    $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";  // if ternario
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Formulario</title>
</head>

<body>
    <?php if (!empty($_POST['txtNombre'])) { ?>
        <strong>Hola </strong>: <?php echo $txtNombre; ?>
    <?php } ?>


    <form action="33_tipos_valores.php" method="post">
        <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre" id="">
        <button type="submit">Enviar informacion</button>
    </form>
</body>

</html>
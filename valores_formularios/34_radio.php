<?php

$txtNombre = "";

$rdgLenguaje = "";

if ($_POST) {
    $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";  // if ternario
    $rdgLenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "";  // if ternario
  
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
        <br/>
        <strong>Tu lenguaje es: </strong><?php echo $rdgLenguaje; ?>
    <?php } ?>


    <form action="34_radio.php" method="post">
        Nombre: <br/>
        <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre" id="">
        <br/>

        ¿Qué tecnologia te gusta?: <br/>
        <br/>PHP <input type="radio" <?php echo ($rdgLenguaje=="php")?"checked": ""?> name="lenguaje" value="php" id=""><br/>
        <br/>html <input type="radio" <?php echo ($rdgLenguaje=="html")?"checked": ""?> name="lenguaje" value="html" id=""><br/>
        <br/>css <input type="radio" <?php echo ($rdgLenguaje=="css")?"checked": ""?> name="lenguaje" value="css" id=""><br/><br/>
        


        <button type="submit">Enviar informacion</button>
    </form>
</body>

</html>
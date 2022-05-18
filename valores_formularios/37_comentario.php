<?php

$txtNombre = "";

$rdgLenguaje = "";

$chkphp = "";
$chkhtml = "";
$chkcss = "";

$lsAnime = "";
$txtComentario ="";

if ($_POST) {
    $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";  // if ternario
    $rdgLenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "";  // if ternario

    $chkphp = (isset($_POST['chkphp']) == "si") ? "checked" : "";
    $chkhtml = (isset($_POST['chkhtml']) == "si") ? "checked" : "";
    $chkcss = (isset($_POST['chkcss']) == "si") ? "checked" : "";

    $lsAnime = (isset($_POST['lsAnime'])) ? $_POST['lsAnime'] : "";
    $txtComentario = (isset($_POST['txtComentario'])) ? $_POST['txtComentario'] : "";

    
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
        <br />
        <strong>Tu lenguaje es: </strong><?php echo $rdgLenguaje; ?>
        <br />
        <strong>Estas aprendiendo: </strong><br />
        - <?php echo ($chkphp == "checked") ? "PHP" : ""; ?><br />
        - <?php echo ($chkhtml == "checked") ? "HTML" : ""; ?><br />
        - <?php echo ($chkcss == "checked") ? "CSS" : ""; ?><br />
        <br />
        <strong>Tu anime es: </strong>
        <?php echo $lsAnime; ?>
        <br />
        <strong>Tu mensaje es:</strong><?php echo $txtComentario; ?><br />


    <?php } ?>


    <form action="37_comentario.php" method="post">
        Nombre: <br />
        <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre" id="">
        <br />

        ¿Qué tecnologia te gusta?: <br />
        <br />PHP <input type="radio" <?php echo ($rdgLenguaje == "php") ? "checked" : "" ?> name="lenguaje" value="php" id=""><br />
        <br />html <input type="radio" <?php echo ($rdgLenguaje == "html") ? "checked" : "" ?> name="lenguaje" value="html" id=""><br />
        <br />css <input type="radio" <?php echo ($rdgLenguaje == "css") ? "checked" : "" ?> name="lenguaje" value="css" id=""><br /><br />

        Estás aprendiendo:...
        <br /> php: <input type="checkbox" <?php echo $chkphp; ?> name="chkphp" value="si" id="">
        <br /> html: <input type="checkbox" <?php echo $chkhtml; ?> name="chkhtml" value="si" id="">
        <br /> css: <input type="checkbox" <?php echo $chkcss; ?> name="chkcss" value="si" id="">

        <br><br />
        ¿Qué anime te gusta?...
        <select name="lsAnime" id="">
            <option value="">Ninguna Serie</option>
            <option value="naruto" <?php echo ($lsAnime == "naruto") ? "selected" : "" ?>>Naruto</option>
            <option value="bleach" <?php echo ($lsAnime == "bleach") ? "selected" : "" ?>>Bleach</option>
            <option value="dragon" <?php echo ($lsAnime == "dragon") ? "selected" : "" ?>>Dragon Ball</option>
            <option value="saul" <?php echo ($lsAnime == "saul") ? "selected" : "" ?>>Saul</option>
        </select>
        <br><br />


        ¿Tienes alguna duda?<br />
        <textarea name="txtComentario" id="" cols="30" rows="10">
<?php echo $txtComentario; ?>
        </textarea>
        <br><br />


        <button type="submit">Enviar informacion</button>
    </form>
</body>

</html>
<?php
$DateAndTime = date('h:i:s a', time());
$NuevaFecha = strtotime('-8 hour', strtotime($DateAndTime));
$NuevaFecha = strtotime('-00 minute', $NuevaFecha);
$NuevaFecha = strtotime('-00 second', $NuevaFecha);
$NuevaFecha = date('H:i:s', $NuevaFecha);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dime si es hora de dormir</title>
</head>

<body>
    <h4>Es hora de ir a dormir?</h4>
    <form action="dormir.php" method="post">
        <input type="timestamp" name="hora" value="<?php echo $NuevaFecha; ?>" value="24" id="">
        <button type="submit">Consultar la hora</button>
    </form>
</body>

</html>


<?php
$am = '06:00:00';
$pm = '23:00:00';
if (!empty($_POST['hora'])) {
    $hora = $_POST['hora'];
    if ($hora <= $am) {
        echo "Anda dormite, es de madrugada ya son las $hora";
        echo "<script> alert('Anda dormite, es de madrugada ya son las $hora');</script>";
    } elseif (($hora >= $am) && ($hora <= $pm)) {
        echo 'Es buena hora, hecha penca programando, apenas son las ' . $hora;
    } elseif ($hora >= $pm) {
        echo "Ya es noche, anda dormite, ya son las $hora";
        echo "<script> alert('Ya es noche, anda dormite, ya son las $hora ');</script>";
    }
}

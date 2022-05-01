<?php
$DateAndTime = date('h:i:s a', time()); 
$NuevaFecha = strtotime ( '10 hour' , strtotime ($DateAndTime)); 
$NuevaFecha = strtotime ( '-00 minute' , $NuevaFecha ) ; 
$NuevaFecha = strtotime ( '-00 second' , $NuevaFecha ) ; 
$NuevaFecha = date ('H:i:s', $NuevaFecha); 




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
        <button type="submit">Enviar la hora</button>
        
    </form>
</body>
</html>


<?php
if (!empty($_POST['hora'])){
    $hora = $_POST['hora'];
    if ($hora >= 23){
        echo 'anda dormite, ya es tarde son las ' . $hora;
    }elseif ($hora < 06.){
        echo 'Ya es de madrugada vos, anda dormite, son las ' . $hora;
    }
    else {
        echo 'Segui chingando con la progra, porque aun es muy temprano...';
    }
}


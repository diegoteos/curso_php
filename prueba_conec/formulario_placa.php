<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consultar numero</title>
</head>

<body>
    <h1>Ingresa el dato que quieres consultar</h1>
    <form action="consulta_placa.php" method="post">
        <br><br>
        <select name="tipoPlaca" id="">
            <option value="">Tipo placa:</option>
            <option value="P">Particular</option>
            <option value="C">Comercial</option>
            <option value="A">Alquiler</option>
            <option value="M">Motocicleta</option>
        </select>
        <p>Placa:</p>
        <input type="txt" maxlength="6" name="placa" id="">  
        <br><br>
        <input type="submit" value="Consultar">
    </form>
    <br>

</body>

</html>
<?php
require_once 'conexion.php';


$datos = mysqli_query($conexion, "SELECT cui FROM `personas` WHERE `cui` = 1872979830603;");

if (mysqli_num_rows($datos) == 0) {

    echo "Datos que busca no existe";
} else if (mysqli_num_rows($datos) != 0) {
    echo 'El dato existe.';
}

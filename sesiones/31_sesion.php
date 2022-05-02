<?php

session_start();

if(isset($_SESSION['usuario'])){
    echo 'Usuario: ' . $_SESSION['usuario'] . ' estatus: ' . $_SESSION['estatus'] . '<br/>';

} else {
    echo 'no hay datos';
}


<?php

echo "Hola, el include es una funcion la cual te incluye otro archivo PHP.  Si este archivo tiene error o no existe, solo te lanza una advertencia y se sigue ejecutando el resto del codigo a diferencia del require" . '<br>';
include '43_1_require.php';
include_once '43_1_require.php';
require_once '42_1_include.php';
?>
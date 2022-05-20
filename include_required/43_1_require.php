<?php
echo "Hola, el require es una funcion la cual cuando la usas debe existir indispensablemente el archivo que se requiere, si no existe o tiene error el codigo se detiene y no se ejecuta";
include_once '42_1_include.php';
include_once '43_1_require.php';
require_once '42_1_include.php';
?>
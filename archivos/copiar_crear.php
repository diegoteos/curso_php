<?php

$copiar = 'contenido.txt';

$abrimos = fopen($copiar, 'r');

$leemos = fread($abrimos, filesize($copiar));

$meter =  $leemos . ' Hola otra vez ya vine y ya me voy ';

$nombreDelArchivo = 'nuevos.txt';

$contenidoDelArchivo = $meter;

$archivoACrear = fopen($nombreDelArchivo, 'w');

fwrite($archivoACrear, $contenidoDelArchivo);

fclose($archivoACrear);




?>
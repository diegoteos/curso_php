<?php

$nombreArchvivo = 'archivo.pdf';

$contenidoArchivo = 'Hola saludos';

$archivoACrear = fopen($nombreArchvivo, 'w');

fwrite($archivoACrear, $contenidoArchivo);

fclose($archivoACrear);
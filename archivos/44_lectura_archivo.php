<?php


//abrimos un archivo para leer el contenido
//lo cargamos a una variable
$archivo = "contenido.txt";

// fopen abre el archivo modo lectura
$archivoAbierto = fopen($archivo, "r"); //abrimos el archivo

// leemos el archivo y metemos el contenido en una variable para luego imprimirla
$contenido = fread($archivoAbierto, filesize($archivo));


echo $contenido;



?>
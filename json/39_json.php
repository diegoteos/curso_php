<?php

$jsonContenido='[
{"nombre": "Diego", "apellido": "teos"},
{"nombre": "Jose", "apellido": "perez"}
]';

$resultado = json_decode($jsonContenido);

//print_r($resultado);

foreach ($resultado as $persona) {
    echo 'Tu nombre es: ' . ($persona->nombre) . " y tu apellido: " . ($persona->apellido) . "<br>";
}
?>
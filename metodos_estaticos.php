<?php

class UnaClase
{
    public static function unMetodo()   //metodo estatico
    {
        echo 'Hola soy un método estático';
    }
}

$obj = new UnaClase();
$obj->unMetodo();

UnaClase::unMetodo();  //sin necesidad de instanciar con un metodo estatico

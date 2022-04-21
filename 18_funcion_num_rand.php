<?php

//$numero = rand(4, 2);
//echo $numero;

$h1 = hash('md5', 'hola');

echo $h1.'<br/>';

$h2 = hash('md5', $h1);

echo '<br><br>';

echo $h1.$h2;

?>
<?php

$numero = rand(4, 2);
echo 'Numero random: '.$numero.'<br><br/>';


echo "Aca estamos usando md5 para cifrar el string hola <br/>";
$h1 = hash('md5', 'hola');

echo $h1.'<br><br/>';

echo "Aca estamos usando md5 para cifrar el hash generado del string hola, <br/>";
$h2 = hash('md5', $h1);
echo $h2.'<br/>';

echo '<br><br>';

echo "Aca estamos estamos uniendo los dos valores hash por simple locura mia, como combinacion para crear un algoritmo de cifrado un poco mas seguro<br/>";
echo $h1.$h2;

?>
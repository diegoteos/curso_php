<?php


    # DEFINIMOS LOS VALORES CON EL INDICE QUE NOSOTROS QUERAMOS
    $frutas = array("p"=>"pera", "m"=>"manzana", "f"=>"fresa", "l"=>"licha");


    echo "<h1>Ejercicio 1</h1>";
    # VEMOS EL INDICE Y SUS VALORES
    print_r($frutas);

    # IMPRIMIMOS CON EL INDICE QUE DECLARAMOS
    echo '<br><br>'. $frutas['m'].'<br/>';


    # LEEMOS TODOS LOS ELEMENTOS CON EL CICLO FOREACH
    foreach($frutas as $indice =>& $valor) {
        
        echo "El valor: $valor tiene el indice: $indice <br><br/>";
    }



echo '<br><br><br>';
echo "<h1>Ejercicio 2</h1>";
$juguetes = array("p"=>"pelota", "m"=>"muñeca", "c"=>"carrito", "j"=>"juguetes");

var_dump($juguetes);

foreach($juguetes as $prueba=>$prueba2){
    echo '<br><br><br>'."El indice de cada juguete es: $prueba y los juguetes son los siguientes: $prueba2";
}


?>
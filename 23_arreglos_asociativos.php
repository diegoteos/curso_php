<?php


    # DEFINIMOS LOS VALORES CON EL INDICE QUE NOSOTROS QUERAMOS
    $frutas = array("p"=>"pera", "m"=>"manzana", "f"=>"fresa", "l"=>"licha");

    # VEMOS EL INDICE Y SUS VALORES
    print_r($frutas);
    echo '<br><br>'. $frutas['m'].'<br/>';


    foreach($frutas as $indice =>&$valores) {

        echo $indice.'<br/>';

    }




?>
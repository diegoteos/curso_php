<?php


    # DEFINIMOS LOS VALORES CON EL INDICE QUE NOSOTROS QUERAMOS
    $frutas = array("p"=>"pera", "m"=>"manzana", "f"=>"fresa", "l"=>"licha");

    # VEMOS EL INDICE Y SUS VALORES
    print_r($frutas);

    # IMPRIMIMOS CON EL INDICE QUE DECLARAMOS
    echo '<br><br>'. $frutas['m'].'<br/>';


    # LEEMOS TODOS LOS ELEMENTOS CON EL CICLO FOREACH
    foreach($frutas as $indice =>&$valor) {
        
        echo "El valor: $valor tiene el indice: $indice <br><br/>";
    }

?>
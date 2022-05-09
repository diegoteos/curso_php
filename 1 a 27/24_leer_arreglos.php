<?php

    $frutas= array("Fresa", "Pera", "Manzana", "Toronja");


    # ARRAY_PUSH ES UNA FUNCION QUE AYUDA A AGREGAR ELEMENTOS  AL ARREGLO
    array_push($frutas, "Uva", "Aguacate"); 

    print_r($frutas);


    echo "<br><br>";

    foreach($frutas as $indice => $fruta){
        echo "las frutas son las siguientes: $fruta<br><br>";
    }

?>
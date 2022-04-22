<?php

            # los arreglos son un conjunto de datos 
            # array es una funcion con un arreglo o conjunto de datos 
    
    $frutas = array("manzana", "fresa", "pera");

            # funcion print_r nos muestra como esta organizada la 
            # informacion segun su indice empezando con la posicion 0


            #vemos los valores del array con su indice
    ;
    print_r($frutas);
    echo 'forma 1<br />';
    echo $frutas[2];        //IMPRIMIMOS SEGUN EL INDICE

    echo '<br><br>';

            # USO DE FOR PARA LEER TODO EL ARREGLO
    echo 'Uso de for para leer el arreglo completo<br />';

    for ($indice = 0; $indice < 3; $indice ++) 
    {

        echo $frutas[$indice].'<br><br>';

    }

    
            # forma de ver los valores con print_r
    echo '<br><br><br><br />';
    echo 'ADICIONALES';
    echo 'forma 2';
    echo('<pre>');
    print_r($frutas);
    echo('</pre>');
    

            # forma de ver los valores con var_dump
    echo '<br>forma 3<br />';
    echo('<pre>');
    var_dump($frutas);
    echo('</pre>');

?>
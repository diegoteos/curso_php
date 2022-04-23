<?php
     
     class persona
     {
        public $nombre;   // propiedades...

        public function asignarNombre($nuevoNombre){  //acciones o metodos...

            $this->nombre = $nuevoNombre;

        }
        public function imprimirNombre() {

            echo "Hola soy ".$this->nombre;
        }
     } 

     $objAlumno = new persona(); // instancia o creacion de un objeto...
     $objAlumno->asignarNombre("diego teos"); // llamando un metodod

     echo $objAlumno->nombre."<br/>";   // imprimimos una propiedad

     $objAlumno2 = new persona(); 
     $objAlumno2->asignarNombre("juan carlos");
     $objAlumno2->imprimirNombre(); 

     echo $objAlumno2->nombre; // imprimos una propiedad


?>
<?php
     
     class persona
     {
        public $nombre;         // propiedades...

        private $edad;          // solo se puede acceder desde la clase que lo define
        protected $altura;      // encapsulamiento solo se puede acceder mediante la misma clase y las clases heredadas 

        public function asignarNombre($nuevoNombre){  //acciones o metodos...

            $this->nombre = $nuevoNombre;

        }
        public function imprimirNombre() {

            echo "Hola soy ".$this->nombre;
        }

        public function mostrarEdad() { 

            $this->edad = 20;
            return $this->edad;
        }
     } 

     $objAlumno = new persona(); // instancia o creacion de un objeto...
     $objAlumno->asignarNombre("diego teos"); // llamando un metodod

     echo $objAlumno->nombre."<br/>";   // imprimimos una propiedad

     $objAlumno2 = new persona(); 
     $objAlumno2->asignarNombre("juan carlos");
     $objAlumno2->imprimirNombre(); 

     echo $objAlumno2->nombre; // imprimos una propiedad

     echo $objAlumno2->nombre;
     echo ' '.$objAlumno2->mostrarEdad();


?>
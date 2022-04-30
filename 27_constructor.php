<?php
     
     class persona
     {
        public $nombre;         // propiedades...

        private $edad;          // solo se puede acceder desde la clase que lo define
        protected $altura;      // encapsulamiento solo se puede acceder mediante la misma clase y las clases heredadas 


        function __construct($nuevoNombre)
        {
            $this->nombre =$nuevoNombre;
        }

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

     $objAlumno = new persona("Diego Teos"); // instancia o creacion de un objeto...
     //$objAlumno->asignarNombre("diego teos"); // llamando un metodod
     $objAlumno->imprimirNombre();
 

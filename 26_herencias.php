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

     class trabajador extends persona{

        public $puesto; // PROPIEDAD NUEVA

        public function presentarseComoTrabajador() {

            echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;

        }


     }

     $objTrabajador = new trabajador(); // instancia o creacion de un objeto...
     $objTrabajador->asignarNombre("diego teos"); // llamando un metodod
     $objTrabajador->puesto="Profesor";

     $objTrabajador->presentarseComoTrabajador();

 

?>
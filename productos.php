<?php
    class productos {
        private $nombre;
        protected $precio;
        protected $disponibilidad;
        protected $cantidad;

        public function __construct ($nombre,$precio,$disponibilidad,$cantidad){
            $this -> nombre = $nombre;
            $this -> precio = $precio;
            $this -> disponibilidad = $disponibilidad;
            $this -> cantidad = $cantidad;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->$nombre;
        }
        public function getPrecio(){
            return $this->precio;
        }
        public function setEdad($precio){
            $this->$precio;
        }
        public function getdisponibilid(){
            return $this->disponibilidad;
        }
        public function setDisponibilidad($disponibilidad){
            $this->$disponibilidad;
        }
        public function setcantidad(){
            return $this->cantidad;
        }
        public function getcantidad($cantidad){
            $this->$cantidad;
        }
        public function saludar(){
            echo "hola,mi nombre es".$this->nombre;
        }
    }
?>
<?php
    abstract class Persona {
        private $cedula;
        private $nombre1;
        private $nombre2;
        private $apellido1;
        private $apellido2;

        public function __construct($cedula, $nombre1, $nombre2, $apellido1, $apellido2) {
            $this->cedula = $cedula;
            $this->nombre1 = $nombre1;
            $this->nombre2 = $nombre2;
            $this->apellido1 = $apellido1;
            $this->apellido2 = $apellido2;
        }

        public function getCedula() {
            return $this->cedula;
        }
        public function getNombre1() {
            return $this->nombre1;
        }
        public function getNombre2() {
            return $this->nombre2;
        }
        public function getApellido1() {
            return $this->apellido1;
        }
        public function getApellido2() {
            return $this->apellido2;
        }

        public function setCedula($cedula) {   
            $this->cedula = $cedula;
        }
        public function setNombre1($nombre1) {   
            $this->nombre1 = $nombre1;
        }
        public function setNombre2($nombre2) {   
            $this->nombre2 = $nombre2;
        }
        public function setApellido1($apellido1) {   
            $this->apellido1 = $apellido1;
        }
        public function setApellido2($apellido2) {   
            $this->apellido2 = $apellido2;
        }
    }

?>
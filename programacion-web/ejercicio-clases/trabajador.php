<?php
    class Trabajador extends Persona {
        private $sueldo;

        function __constructor($cedula, $nombre1, $nombre2, $apellido1, $apellido2, $generacion, $saldo) 
        {
            parent::__constructor($cedula, $nombre1, $nombre2, $apellido1, $apellido2);
            $this->sueldo = $sueldo;
        } 

        public function getSueldo() {
            return $this->sueldo;
        }

        public function setSueldo() {
            $this->sueldo = $sueldo;
        }
    }
?>
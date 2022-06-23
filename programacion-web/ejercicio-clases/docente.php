<?php
    class Docente extends Trabajador {
        private $horasTrabajadas;

        function __constructor($cedula, $nombre1, $nombre2, $apellido1, $apellido2, 
        $generacion, $saldo, $horasTrabajadas) 
        {
            parent::__constructor($cedula, $nombre1, $nombre2, $apellido1, $apellido2, $generacion, $saldo);
            $this->horasTrabajadas = $horasTrabajadas;
        }

        public function getHorasTrabajadas() {
            return $this->horasTrabajadas;
        }

        public function setHorasTrabajadas() {
            $this->horasTrabajadas = $horasTrabajadas;
        }

        public function calcularSueldo() {
            parent::$sueldo = parent::$sueldo 
            + ($this->horasTrabajadas*1.1);
        }
    }
?>
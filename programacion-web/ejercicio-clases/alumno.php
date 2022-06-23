<?php
    class Alumno extends Persona {
        private $generacion;
        private $grupo;

        function __constructor($cedula, $nombre1, $nombre2, $apellido1, $apellido2, $generacion, $grupo) 
        {
            parent::__constructor($cedula, $nombre1, $nombre2, $apellido1, $apellido2);
            $this->generacion = $generacion;
            $this->grupo = $grupo;
        } 

        public function getGeneracion() {
            return $this->generacion;
        }
        public function getGrupo() {
            return $this->grupo;
        }
        public function setGeneracion($generacion) {   
            $this->generacion = $generacion;
        }
        public function setGrupo($grupo) {   
            $this->grupo = $grupo;
        }

    }
?>
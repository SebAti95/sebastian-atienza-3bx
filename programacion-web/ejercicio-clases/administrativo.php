<?php
    class Administrativo extends Trabajador {
        
        function __constructor($cedula, $nombre1, $nombre2, $apellido1, $apellido2, 
        $generacion, $saldo)
        {
            parent::__constructor($cedula, $nombre1, $nombre2, $apellido1, $apellido2, 
            $generacion, $saldo);
        }

    }
?>
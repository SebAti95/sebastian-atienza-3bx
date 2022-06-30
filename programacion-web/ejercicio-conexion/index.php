<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Probando PDO</title>
</head>
<body>


</body>
</html>
    
<?php
    include_once("conexion.php");

    try{
        $conexion = new Conexion();
        echo "Conexión establecida con éxito";
    } catch(Exception $ex){
        echo "Error al conectar a la base de datos";
    }


?>



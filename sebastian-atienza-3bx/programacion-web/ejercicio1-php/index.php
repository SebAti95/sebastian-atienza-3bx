<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>

<body class="d-flex flex-column min-vh-100 bg-image" style="background-image: url('imagenes/fondo.jpg'); align-self: auto; object-fit: contain;">
    <nav class="navbar navbar-expand-lg" style="background-color: rgb(101, 33, 255);">
        <div class="container-fluid">
            <div class="nav-brand">
                <a href="#"><img src="imagenes/logo.png" alt="logo" width="120" class="bg-white rounded p-1 me-2"></a>
            </div>
        </div>
    </nav>

    <section class="d-flex justify-content-center align-items-center mt-4">
            <form method="POST">
                <div class="card col-sm-10 p-3">
                    <div class="mb-2">
                        <h4>Formulario</h4>
                        <p>Ingrese los datos correctos para continuar</p>
                    </div>
                    <label for="exampleName" class="form-label" >Nombre</label>
                    <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Ej: Pepe" required>
                    <br>
                    <label for="examplePassword" class="form-label">Contraseña</label>
                    <input type="text" class="form-control" id="inputPassword" name="inputPassword" placeholder="Ej: 20ased3l" required>
                    <br>
                    <label for="exampleCedula" class="form-label">Cedula</label>
                    <input type="number" class="form-control" id="inputCedula" name="inputCedula" min="500000" aria-describedby="cedula" placeholder="Ej: 95107349">
                    <br>
                    <label for="exampleCorreo" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="roberto@gmail.com" required>
                    <br>
                    <input type="submit">Enviar</input> 
                </div>   
            </form>
    </section>

    <?php
        echo '<br>';
        if (isset ($_REQUEST ['inputName']) && 
        isset ($_REQUEST ['inputPassword']) && 
        isset ($_REQUEST ['inputCedula']) && 
        isset ($_REQUEST ['inputEmail'])) {
            $nombre = $_REQUEST ['inputName'];
            $password = $_REQUEST ['inputPassword'];
            $cedula = $_REQUEST ['inputCedula'];
            $email = $_REQUEST ['inputEmail'];
            
            $salida = '<div class="alert alert-primary">';
            $salida = $salida.'<strong>Nombre: </strong>' . $nombre . '<br>';
            $salida = $salida.'<strong>Contraseña: </strong>' . $password . '<br>';
            $salida = $salida.'<strong>Cedula: </strong>' . $cedula . '<br>';
            $salida = $salida.'<strong>Correo: </strong>' . $email . '<br>';
            $salida = $salida.'</div>';
        }

        function revision($salida) {
            $salida = trim(stripslashes(htmlspecialchars($salida)));
            return $salida;
        }
        echo $salida;
    ?>

</body>
</html>
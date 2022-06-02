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
            <form method="POST" action="login.php">
                <div class="card col-sm-10 p-3">
                    <div class="mb-2">
                        <h4>Login</h4>
                        <p>Ingrese los datos correctos para iniciar sesión</p>
                    </div>
                    <label for="exampleName" class="form-label" >Nombre de Usuario</label>
                    <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Ej: Pepe" required>
                    <br>
                    <label for="examplePassword" class="form-label">Contraseña</label>
                    <input type="text" class="form-control" id="inputPassword" name="inputPassword" placeholder="Ej: 20ased3l" required>
                    <br>
                    <input type="submit">
                </div>   
            </form>
    </section>

    <?php
        echo '<br>';

        if (isset ($_REQUEST ['inputName']) && 
        isset ($_REQUEST ['inputPassword'])) {
            $user = $_REQUEST ['inputName'];
            $pass = $_REQUEST ['inputPassword'];
            $user = revisionU($user);
            $pass = revisionP($pass);
            
            if ($user == "admin" &&  $pass == "admin") {
                session_start();
                $_SESSION['usuario'] = $user;
                header('Location: index.php');
            } else {
                echo "Usuario y/o Contraseña Incorrectos";
            }
        }

        function revisionU($user) {
            $user = trim(stripslashes(htmlspecialchars($user)));
            return $user;
        }

        function revisionP($pass) {
            $pass = trim(stripslashes(htmlspecialchars($pass)));
            return $pass;
        }
    ?>

</body>
</html>
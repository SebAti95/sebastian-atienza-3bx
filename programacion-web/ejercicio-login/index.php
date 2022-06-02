<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
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
    session_start();
        echo "Bienvenido".$_SESSION['usuario'];
    ?>
</body>
</html>
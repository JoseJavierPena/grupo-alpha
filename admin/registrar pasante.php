
<?php

session_start();

include'../conexion db/db.php';

$usuario = $_SESSION['nombre'];
if(!isset($usuario)){

    header("location:../logins/login.html");

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="stylesheet" type=" text/css" href="../assets/css/bootstrap.min.css" media="screen">
    <title>Registrar pasante</title>

    <link rel="icon" href="../assets/img/social-icon.ico">
</head>
<body>
    <div class="container">
        <div class="row mx-0 mx-md-5 mb-5 ">
            <form class="border mt-5  p-5 rounded  shadow col-12" action="../assets/php/registrar/registrar pasante.php" method="post">

                <div class="py-5 text-center">
                    <img class="d-block mx-auto mb-4" src="../assets/img/horizontal/oscuro/small.png" alt="">
                </div>

                <h2 class="mb-3 ">Registrar pasantes o administradores</h2>
                <p class="text-justify">Este registro hecho por el administrador sirve para dar los permisos a los pasantes o administradores de poder entrar a su sitio donde encontrara sus asiganaciones, grupo y chat.</p>

                <div class="Form my-4">
                    <label for="nombre" class="form-label"><b>Nombre:</b></label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="" required="">
                    <div class="invalid-feedback">
                        Ingrese el nombre.
                    </div>
                </div>

                <div class="Form  my-4">
                    <label for="contraseña" class="form-label"><b>Contraseña:</b></label>
                    <input type="text" class="form-control" id="contraseña" name="contraseña" placeholder="Nontraseña" value="" required="">
                    <div class="invalid-feedback">
                        Ingrese la contraseña del pasante.
                    </div>
                </div>

                <div class="Form  my-4">
                    <label for="id_cargo" class="form-label"><b>ID del cargo del pasante:</b></label>
                    <input type="text" class="form-control" id="id_cargo" name="id_cargo" placeholder="id cargo" value="" required="">
                    <div class="invalid-feedback">
                        Ingrese el id del cargo.
                    </div>
                </div>
                <hr class="my-4">
                <button type="submit" class="btn w-100 p-2 text-white" style="background-color: #39ace7 ;"><h5>Enviar y continuar</h5></button>
            </form>
            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1 text-center">© 2021 Pasantes ALPHA AIlogic</p>
                
                <li class="nav-item">
                            <a class="nav-link" href="../logins/cerrar.php">
                                <span data-feather="layers"></span>Cerrar sesión
                            </a>
                        </li>

            </footer>
        </div>
    </div>
</body>

</html>
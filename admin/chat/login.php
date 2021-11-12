<?php
include "config.php";
if ($_POST) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `register` where email = '" . $email . "' and password = '" . $password . "' ";
    $query =  mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        session_start();
        $_SESSION['name'] = $row['name'];
        header('Location: chatpage.php');
    } else {
        echo "<script> alert('Correo o contraseña incorrectas.'); </script>";
    }
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
    <link rel="stylesheet" type=" text/css" href="../../assets/css/bootstrap.min.css" media="screen">
    <title>Chat</title>

    <link rel="icon" href="../../assets/img/social-icon.ico">

</head>

<body>
    <nav class="navbar navbar-dark bg-dark  fixed-top ">
        <div class="container">
            <a href="#" class="navbar-brand">
                <strong>AILogic</strong>
            </a>

            <button type="button" class="navbar-toggler d-md-none" data-toggle="collapse" data-target="#menu-principal" aria-controls="menu-principal" aria-expanded="false" aria-label="Desplegar menú de navegación">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse  d-md-none" id="menu-principal">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"> <a class="nav-link " href="../Pasantes activos.php"> Pasantes activos </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../informacion de evaluaciones pasantes.php"> Información de evaluaciones pasantes </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../seguimiento de recursos.php"> Seguimiento de recursos </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../recursos.html"> Recursos </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../asignaciones administrador.php"> Asignaciones</a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../grupos administrador.html"> Grupos </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../pasantes/pasantes.html"> Pasantes </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../chat admin.php">Chat</a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../enviar correo.html"> Enviar correo </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../logins/login.html"> Cerrar sesión </a> </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid mt-5">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../pasantes activos.php">
                                <span data-feather="home">Pasantes activos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../informacion de evaluaciones pasantes.php">
                                <span data-feather="file"></span>Información de evaluaciones pasantes
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../seguimiento de recursos.php">
                                <span data-feather="bar-chart-2"></span> Seguimiento de recursos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../recursos.php">
                                <span data-feather="layers"></span>Recursos
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../asignaciones administrador.php">
                                <span data-feather="layers"></span>Asignaciones
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../grupos administrador.html">
                                <span data-feather="layers"></span>Grupos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../pasantes/pasantes.html">
                                <span data-feather="layers"></span>Pasantes
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../chat admin.php">
                                <span data-feather="layers"></span>Chat
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../enviar correo.html">
                                <span data-feather="layers"></span>Enviar correo
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../logins/login.html">
                                <span data-feather="layers"></span>Cerrar sesión
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Chat pasante ALPHA</h1>
                </div>

                <div class="container">
                    <center>
                        <h2>Iniciando sesión</h2>
                    </center></br>
                    <form class="form-horizontal" method="post" action="">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Correo:</label>

                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Password:</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="pwd" placeholder="Ingresa una contraseña" name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
                            </div>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>
</body>


    <!-- ARCHIVOS BOOTSTRAP JAVASCRIPT -->
    <script src="../../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>

</html>
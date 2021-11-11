<?php

include '../assets/php/ayuda/utilidad.php';

session_start();

$_SESSION['estudiantes'] = isset($_SESSION['estudiantes']) ? $_SESSION['estudiantes'] : array();

$listadoEstudiantes = $_SESSION['estudiantes'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="stylesheet" type=" text/css" href="../assets/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type=" text/css" href="../assets/css/style asignaciones administrador.css" media="screen">
    <title>Asignaciones</title>

    <link rel="icon" href="../assets/img/social-icon.ico">

</head>


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
                <li class="nav-item"> <a class="nav-link " href="Pasantes activos.php"> Pasantes activos </a> </li>
                <li class="nav-item"> <a class="nav-link " href="informacion de evaluaciones pasantes.php"> Información de evaluaciones pasantes </a> </li>
                <li class="nav-item"> <a class="nav-link " href="seguimiento de recursos.php"> Seguimiento de recursos </a> </li>
                <li class="nav-item"> <a class="nav-link " href="recursos.html"> Recursos </a> </li>
                <li class="nav-item"> <a class="nav-link " href="asignaciones administrador.php"> Asignaciones</a> </li>
                <li class="nav-item"> <a class="nav-link " href="grupos administrador.html"> Grupos </a> </li>
                <li class="nav-item"> <a class="nav-link " href="../pasantes/pasantes.html"> Pasantes </a> </li>
                <li class="nav-item"> <a class="nav-link " href="chat admin.php">Chat</a> </li>
                <li class="nav-item"> <a class="nav-link " href="enviar correo.html"> Enviar correo </a> </li>
                <li class="nav-item"> <a class="nav-link " href="../logins/login.html"> Cerrar sesión </a> </li>
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
                        <a class="nav-link active" aria-current="page" href="Pasantes activos.php">
                            <span data-feather="home">Pasantes activos</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="informacion de evaluaciones pasantes.php">
                            <span data-feather="file"></span>Información de evaluaciones pasantes
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="seguimiento de recursos.php">
                            <span data-feather="bar-chart-2"></span> Seguimiento de recursos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="recursos.php">
                            <span data-feather="layers"></span>Recursos
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="asignaciones administrador.php">
                            <span data-feather="layers"></span>Asignaciones
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="grupos administrador.html">
                            <span data-feather="layers"></span>Grupos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../pasantes/pasantes.html">
                            <span data-feather="layers"></span>Pasantes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chat admin.php">
                            <span data-feather="layers"></span>Chat
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="enviar correo.html">
                            <span data-feather="layers"></span>Enviar correo
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../logins/login.html">
                            <span data-feather="layers"></span>Cerrar sesión
                        </a>
                    </li>


                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Asignaciones</h1>

            </div>

            <main role="main">
                <p>
                    <a href="../assets/php/insertar/add.php" class="btn btn-primary my-2">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Crear asignación </font>
                        </font>
                    </a>
                </p>
                <hr class="my-4">

                <div class="row">

                    <?php if (empty($listadoEstudiantes)) : ?>
                    <?php else : ?>
                        <?php foreach ($listadoEstudiantes as $estudiante) :  ?>

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo $estudiante['nombre']; ?>
                                    </h5>

                                    <p class="card-text">
                                        <?php echo $estudiante['descripcion']; ?>
                                    </p>

                                    <h6 class="card-subtitle mb-2 text-muted">
                                        <?php echo getEstatusName($estudiante['estatus']); ?>
                                    </h6>

                                    <h6 class="card-subtitle mb-2 text-muted">
                                        <?php echo  getGrupoName($estudiante['grupo']); ?>
                                    </h6>
                                    <p class="card-text">
                                        <?php echo $estudiante['asignacion']; ?>
                                    </p>


                                    <a href="../assets/php/editar/editar asignaciones administrador.php?id=<?php echo $estudiante['id']; ?>" class="card-link">Editar</a>

                                    <a href="../assets/php/borrar/eliminar asignaciones administrador.php?id=<?php echo $estudiante['id']; ?>" class="card-link">Borrar</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </main>
        </main>
    </div>
</div>



<!-- ARCHIVOS BOOTSTRAP JAVASCRIPT -->
<script src="../assets/js/jquery-3.3.1.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>

</body>

</html>
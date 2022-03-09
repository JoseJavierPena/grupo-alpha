<?php



session_start();

include'../conexion db/db.php';

$usuario = $_SESSION['nombre'];
if(!isset($usuario)){

    header("location:../logins/login.html");

}



include '../assets/php/ayuda/utilidad recurso.php';

session_start();

$_SESSION['pasantes'] = isset($_SESSION['pasantes']) ? $_SESSION['pasantes'] : array();

$listadoEstudiantes = $_SESSION['pasantes'];

if (!empty($listadoEstudiantes)) {

    if (isset($_GET['$grupoId'])) {


        $listadoEstudiantes = searchProperty($listadoEstudiantes, 'grupo', $_GET['grupoId']);
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
    <link rel="stylesheet" type=" text/css" href="../assets/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type=" text/css" href="../assets/css/style pasantes.css" media="screen">
    <title>Pasantes</title>

    <link rel="icon" href="../assets/img/social-icon.ico">

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
                    <li class="nav-item"> <a class="nav-link " href="pasantes.html"> Pasantes </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="asignaciones pasantes.php">Asignaciones</a> </li>
                    <li class="nav-item"> <a class="nav-link " href="grupos pasantes.html"> Grupo </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="recursos pasantes.php"> Recurso</a> </li>
                    <li class="nav-item"> <a class="nav-link " href="chat/chatpage.php"> Chat </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../logins/cerrar.php">Cerrar sección</a> </li>
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
                            <a class="nav-link" href="pasantes.php">
                                <span data-feather="layers"></span>Pasantes
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="asignaciones pasantes.php">
                                <span data-feather="layers"></span>Asignaciones
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="grupos pasantes.php">
                                <span data-feather="layers"></span>Grupos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="recursos pasantes.php">
                                <span data-feather="layers"></span>Recursos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="chat/chatpage.php">
                                <span data-feather="layers"></span>Chat
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../logins/cerrar.php">
                                <span data-feather="layers"></span>Cerrar sección
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 ">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom ">
                    <h1 class="h2 ">Recursos</h1>
                </div>
                <div class="row">
                    <?php if (empty($listadoEstudiantes)) : ?>
                    <?php else : ?>
                        <?php foreach ($listadoEstudiantes as $estudiante) : ?>

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo $estudiante['nombre']; ?>
                                    </h5>

                                    <p class="card-text">
                                        <?php echo $estudiante['descripcion']; ?>
                                    </p>


                                    <h6 class="card-subtitle mb-2 text-muted">
                                        <?php echo getGrupoName($estudiante['grupo']); ?>
                                    </h6>

                                    <p class="card-text">
                                        <?php echo $estudiante['recurso']; ?>
                                    </p>

                                    <a href="../assets/php/editar/detalles recurso pasante.php?id=<?php echo $estudiante['id']; ?>" class="card-link">Más acerca del recurso</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </main>
        </div>
    </div>

    <!-- ARCHIVOS BOOTSTRAP JAVASCRIPT -->
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>
<?php

include '../ayuda/utilidad.php';

session_start();

if (isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['estatus']) && isset($_POST['grupo'])) {


    $_SESSION['estudiantes'] = isset($_SESSION['estudiantes']) ? $_SESSION['estudiantes'] : array();

    $estudiantes =  $_SESSION['estudiantes'];

    $estudianteid = 1;

    if (!empty($estudiantes)) {


        $lastElement = getLastElement($estudiantes);

        $estudianteid = $lastElement['id'] + 1;
    }




    array_push($estudiantes, [
        'id' => $estudianteid, 'nombre' => $_POST['nombre'],
        'descripcion' => $_POST['descripcion'], 'estatus' => $_POST['estatus'], 'asignacion' => $_POST['asignacion'],  'grupo' => $_POST['grupo']
    ]);


    $_SESSION['estudiantes'] = $estudiantes;

    header("Location:../../../admin/asignaciones administrador.php");
    exit();
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
    <link rel="stylesheet" type=" text/css" href="../../css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type=" text/css" href="../../css/style asignaciones administrador.css" media="screen">
    <title>Agregar asignaciones</title>


    <link rel="icon" href="../../img/social-icon.ico">



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
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/Pasantes activos.php"> Pasantes activos </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/informacion de evaluaciones pasantes.php"> Informacion de evaluaciones pasantes </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/seguimiento de recursos.php"> Seguimiento de recursos </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/recursos.html"> Recursos </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/asignaciones administrador.php"> Asignaciones</a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/grupos administrador.html"> Grupos </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../pasantes/pasantes.html"> Pasantes </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/admin.php">Chat</a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/enviar correo.html"> enviar correo </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../logins/login.html"> Cerrar sesión </a> </li>
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
                            <a class="nav-link active" aria-current="page" href="../../../admin/Pasantes activos.php">
                                <span data-feather="home">Pasantes activos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../../admin/informacion de evaluaciones pasantes.php">
                                <span data-feather="file"></span>Información de evaluaciones pasantes
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../../admin/seguimiento de recursos.php">
                                <span data-feather="bar-chart-2"></span> Seguimiento de recursos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../../admin/recursos.php">
                                <span data-feather="layers"></span>Recursos
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="../../../admin/asignaciones administrador.php">
                                <span data-feather="layers"></span>Asignaciones
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../../admin/grupos administrador.html">
                                <span data-feather="layers"></span>Grupos
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../../logins/login.html">
                                <span data-feather="layers"></span>Cerrar sesión
                            </a>
                            <a class="nav-link" href="../../../pasantes/pasantes.html">
                                <span data-feather="layers"></span>Pasantes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../../admin/chat admin.php">
                                <span data-feather="layers"></span>Chat
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../../admin/enviar correo.html">
                                <span data-feather="layers"></span>Enviar correo
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Agregar asignaciones</h1>

                </div>

                <main role="main">
                    <div style="margin-top: 2%;">

                        <div class="card">
                            <div class="card-header bg-info text-light">
                                <a href="../../../admin/asignaciones administrador.php" class="btn btn-warning"> Volver Atras</a> Creando asignaciones
                            </div>


                            <div class="card-body">
                                <form action="add.php" method="POST">
                                    <div class="form-group">
                                        <label for="nombre">Titulo de la asignacion:</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="descripcion">Descripcion de la asignacion:</label>
                                        <input type="text" class="form-control" id="descripcion" name="descripcion">
                                    </div>

                                    <div class="form-group">
                                        <label for="estatus">Estatus de la asignacion:</label>
                                        <select class="form-control" id="estatus" name="estatus">

                                            <?php foreach ($estatus as $id => $text) : ?>

                                                <option value="<?php echo $id; ?>"> <?php echo $text; ?></option>

                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="grupo">Grupo encargado de la asignacion:</label>
                                        <select class="form-control" id="grupo" name="grupo">

                                            <?php foreach ($grupo as $id => $text) : ?>

                                                <option value="<?php echo $id; ?>"> <?php echo $text; ?></option>

                                            <?php endforeach; ?>

                                        </select>
                                    </div>
                                    <<<<<<< HEAD <button type="submit" class=" btn btn-success mt-3">Guardar</button>
                                        =======
                                        <div class="col-sm-6">
                                            <label for="asignacion" class="form-label"> Subir enlace de la asignacion aqui:</label>
                                            <input type="url" class="form-control" id="asignacion" name="asignacion">

                                        </div>
                                        <button type="submit" class=" btn btn-success">Guardar</button>
                                        >>>>>>> origin/develop

                                </form>
                            </div>
                        </div>

                        <!-- ARCHIVOS BOOTSTRAP JAVASCRIPT -->
                        <script src="../../../assets/js/jquery-3.3.1.min.js"></script>
                        <script src="../../../assets/js/popper.min.js"></script>
                        <script src="../../../assets/js/bootstrap.min.js"></script>



                </main>
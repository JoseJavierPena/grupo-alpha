<?php

include '../ayuda/utilidad.php';

session_start();

if (isset($_GET['id'])) {

    $estudianteid = $_GET['id'];

    $_SESSION['estudiantes'] = isset($_SESSION['estudiantes']) ? $_SESSION['estudiantes'] : array();

    $estudiantes =  $_SESSION['estudiantes'];

    $element = searchProperty($estudiantes, 'id', $estudianteid)[0];
    $elementIndex = getIndexElement($estudiantes, 'id', $estudianteid);

    $_SESSION['estudiantes'] = isset($_SESSION['estudiantes']) ? $_SESSION['estudiantes'] : array();

    $estudiantes =  $_SESSION['estudiantes'];

    $element = searchProperty($estudiantes, 'id', $estudianteid)[0];
    $elementIndex = getIndexElement($estudiantes, 'id', $estudianteid);

    if (isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['estatus']) && isset($_POST['asignacion']) && isset($_POST['grupo'])) {

        $newEstudiante = [
            'id' => $estudianteid, 'nombre' => $_POST['nombre'],
            'descripcion' => $_POST['descripcion'], 'estatus' => $_POST['estatus'], 'grupo' => $_POST['grupo']
        ];

        $newEstudiante = [
            'id' => $estudianteid, 'nombre' => $_POST['nombre'],
            'descripcion' => $_POST['descripcion'], 'estatus' => $_POST['estatus'], 'grupo' => $_POST['grupo'], 'asignacion' => $_POST['asignacion']
        ];

        $estudiantes[$elementIndex] = $newEstudiante;


        $_SESSION['estudiantes'] = $estudiantes;

        header("Location:../../../pasantes/asignaciones pasantes.php");
        exit();
    }
} else {
    header("Location:../../../pasantes/asignaciones pasantes.php");
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
    <title>Detalle y entrega de asignaciones</title>

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
                    <li class="nav-item"> <a class="nav-link " href="../../../pasantes/pasantes.html"> Pasantes </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../pasantes/asignaciones pasantes.php">Asignaciones</a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../pasantes/grupos pasantes.html"> Grupo </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../pasantes/chat pasantes.php"> Chat </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../logins/login.html">Cerrar sesión</a> </li>
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
                            <a class="nav-link" href="../../../pasantes/pasantes.html">
                                <span data-feather="layers"></span>Pasantes
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../../pasantes/asignaciones pasantes.php">
                                <span data-feather="layers"></span>Asignaciones
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../../pasantes/grupos pasantes.html">
                                <span data-feather="layers"></span>Grupos
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../../pasantes/recursos pasantes.php">
                                <span data-feather="layers"></span>Recursos
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link " href="../../../pasantes/chat pasantes.php">
                                <span data-feather="layers "></span>Chat
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link " href="../../../logins/login.html">
                                <span data-feather="layers "></span>Cerrar sesión
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../../pasantes/chat pasantes.php">
                                <span data-feather="layers"></span>Chat
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Detalle y entrega de la asignación</h1>
                </div>

                <main role="main">
                    <div style="margin-top: 2%;">
                        <div class="card">
                            <div class="card-header bg-info  text-light">
                                <a href="../../../pasantes/asignaciones pasantes.php" class="btn btn-warning"> Volver Atrás</a>
                            </div>
                            <div class="card-body">

                                <form action="detalles asignaciones pasantes.php?id=<?php echo $element['id'] ?>" method="POST">
                                    <div class="form-group">
                                        <label for="nombre">Título de la asignación:</label>
                                        <input type="text" value="<?php echo $element['nombre'] ?>" class="form-control" id="nombre" name="nombre" readonly="readonly">
                                    </div>

                                    <div class="form-group">
                                        <label for="descripcion">Descripción de la asignación:</label>
                                        <input type="text" value="<?php echo $element['descripcion'] ?>" class="form-control" id="descripcion" name="descripcion" readonly="readonly">
                                    </div>

                                    <div class="form-group">
                                        <label for="estatus">Estatus de la asignación:</label>
                                        <select class="form-control" id="estatus" name="estatus">

                                            <?php foreach ($estatus as $id => $text) : ?>

                                                <?php if ($id == $element['estatus']) : ?>

                                                    <option selected value="<?php echo $id; ?>"> <?php echo $text; ?></option>

                                                <?php else :  ?>

                                                    <option value="<?php echo $id; ?>"> <?php echo $text; ?></option>

                                                <?php endif; ?>

                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="grupo">Grupo encargado de la asignación:</label>
                                        <select class="form-control" id="grupo" name="grupo" readonly="readonly">

                                            <?php foreach ($grupo as $id => $text) : ?>

                                                <?php if ($id == $element['grupo']) : ?>

                                                    <option selected value="<?php echo $id; ?>"> <?php echo $text; ?> </option>

                                                <?php else :  ?>

                                                    <option value="<?php echo $id; ?>"> <?php echo $text; ?></option>

                                                <?php endif; ?>

                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="First_name" class="form-label"> Subir asignación aquí:</label>
                                        <input type="file" class="form-control" id="asignacion" name="asignacion" placeholder="" value="" required="">
                                    </div>
                                    <br>
                                    <button type="submit" class=" btn btn-success">Guardar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
            </main>
        </div>
    </div>
</body>

</html>
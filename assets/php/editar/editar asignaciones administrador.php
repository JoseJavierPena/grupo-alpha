<?php

include '../ayuda/utilidad.php';




session_start();

include'../../../conexion db/db.php';

$usuario = $_SESSION['nombre'];
if(!isset($usuario)){

    header("location:../../../logins/login.html");

}

session_start();

if (isset($_GET['id'])) {

    $estudianteid = $_GET['id'];

    $_SESSION['estudiantes'] = isset($_SESSION['estudiantes']) ? $_SESSION['estudiantes'] : array();

    $estudiantes =  $_SESSION['estudiantes'];

    $element = searchProperty($estudiantes, 'id', $estudianteid)[0];
    $elementIndex = getIndexElement($estudiantes, 'id', $estudianteid);

    if (isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['estatus'])  && isset($_POST['asignacion']) && isset($_POST['grupo'])) {


        $newEstudiante = [
            'id' => $estudianteid, 'nombre' => $_POST['nombre'],
            'descripcion' => $_POST['descripcion'], 'estatus' => $_POST['estatus'], 'asignacion' => $_POST['asignacion'], 'grupo' => $_POST['grupo']
        ];

        $estudiantes[$elementIndex] = $newEstudiante;


        $_SESSION['estudiantes'] = $estudiantes;

        header("Location:../../../admin/asignaciones administrador.php");
        exit();
    }
} else {
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
    <title>Editar asignaciones</title>

    <link rel="icon" href="../../img/social-icon.ico">

</head>

<body>
    <nav class="navbar navbar-dark bg-dark  fixed-top ">
        <div class="container">
            <a href="#" class="navbar-brand">
                <strong>AILogic</strong>
            </a>

            <button type="button" class="navbar-toggler d-md-none" data-toggle="collapse" data-target="#menu-principal" aria-controls="menu-principal" aria-expanded="false" aria-label="Desplegar men?? de navegaci??n">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse  d-md-none" id="menu-principal">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/pasantes activos.php"> Pasantes activos </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/informacion de evaluaciones pasantes.php"> Informaci??n de evaluaciones pasantes </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/seguimiento de recursos.php"> Seguimiento de recursos </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/recursos.php"> Recursos </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/asignaciones administrador.php"> Asignaciones</a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/grupos administrador.php"> Grupos </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../pasantes/pasantes.php"> Pasantes </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/admin.php">Chat</a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/enviar correo.php"> Enviar correo </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../logins/cerrar.php"> Cerrar sesi??n </a> </li>
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
                            <a class="nav-link active" aria-current="page" href="../../../admin/pasantes activos.php">
                                <span data-feather="home">Pasantes activos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../../admin/informacion de evaluaciones pasantes.php">
                                <span data-feather="file"></span>Informaci??n de evaluaciones pasantes
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../../admin/seguimiento de recursos.php">
                                <span data-feather="bar-chart-2"></span> Seguimiento de recursos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="recursos.php">
                                <span data-feather="layers"></span>Recursos
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="../../../admin/asignaciones administrador.php">
                                <span data-feather="layers"></span>Asignaciones
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../../admin/grupos administrador.php">
                                <span data-feather="layers"></span>Grupos
                            </a>
                        </li>

                        <a class="nav-link" href="../../../pasantes/pasantes.php">
                            <span data-feather="layers"></span>Pasantes
                        </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../../admin/chat admin.php">
                                <span data-feather="layers"></span>Chat
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../../admin/enviar correo.php">
                                <span data-feather="layers"></span>Eenviar correo
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../../logins/cerrar.php">
                                <span data-feather="layers"></span>Cerrar sesi??n
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Editar asignaciones</h1>
                </div>

                <main role="main">
                    <div style="margin-top: 2%;">
                        <div class="card">
                            <div class="card-header bg-info  text-light">
                                <a href="../../../admin/asignaciones administrador.php" class="btn btn-warning"> Volver Atr??s</a> Editando asignaci??n
                            </div>
                            <div class="card-body">

                                <form action="editar asignaciones administrador.php?id=<?php echo $element['id'] ?>" method="POST">
                                    <div class="form-group">
                                        <label for="nombre">T??tulo de la asignaci??n:</label>
                                        <input type="text" value="<?php echo $element['nombre'] ?>" class="form-control" id="nombre" name="nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="descripcion">Descripcion de la asignacion:</label>
                                        <input type="text" value="<?php echo $element['descripcion'] ?>" class="form-control" id="descripcion" name="descripcion">
                                    </div>

                                    <div class="form-group">
                                        <label for="estatus">Estatus de la asignacion:</label>
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
                                        <label for="grupo">Grupo encargado de la asignacion:</label>
                                        <select class="form-control" id="grupo" name="grupo">

                                            <?php foreach ($grupo as $id => $text) : ?>

                                                <?php if ($id == $element['grupo']) : ?>

                                                    <option selected value="<?php echo $id; ?>"> <?php echo $text; ?></option>

                                                <?php else :  ?>

                                                    <option value="<?php echo $id; ?>"> <?php echo $text; ?></option>

                                                <?php endif; ?>


                                            <?php endforeach; ?>

                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="asignacion" class="form-label"> Subir enlace de la asignaci??n aqu??:</label>
                                        <input type="url" value="<?php echo $element['asignacion'] ?>" class="form-control" id="asignacion" name="asignacion">

                                    </div>
                                    <button type="submit" class=" btn btn-success">Guardar</button>

                                </form>
                            </div>
                        </div>

                        <!-- ARCHIVOS BOOTSTRAP JAVASCRIPT -->
                        <script src="../../../assets/js/jquery-3.3.1.min.js"></script>
                        <script src="../../../assets/js/popper.min.js"></script>
                        <script src="../../../assets/js/bootstrap.min.js"></script>

                </main>
            </main>
        </div>
    </div>
</body>

</html>
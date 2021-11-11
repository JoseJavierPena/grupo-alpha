<?php 

include '../ayuda/utilidad.php';

session_start();

if(isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['estatus']) && isset($_POST['grupo'])) {
    $_SESSION['estudiantes'] = isset($_SESSION['estudiantes'])? $_SESSION['estudiantes']: array();

    $estudiantes = $_SESSION['estudiantes'];

    $estudianteid = 1;

    if(!empty($estudiantes)) {
        $lastElement = getLastElement($estudiantes);

        $estudianteid = $lastElement['id'] + 1;
    }

    array_push($estudiantes, [ 'id'=>$estudianteid, 'nombre'=> $_POST['nombre'], 'descripcion' => $_POST['descripcion'], 'estatus' => $_POST['estatus'], 'grupo' => $_POST['grupo']]);

    $_SESSION['estudiantes'] = $estudiantes;

    header("Location: ../../../../../admin/recursos.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="stylesheet" type=" text/css" href="../../css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type=" text/css" href="../../css/style asignaciones administrador.css" media="screen">

    <title>Agregar recurso</title>

    <link rel="icon" href="../../img/social-icon.ico">
</head>
<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md nowrap p-0 shadow">
        <a href="#" class="navbar-brand col-md-3 col-lg-2 me-0 px-3">Pasantes ALPHA AILogic</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="../../../logins/login.html">Cerrar sesión</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
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
                            <a class="nav-link" href="../../../pasantes/pasantes.html">
                                <span data-feather="layers"></span>Pasantes
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../../admin/chat admin.php">
                                <span data-feather="layers"></span>Chat
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">
                        Agregar recurso
                    </h1>
                </div>

                <main role="main">
                    <div style="margin-top: 2%;">
                        <div class="card">
                            <div class="card-header bg-info text-light">
                                <a href="../../../admin/recursos.php" class="btn btn-warning">
                                    Volver Atrás
                                </a>
                                Creando recurso
                            </div>
                            <div class="card-body">
                                <form action="add recursos.php" method="POST">
                                    <div class="form-group">
                                        <label for="nombre">Título del recurso:</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="descripcion">Descripción del recurso:</label>
                                        <input type="text" class="form-control" id="descripcion" name="descripcion">
                                    </div>

                                    <div class="form-group">
                                        <label for="grupo">Grupo al que irá el recurso:</label>
                                        <select name="grupo" id="grupo" class="form-control">
                                            <?php foreach($grupo as $id => $text): ?>
                                            
                                            <option value="<?php  echo $id; ?>">  <?php echo $text; ?></option>
                                            
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="First_name" class="form-label">Subir recurso:</label>
                                        <input type="file" name="recurso" id="recurso" 
                                        placeholder=""
                                        value="" required="">
                                    </div>                            

                                    <button type="submit" class="btn btn-success">Guardar</button>
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
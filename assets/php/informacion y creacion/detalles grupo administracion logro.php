
<?php 


session_start();

include'../../../conexion db/db.php';

$usuario = $_SESSION['nombre'];
if(!isset($usuario)){

    header("location:../../../logins/login.html");

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
    <link rel="stylesheet" type=" text/css" href="../../css/style grupos administrador.css" media="screen">
    <title>Grupo FALCON</title>



    <link rel="icon" href="../../img/social-icon.ico">
    <script src="https://kit.fontawesome.com/0f48d8c00d.js"></script>

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
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/recursos.php"> Recursos </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/asignaciones administrador.php"> Asignaciones</a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/grupos administrador.php"> Grupos </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../pasantes/pasantes.php"> Pasantes </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/admin.php">Chat</a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/enviar correo.php"> enviar correo </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../logins/login.php"> Cerrar sección </a> </li>
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
                            <a class="nav-link" href="../../../admin/grupos administrador.php">
                                <span data-feather="layers"></span>Grupos
                            </a>
                        </li>

                        <li class="nav-item">
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
                                <span data-feather="layers"></span>Enviar correo
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../../logins/cerrar.php">
                                <span data-feather="layers"></span>Cerrar sección
                            </a>
                            </li>
                      
                    </ul>
                </div>

            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Grupo LOGRO</h1>

                    <p>
                        <a href="../insertar/insertar lorgro.php" class="btn btn-primary my-2">
                            <font style="vertical-align: inherit;">
                                <font style=" vertical-align: inherit;">Registrar</font>
                            </font>
                        </a>
                    </p>
                </div>


                <h2>Miembros</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NOMBRE</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Correo</th>

                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $conexion = mysqli_connect("localhost:8111", "root", "", "pasantes alpha db");
                            $sql = "SELECT id,nombre,apellido,correo FROM grupol";
                            $resultado = mysqli_query($conexion, $sql);
                            while ($mostra = mysqli_fetch_row($resultado)) {
                            ?>
                                <tr>
                                    <td><?php echo $mostra['0'] ?></td>
                                    <td><?php echo $mostra['1'] ?></td>
                                    <td><?php echo $mostra['2'] ?></td>
                                    <td><?php echo $mostra['3'] ?></td>




                                    <td><a href="../borrar/eliminar falcon.php? id=<?php echo $mostra['0'] ?> " button class="btn btn-danger"><i class="fas fa-trash"></i></a></button></td>

                                </tr>
                            <?php
                            }
                            ?>




                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <!-- ARCHIVOS BOOTSTRAP JAVASCRIPT -->
    <script src="../../../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../../../assets/js/popper.min.js"></script>
    <script src="../../../assets/js/bootstrap.min.js"></script>
</body>

</html>
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
    <title>Agregar miembro a grupo</title>


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

                        <li class="nav-item">
                            <a class="nav-link" href="../../../logins/login.html">
                                <span data-feather="layers"></span>Cerrar sesión
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Agregando miembro</h1>

                </div>

                <main role="main">
                    <div style="margin-top: 2%;">

                        <div class="card">
                            <div class="card-header bg-info text-light">
                                <a href="../informacion y creacion/detalles grupo administracion central.php" class="btn btn-warning"> Volver Atras</a> Miembro
                            </div>


                            <div class="card-body">
                                <form method="POST" action=" central insertar.php">


                                    <div class="grupo central">
                                        <label for="grupo central" class="form-label">Nombre:</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value="" required="">
                                        <div class="invalid-feedback">
                                            Ingrese el nombre.
                                        </div>
                                    </div>
                                    <div class="grupo central">
                                        <label for="Last_name" class="form-label">Apellido:</label>
                                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="" value="" required="">
                                        <div class="invalid-feedback">
                                            Ingrese el Apellido.
                                        </div>
                                    </div>
                                    <div class="grupo central">
                                        <label for="Imail" class="form-label">Correo:</label>
                                        <input type="imail" class="form-control" id="correo" name="correo" placeholder="" value="" required="">
                                        <div class="invalid-feedback">
                                            Ingrese un correo.
                                        </div>
                                        <button type="submit" class=" btn btn-success mt-3">Guardar</button>

                                </form>
                            </div>
                        </div>


                        <!-- ARCHIVOS BOOTSTRAP JAVASCRIPT -->
                        <script src="../../../assets/js/jquery-3.3.1.min.js"></script>
                        <script src="../../../assets/js/popper.min.js"></script>
                        <script src="../../../assets/js/bootstrap.min.js"></script>


                </main>
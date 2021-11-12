<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="stylesheet" type=" text/css" href="../assets/css/bootstrap.min.css" media="screen">
    <title>Chat</title>

    <link rel="icon" href="../assets/img/social-icon.ico">
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
                    <li class="nav-item"> <a class="nav-link " href="pasantes.html"> Pasantes </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="asignaciones pasantes.php">Asignaciones</a> </li>
                    <li class="nav-item"> <a class="nav-link " href="grupos pasantes.html"> Grupo </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="chat pasantes.php"> Chat </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../logins/login.html">Cerrar sesión</a> </li>
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
                            <a class="nav-link" href="pasantes.html">
                                <span data-feather="layers"></span>Pasantes
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="asignaciones pasantes.php">
                                <span data-feather="layers"></span>Asignaciones
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="grupos pasantes.html">
                                <span data-feather="layers"></span>Grupos
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="recursos pasantes.php">
                                <span data-feather="layers"></span>Recursos
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="chat pasantes.php">
                                <span data-feather="layers"></span>Chat
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
                    <h1 class="h2">Chat pasantes ALPHA</h1>
                </div>

                <div class="container">
                   <center>
                        <h2>Inicie sesión si ya está registrado</h2>
                    </center>
                    </br>

                    <center>
                    <a type="submit" class="btn btn-primary mx-5 px-4" href="chat/login.php">Iniciar sesión</a>
                    </center>

                    <br>
                    
                    <center>
                        <h2>O Registrate</h2>
                    </center>

                    <br>
                    <form class="form-horizontal" method="post" action="chat/add_user.php">
                       <div class="form-group">
                            <label class="control-label col-sm-2 col-sm-offset-2" for="name">Nombre:</label>

                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="name" placeholder="Ingresa un nombre" name="name" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2 col-sm-offset-2" for="email">Correo:</label>

                                <div class="col-sm-5">
                                    <input type="email" class="form-control" id="email" placeholder="Ingresa un correo" name="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2 col-sm-offset-2" for="pwd">Clave:</label>
                                <div class="col-sm-5">
                                    <input type="password" class="form-control" id="pwd" placeholder="Ingresa una clave" name="password" required>
                                </div>
                            </div>
                            <d iv class="form-group">
                                <label class="control-label col-sm-2 col-sm-offset-2" for="number">Teléfono:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="number" placeholder="ingresa un número" name="number" required>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2 col-sm-offset-2" for="name">Dirección:</label>

                                    <div class="col-sm-5">
                                        <textarea class="form-control" id="address" placeholder="Ingresa tu dirección" name="address" required></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-8">
                                        <button type="submit" class="btn btn-primary">Regístrate aquí</button>
                                    </div>
                                </div>
                    </form>
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
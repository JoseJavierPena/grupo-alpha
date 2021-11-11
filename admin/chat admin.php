<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="stylesheet" type=" text/css" href="../assets/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type=" text/css" href="../assets/css/style chat admin.css" media="screen">
    <title>Chat</title>



    <link rel="icon" href="../assets/img/social-icon.ico">
    <script src="https://kit.fontawesome.com/0f48d8c00d.js"></script>



</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Pasantes ALPHA AIlogic</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="../logins/login.html">Cerrar sesión</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
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

                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Chat pasante ALPHA</h1>


                </div>



                <div class="container">

                    <center>



                        <h2>Registrese o Inicie sesión si ya esta registrado</h2>
                    </center>
                    </br>
                    <form class="form-horizontal" method="post" action="chat/add_user.php">
                        <for <div class="form-group">
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
                                        <button type="submit" class="btn1 btn-primary">Regístrate aquí</button>
                                    </div>
                                </div>
                    </form>

                    <a type="submit" class="btn btn-primary" href="chat/login.php">Iniciar sesión</a>
                </div>

            </main>


        </div>
    </div>
</body>

</html>
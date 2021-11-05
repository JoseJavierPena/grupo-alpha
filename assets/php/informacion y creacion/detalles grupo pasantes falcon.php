
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="stylesheet" type=" text/css" href="../../css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type=" text/css" href="../../css/style pasantes activos.css" media="screen">
    <title>Grupo FALCON</title>



    <link rel="icon" href="../../img/social-icon.ico">
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
                <a class="nav-link px-3" href="../../../logins/login.html">Cerrar sesion</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                    <li class="nav-item">
                            <a class="nav-link" href="../../../pasantes/pasantes.html">
                                <span data-feather=" layers "></span>Pasantes
                            </a>
                        </li>


                        <li class="nav-item ">
                            <a class="nav-link " href="../../../pasantes/asignaciones pasantes.php ">
                                <span data-feather="layers "></span>Asignaciones
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link " href="../../../pasantes/grupos pasantes.html ">
                                <span data-feather="layers "></span>Grupos
                            </a>
                        </li>
                    </ul>
                </div>

            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Grupo FALCON</h1>

                   
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
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $conexion=mysqli_connect("localhost:8111","root","","pasantes alpha db");
                            $sql="SELECT id,nombre,apellido,correo FROM grupof";
                            $resultado= mysqli_query($conexion,$sql);
                            while($mostrar= mysqli_fetch_row($resultado)){
                                ?>   
                                <tr>
                                    <td><?php echo $mostrar['0']?></td>
                                    <td><?php echo $mostrar['1']?></td>
                                    <td><?php echo $mostrar['2']?></td>
                                    <td><?php echo $mostrar['3']?></td>
                                   
                                    
                                    
                                   

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
</body>
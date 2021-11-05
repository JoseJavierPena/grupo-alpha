<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="stylesheet" type=" text/css" href="../assets/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type=" text/css" href="../assets/css/style seguimiento de recursos.css" media="screen">
    <title>Seguimiento de recursos</title>

    <link rel="icon" href="../assets/img/social-icon.ico">



</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Pasantes ALPHA AIlogic</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="../logins/login.html">Cerrar sesion</a>
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
                                <span data-feather="file"></span>Informacion de evaluaciones pasantes
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="seguimiento de recursos.php">
                                <span data-feather="bar-chart-2"></span> Seguimiento de recurso
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="recursos.html">
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
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Seguimiento de recursos</h1>

                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Conocimientos de HTML</th>
                                <th scope="col">Conocimientos de CSS</th>
                                <th scope="col">Conocimientos de JAVASCRIPT</th>
                                <th scope="col">Conocimientos de PHP</th>
                                <th scope="col">Conocimientos de SQL y MYSQL</th>
                                <th scope="col">Conocimientos de C#. C++. Python y c</th>
                                <th scope="col">ID Del Pasante</th>
                                


                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                                <?php
                                 $conexion=mysqli_connect("localhost:8111","root","","pasantes alpha db");
                                 $sql="SELECT Id,conociminetoshtml,conociminetoscss,conocimientosjavascript,conocimientosphp,conocmientossqlmysql,otroslenguajes,Id_formulario FROM individuales";
                                 $resultado= mysqli_query($conexion,$sql);
                                 while($mostrar= mysqli_fetch_row($resultado)){
                                    ?>   
                                    <tr>
                                        <td><?php echo $mostrar['0']?></td>
                                        <td><?php echo $mostrar['1']?></td>
                                        <td><?php echo $mostrar['2']?></td>
                                        <td><?php echo $mostrar['3']?></td>
                                        <td><?php echo $mostrar['4']?></td>
                                        <td><?php echo $mostrar['5']?></td>
                                        <td><?php echo $mostrar['6']?></td>
                                        <td><?php echo $mostrar['7']?></td>
                                        
                                        
                                       
                                        
                                        
                                        
                                       
                                 </tr>
                                 <?php
                                 }
                               
                                 
                                ?>
                                  
                               
                               
                            </tr>
                               
                           
                            

                        </tbody>
                    </table>
                </div>
            </main>

        </div>
    </div>

</body>

</html>
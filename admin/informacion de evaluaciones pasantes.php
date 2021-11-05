<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="stylesheet" type=" text/css" href="../assets/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type=" text/css" href="../assets/css/style Infomacion de evaluacion pasantes.css" media="screen">
    <title>Infomación de evaluación pasantes</title>

    <link rel="icon" href="../assets/img/social-icon.ico">
    <script src="https://kit.fontawesome.com/0f48d8c00d.js"></script>

</head>
<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Pasantes ALPHA AIlogic.</a>
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
                    <h1 class="h2">Infomación de evaluación pasantes</h1>

                </div>
                <h2>Toda la información de los pasantes que completaron las evaluaciones</h2>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                            <th scope="col">ID_Formulario</th>
                                <th scope="col">NOMBRE</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Cédula</th>
                                <th scope="col">Universidad</th>
                                <th scope="col">Teléfono</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">Dónde vives</th>
                                <th scope="col">Correo</th>
                                <th scope="col">ID_Evaluaciones</th>
                                <th scope="col">Repositorio</th>
                                <th scope="col">Linkedin</th>
                                <th scope="col">Portafolio</th>
                                <th scope="col">Curriculum</th>
                                <th scope="col">ID_Formulario</th>
                                                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                 $conexion=mysqli_connect("localhost:8111","root","","pasantes alpha db");
                                 $sql="SELECT *, COUNT(curriculum) FROM formulario,evaluaciones GROUP BY 1 HAVING COUNT(curriculum) > 1 ";
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
                                        <td><?php echo $mostrar['8']?></td>
                                        <td><?php echo $mostrar['9']?></td>
                                        <td><?php echo $mostrar['10']?></td>
                                        <td><?php echo $mostrar['11']?></td>
                                        <td><?php echo $mostrar['12']?></td>
                                        <td><?php echo $mostrar['13']?></td>
                                        <td><?php echo $mostrar['14']?></td>                                                                                                                                                             
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
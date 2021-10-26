


    <?php 
           
            include '../assets/php/ayuda/utilidad.php';
            
            session_start();

            $_SESSION['estudiantes'] = isset($_SESSION['estudiantes'])? $_SESSION['estudiantes']: array();
            
            $listadoEstudiantes = $_SESSION['estudiantes'];
            
            if(!empty($listadoEstudiantes)){
            
            if(isset($_GET['$CarreraId'])){
            
            
              $listadoEstudiantes = searchProperty ($listadoEstudiantes,'carrera',$_GET['CarreraId']);   
            
            }
            }
            
            if(!empty($listadoEstudiantes)){
            
              if(isset($_GET['$EstatusId'])){
              
              
                $listadoEstudiantes = searchProperty ($listadoEstudiantes,'estatus',$_GET['EstatusId']);   
              
              }
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
    <link rel="stylesheet" type=" text/css" href="../assets/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type=" text/css" href="../assets/css/style asignaciones administrador.css" media="screen">
    <title>Asignaciones</title>


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
                            <a class="nav-link active" aria-current="page" href="Pasantes activos.html">
                                <span data-feather="home">Pasantes activos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="informacion de evaluaciones pasantes.html">
                                <span data-feather="file"></span>Informacion de evaluaciones pasantes
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="seguimiento de recursos.html">
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

                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Asignaciones</h1>

                </div>
           


        

            

            <main role="main">

              
                        <p>
                            <a href="../assets/php/Estudiantes/add.php" class="btn btn-primary my-2">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Crear asignacion </font>
                                </font>
                            </a>

                        </p>
              





                        <div class="row">

                            <?php if(empty($listadoEstudiantes)): ?>


                            <?php  else:?>




                            <?php   foreach($listadoEstudiantes as $estudiante):  ?>




                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo $estudiante['nombre'];?>
                                    </h5>

                                    <p class="card-text">
                                        <?php echo $estudiante['apellido']; ?>
                                    </p>

                                    <h6 class="card-subtitle mb-2 text-muted">
                                        <?php echo getEstatusName($estudiante['estatus']); ?>
                                    </h6>

                                    <h6 class="card-subtitle mb-2 text-muted">
                                        <?php echo  getCarreraName($estudiante['carrera']); ?>
                                    </h6>

                                    <a href="../assets/php/Estudiantes/edit.php?id=<?php echo $estudiante['id']; ?>" class="card-link">Editar</a>

                                    <a href="../assets/php/Estudiantes/borrar.php?id=<?php echo $estudiante['id']; ?>" class="card-link">Borrar</a>

                                </div>
                            </div>


                            <?php endforeach; ?>



                            <?php   endif;?>


                        </div>
                    </div>
                </div>
        </div>

        </main>

  

    </div>
    </div>

</body>

</html>
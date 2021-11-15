
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
    <title>Grupo CENTRAL</title>



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
                    <li class="nav-item"> <a class="nav-link " href="../../../pasantes/pasantes.html"> Pasantes  </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../pasantes/asignaciones pasantes.php"> Asignaciones </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../pasantes/grupos pasantes.html"> Grupos </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../pasantes/chat pasantes"> Recursos </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../logins/login.html"> Cerrar sección</a> </li>
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
                            <a class="nav-link" href="../../../pasantes/pasantes.html">
                                <span data-feather="layers"></span>Pasantes
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../../pasantes/asignaciones pasantes.php">
                                <span data-feather="layers"></span>Asignaciones
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../../pasantes/grupos pasantes.html">
                                <span data-feather="layers"></span>Grupos
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../../pasantes/recursos pasantes.php">
                                <span data-feather="layers"></span>Recursos
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../../pasantes/chat pasantes.php">
                                <span data-feather="layers"></span>Chat
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link " href="../../../pasantes/grupos pasantes.html ">
                                <span data-feather="layers "></span>Chat
                            </a>
                        </li>

                        
                        <li class="nav-item ">
                            <a class="nav-link " href="../../../logins/login.html ">
                                <span data-feather="layers "></span>Cerrar 
                            </a>
                        </li>
                    </ul>
                </div>

            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Grupo CENTRAL</h1>

                    
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
                            $conexion=mysqli_connect("sql204.epizy.com","epiz_30368770","h7iA6zeqMya9","epiz_30368770_pasantesalphadb");
                            $sql="SELECT id,nombre,apellido,correo FROM grupoc";
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

              <!-- ARCHIVOS BOOTSTRAP JAVASCRIPT -->
              <script src="../../../assets/js/jquery-3.3.1.min.js"></script>
              <script src="../../../assets/js/popper.min.js"></script>
              <script src="../../../assets/js/bootstrap.min.js"></script>


        </div>
    </div>
</body>
<?php 

session_start();

include'../../../conexion db/db.php';

$usuario = $_SESSION['nombre'];
if(!isset($usuario)){

    header("location:../../../logins/login.html");

}

include '../ayuda/utilidad recurso.php';





if(isset($_GET['id'])){

  $estudianteid = $_GET['id'];

  $_SESSION['pasantes'] = isset($_SESSION['pasantes'])? $_SESSION['pasantes']: array();

  $pasantes =  $_SESSION['pasantes'];

  $element = searchProperty($pasantes,'id',$estudianteid)[0];
  $elementIndex = getIndexElement($pasantes,'id',$estudianteid);




  if(isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['recurso']) && isset($_POST['grupo'])){


  $newEstudiante = [ 'id'=>$estudianteid , 'nombre'=> $_POST['nombre'],
    'descripcion'=>$_POST['descripcion'],'recurso'=>$_POST['recurso'], 'grupo'=>$_POST['grupo']  ];

    $pasantes[$elementIndex] = $newEstudiante;


    $_SESSION['pasantes']=$pasantes; 

 header("Location:../../../admin/recursos.php");
 exit();

}


  
}

else{
  header("Location:../../../admin/recursos.php");
 exit();

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
    <!-- <link rel="stylesheet" type=" text/css" href="../../css/style asignaciones administrador.css" media="screen"> -->

    <title>Editar recurso</title>

    <link rel="icon" href="../../img/social-icon.ico">
</head>
<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"> AIlogic</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
       
    </header>
    <div class="collapse navbar-collapse  d-md-none" id="menu-principal">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/pasantes activos.php"> Pasantes activos </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/informacion de evaluaciones pasantes.php"> Informacion de evaluaciones pasantes </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/seguimiento de recursos.php"> Seguimiento de recursos </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/recursos.php"> Recursos </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/asignaciones administrador.php"> Asignaciones</a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/grupos administrador.php"> Grupos </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../pasantes/pasantes.php"> Pasantes </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/admin.php">Chat</a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../admin/enviar correo.php"> enviar correo </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../logins/cerrar.php"> Cerrar sesi??n </a> </li>
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
                                <a class="nav-link active" aria-current="page" href="../../../admin/pasantes activos.php">
                                    <span data-feather="home">Pasantes activos</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../../../admin/informacion de evaluaciones pasantes.php">
                                    <span data-feather="file"></span>Informaci??n de evaluaciones pasantes
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
                                    <span data-feather="layers"></span>Cerrar seccion
                                </a>
                            </li>
                        </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Editar recursos</h1>
                </div>

                <main role="main">
                <div style="margin-top: 2%;">
                    <div class="card">
                        <div class="card-header bg-info text-light">
                            <a href="../../../admin/recursos.php" class="btn btn-warning">
                                Volver Atr??s
                            </a>
                            Editando asignaci??n
                        </div>

                        <div class="card-body">
                            <form action="editar recursos.php?id=<?php echo $element['id']?> " method="POST">                                
                                    <div class="form-group">
                                        <label for="nombre">T??tulo del recurso:</label>
                                        <input type="text"value="<?php echo $element['nombre']?>" class="form-control" id="nombre" name="nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="descripcion">Descripci??n del recurso:</label>
                                        <input type="text" value="<?php echo $element['descripcion']?>" class="form-control" id="descripcion" name="descripcion">
                                    </div>

                                    <div class="form-group">
                                        <label for="grupo">Grupo al que ir?? el recurso:</label>
                                        <select name="grupo" id="grupo" class="form-control">
                                            <?php foreach($grupo as $id => $text): ?>
                                            
                                            <option value="<?php  echo $id; ?>">  <?php echo $text; ?></option>
                                            
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="recurso" class="form-label">Enlace del recurso:</label>
                                        <input type="url" value="<?php echo $element['recurso']?>" name="recurso" id="recurso" >
                                    </div>                             

                                    <button type="submit" class="btn btn-success">Guardar</button>                                
                            </form>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>
</body>
</html>
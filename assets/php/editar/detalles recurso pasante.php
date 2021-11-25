<?php 

include '../ayuda/utilidad recurso.php';
session_start();

include'../../../conexion db/db.php';

$usuario = $_SESSION['nombre'];
if(!isset($usuario)){

    header("location:../../../logins/login.html");

}


session_start();

if(isset($_GET['id'])){

  $estudianteid = $_GET['id'];

  $_SESSION['pasantes'] = isset($_SESSION['pasantes'])? $_SESSION['pasantes']: array();

  $estudiantes =  $_SESSION['pasantes'];

  $element = searchProperty($estudiantes,'id',$estudianteid)[0];
  $elementIndex = getIndexElement($estudiantes,'id',$estudianteid);




  if(isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['recurso']) && isset($_POST['grupo'])){


  $newEstudiante = [ 'id'=>$estudianteid , 'nombre'=> $_POST['nombre'],
    'descripcion'=>$_POST['descripcion'], 'grupo'=>$_POST['grupo'],'recurso'=>$_POST['recurso']   ];

    $estudiantes[$elementIndex] = $newEstudiante;


    $_SESSION['pasantes']=$estudiantes; 

 header("Location:../../../pasantes/recursos pasantes.php");
 exit();

}


  
}

else{
  header("Location:../../../pasantes/recursos pasantes.php");
 exit();

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
    <link rel="stylesheet" type=" text/css" href="../../css/style asignaciones administrador.css" media="screen">
    <title>Detalle y entrega de asignaciones</title>


    <link rel="icon" href="../../img/social-icon.ico">



</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Pasantes ALPHA AIlogic</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    </header>

    <div class="collapse navbar-collapse  d-md-none" id="menu-principal">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"> <a class="nav-link " href="../../../pasantes/pasantes.php"> Pasantes </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../pasantes/asignaciones pasantes.php">Asignaciones</a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../pasantes/grupos pasantes.php"> Grupo </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../pasantes/chat pasantes.php"> Chat </a> </li>
                    <li class="nav-item"> <a class="nav-link " href="../../../logins/cerrar.php">Cerrar sesión</a> </li>
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
                            <a class="nav-link" href="../../../pasantes/pasantes.php">
                                <span data-feather="layers"></span>Pasantes
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../../pasantes/asignaciones pasantes.php">
                                <span data-feather="layers"></span>Asignaciones
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../../pasantes/grupos pasantes.php">
                                <span data-feather="layers"></span>Grupos
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../../pasantes/recursos pasantes.php">
                                <span data-feather="layers"></span>Recursos
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link " href="../../../pasantes/chat pasantes.php">
                                <span data-feather="layers "></span>Chat
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../../pasantes/chat pasantes.php">
                                <span data-feather="layers"></span>Chat
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link " href="../../../logins/cerrar.php">
                                <span data-feather="layers "></span>Cerrar sesión
                            </a>
                        </li>

                    
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Informacion del recurso</h1>

                </div>


<main role="main">
    <div style="margin-top: 2%;">

<div class="card">
  <div class="card-header bg-info  text-light" >
 <a href="../../../pasantes/recursos pasantes.php" class="btn btn-warning"> Volver Atras</a>
  </div> 
  <div class="card-body">

  <form action="detalles recursos pasante.php?id=<?php echo $element['id']?>" method="POST">
  <div class="form-group">
    <label for="nombre">Titulo del recurso:</label>
    <input type="text" value="<?php echo $element['nombre']?>"  class="form-control" id="nombre" name="nombre" readonly="readonly">
  </div>

  <div class="form-group">
    <label for="descripcion">Descripcion del recurso:</label>
    <input type="text"value="<?php echo $element['descripcion']?>"  class="form-control" id="descripcion" name="descripcion" readonly="readonly">
  </div>
  
 

  <div class="form-group">
    <label for="grupo">Grupo asignado del recurso:</label>
    <select class="form-control" id="grupo" name="grupo" readonly="readonly">

    <?php   foreach($grupo as $id => $text):?>

      <?php if($id == $element ['grupo']):?>
      
      <option   selected value="<?php  echo $id; ?>">  <?php echo $text; ?> </option>
   
       <?php else:  ?>
         
      <option value="<?php  echo $id; ?>">  <?php echo $text; ?></option>
   
       <?php endif; ?>


 <?php endforeach;?>
    
    </select>
    </div>


    <div class="col-sm-6">
                    <label for="recurso" class="form-label"> Subir enlace de la asignacion aqui:</label>
                    <input type="url"value="<?php echo $element['recurso']?>" class="form-control" id="recurso" readonly="readonly" >
                   
                </div>
                <br>

    

</form>
  </div>
</div>


  
</main>


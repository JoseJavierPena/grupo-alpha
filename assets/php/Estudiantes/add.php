<?php 

include '../ayuda/utilidad.php';

session_start();

if(isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['estatus']) && isset($_POST['grupo'])){


    $_SESSION['estudiantes'] = isset($_SESSION['estudiantes'])? $_SESSION['estudiantes']: array();

  $estudiantes =  $_SESSION['estudiantes'];

    $estudianteid= 1;

    if(!empty($estudiantes)){


        $lastElement = getLastElement($estudiantes);

        $estudianteid = $lastElement['id'] + 1 ;
    }




    array_push($estudiantes,[ 'id'=>$estudianteid , 'nombre'=> $_POST['nombre'],
    'descripcion'=>$_POST['descripcion'],'estatus'=>$_POST['estatus'], 'grupo'=>$_POST['grupo']]);


    $_SESSION['estudiantes']=$estudiantes; 

 header("Location:../../../admin/asignaciones administrador.php");
 exit();
}

?>



<main role="main">
    <div style="margin-top: 2%;">

<div class="card">
  <div class="card-header bg-dark text-light" >
 <a href="../index.php" class="btn btn-warning"> Volver Atras</a> Crear Nuevo Estudiante
  </div> 


  <div class="card-body">
  <form action="add.php" method="POST">
  <div class="form-group">
    <label for="nombre">Nombre de la asignacion:</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>
  <div class="form-group">
    <label for="descripcion">Descripcion de la asignacion:</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion">
  </div>
  
  <div class="form-group">
    <label for="estatus">Estatus de la asignacion:</label>
    <select class="form-control" id="estatus" name="estatus">

   <?php   foreach($estatus as $id => $text):?>

   <option value="<?php  echo $id; ?>">  <?php echo $text; ?></option>

    <?php endforeach;?>
    </select>
    </div>

  <div class="form-group">
    <label for="grupo">Grupo encargado de la asignacion:</label>
    <select class="form-control" id="grupo" name="grupo">

    <?php   foreach($grupo as $id => $text):?>

<option value="<?php  echo $id; ?>">  <?php echo $text; ?></option>

 <?php endforeach;?>
    
    </select>
    </div>

    <button type="submit" class=" btn btn-success">Guardar</button>

</form>
  </div>
</div>


  
</main>


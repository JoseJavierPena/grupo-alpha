<?php 

include '../ayuda/utilidad.php';



session_start();

if(isset($_GET['id'])){

  $estudianteid = $_GET['id'];

  $_SESSION['estudiantes'] = isset($_SESSION['estudiantes'])? $_SESSION['estudiantes']: array();

  $estudiantes =  $_SESSION['estudiantes'];

  $element = searchProperty($estudiantes,'id',$estudianteid)[0];
  $elementIndex = getIndexElement($estudiantes,'id',$estudianteid);




  if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['estatus']) && isset($_POST['carrera'])){


  $newEstudiante = [ 'id'=>$estudianteid , 'nombre'=> $_POST['nombre'],
    'apellido'=>$_POST['apellido'],'estatus'=>$_POST['estatus'], 'carrera'=>$_POST['carrera']  ];

    $estudiantes[$elementIndex] = $newEstudiante;


    $_SESSION['estudiantes']=$estudiantes; 

 header("Location:../../../admin/asignaciones administrador.php");
 exit();

}


  
}

else{
  header("Location:../../../admin/asignaciones administrador.php");
 exit();

}



?>



<main role="main">
    <div style="margin-top: 2%;">

<div class="card">
  <div class="card-header bg-dark text-light" >
 <a href="../../../admin/asignaciones administrador.php" class="btn btn-warning"> Volver Atras</a> Crear Nuevo Estudiante
  </div> 
  <div class="card-body">

  <form action="edit.php?id=<?php echo $element['id']?>" method="POST">
  <div class="form-group">
    <label for="nombre">Nombre de la asignacion:</label>
    <input type="text" value="<?php echo $element['nombre']?>"  class="form-control" id="nombre" name="nombre">
  </div>
  <div class="form-group">
    <label for="apellido">Descripcion de la asignacion:</label>
    <input type="text"value="<?php echo $element['apellido']?>"  class="form-control" id="apellido" name="apellido">
  </div>
  
  <div class="form-group">
    <label for="estatus">Estatus de la asignacion:</label>
    <select  class="form-control" id="estatus" name="estatus">

   <?php   foreach($estatus as $id => $text):?>

    <?php if($id == $element ['estatus']):?>
      
   <option   selected value="<?php  echo $id; ?>">  <?php echo $text; ?></option>

    <?php else:  ?>
      
   <option value="<?php  echo $id; ?>">  <?php echo $text; ?></option>

    <?php endif; ?>



    <?php endforeach;?>
    </select>
    </div>

  <div class="form-group">
    <label for="carrera">Grupo encargado de la asignacion:</label>
    <select class="form-control" id="carrera" name="carrera">

    <?php   foreach($carrera as $id => $text):?>

      <?php if($id == $element ['carrera']):?>
      
      <option   selected value="<?php  echo $id; ?>">  <?php echo $text; ?></option>
   
       <?php else:  ?>
         
      <option value="<?php  echo $id; ?>">  <?php echo $text; ?></option>
   
       <?php endif; ?>


 <?php endforeach;?>
    
    </select>
    </div>

    <button type="submit" class=" btn btn-success">Guardar</button>

</form>
  </div>
</div>


  
</main>


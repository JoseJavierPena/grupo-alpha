<?php 



$nombre=$_POST['nombre'];
$contraseña=$_POST['contraseña'];
$id_cargo=$_POST['id_cargo'];
session_start();
$_SESSION['nombre']=$nombre;

$conexion=mysqli_connect("sql204.epizy.com","epiz_30368770","h7iA6zeqMya9","epiz_30368770_pasantesalphadb");

$consulta="INSERT INTO  login(nombre,contraseña,id_cargo) values('$nombre','$contraseña','$id_cargo')";
$resultado=mysqli_query($conexion,$consulta);



if($resultado){
   
    echo'<script type="text/javascript">
    alert("Datos guardados");
    window.location.href="../../../logins/login.html"
    </script>';
  

}else
{
    echo'<script type="text/javascript">
    alert("Error guardando los datos");
    window.location.href="../../../admin/registrar pasante.php"
    </script>';

}

?>
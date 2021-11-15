<?php 
$id=$_GET['id']; 
 
//base de datos 
$conexion=mysqli_connect("sql204.epizy.com","epiz_30368770","h7iA6zeqMya9","epiz_30368770_pasantesalphadb"); 
//eliminar datos del formulario 
$sql="DELETE FROM grupoe WHERE id LIKE $id"; 
$ejecutar = mysqli_query ($conexion,$sql) or die (mysqli_error($conexion)); 
if ($ejecutar){ 
 
   
header("location:../informacion y creacion/detalles grupo administRacion elecon.php"); 
 
} 
else { 
   
   echo  "Hay un error"; 
} 
 
?>
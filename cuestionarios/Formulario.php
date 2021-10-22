<?
include 'db.php';

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cedula=$_POST['cedula'];
$universidad=$_POST['universidad'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$donde_vives=$_POST['donde_vives'];
$correo=$_POST['correo'];

$sql = "INSERT INTO  cliente values('$nombre','$apellido','$cedula','$universidad','$telefono',
'$direccion','$donde_vives','$correo')";
 $ejecutar = mysqli_query ($conexion,$sql) or die (mysqli_error($conexion));
 

 if (!$ejecutar){
     echo  "Hay un error";
 }
 else {
     echo "Datos guardados";
 }
 $_SESSION['message'] = 'SR/SRA '.$nombre.' Usted ha sido Registrado/a';
 $_SESSION['message_type'] = 'success';
  


?>

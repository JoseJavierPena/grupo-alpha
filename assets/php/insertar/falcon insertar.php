<?php


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];

//base de datos
$conexion=mysqli_connect("sql204.epizy.com","epiz_30368770","h7iA6zeqMya9","epiz_30368770_pasantesalphadb");
$sql = "INSERT INTO  grupof(nombre,apellido,correo) values('$nombre','$apellido','$correo')";
 $ejecutar = mysqli_query ($conexion,$sql);

 if ($ejecutar){

     echo "Datos guardados";
   
header("location:../informacion y creacion/detalles grupo administracion falcon.php");

}
else {
   
    echo  "Hay un error";
}

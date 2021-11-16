<?php


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];

//base de datos
$conexion = mysqli_connect("sql311.epizy.com", "epiz_30380597", "vrWDL7tBbrIJUBa", "epiz_30380597_grupoAlpha");
$sql = "INSERT INTO  grupo(nombre,apellido,correo) values('$nombre','$apellido','$correo')";
$ejecutar = mysqli_query($conexion, $sql);

if ($ejecutar) {

    echo "Datos guardados";

    header("location:../informacion y creacion/detalles grupo administracion alpha.php");
} else {

    echo  "Hay un error";
}

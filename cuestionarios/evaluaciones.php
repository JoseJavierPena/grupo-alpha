<?php


$conexion=mysqli_connect("localhost:3310","root","","pasantes alpha db");
    
    $repositorio= $_POST["repositorio"];
    $linkedin= $_POST["linkedin"];
    $portafolio= $_POST["portafolio"];

  if($_FILES["curriculum"]){

    $nombre_base = basename($_FILES["curriculum"]["name"]);
    $nombre_final = date("d-m-y"). "-".date("H-i-s"). "-".$nombre_base;
    $ruta = "curriculum/".$nombre_final;
    $subirarchivo = ($_FILES["curriculum"]["tmp_name"]. $ruta);

    if($subirarchivo){
$insertar = "INSERT INTO evaluaciones (repositorio,linkedin,portafolio,curriculum) VALUES ('$repositorio','$linkedin','$portafolio','$ruta')";

$resultado=mysqli_query($conexion, $insertar);

if($resultado){
echo "<script> alert('Se enviaron los datos');</script>";
header("location:evaluaciones individuales.html");
}else{
    print("Errormessage: %s\n". mysqli_error($conexion));

}
    }
  }
    

?>
<?php
if(isset($_FILES['subir'])){
    $nombre=$_FILES['archivo'] ['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/".$nombre;
    if($nombre !=""){
        if(copy($ruta,$destino)){
            $repo=$_POST['repo'];
            $linkedin=$_POST['linkedin'];
            $cuv=$_POST['cuv'];
            //base de datos
            $conexion=mysqli_connect("localhost:3310","root","","pasantes alpha db");
            //insercion de los datos
            $sql = "INSERT INTO  evaluaciones('repositorio','linkedIn','portfolio','curriculum') values('$repo','$linkedin','$cuv','$nombre')";
            $query=$conexion->execute($sql);
            if($query){
                echo "guardado correctamente";
            }

$conexion=mysqli_connect("localhost:8111","root","","pasantes alpha db");
    
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
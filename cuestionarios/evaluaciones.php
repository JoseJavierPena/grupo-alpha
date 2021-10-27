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

        }else{
            echo "error";
        }
    
    }
    }


    
   
    
    
   
   
?>
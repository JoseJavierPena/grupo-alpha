<?php
$conexion=mysqli_connect("localhost:3310","root","","pasantes alpha db");


if(isset($_POST['insertar'])){
$question1 = $_POST['question1'];
$question2 = $_POST['question2'];
$question3 = $_POST['question3'];
$question4 = $_POST['question4'];
$question5 = $_POST['question5'];
$question6 = $_POST['question6'];



}


    

$insertar="INSERT INTO individuales(conociminetoshtml,conociminetoscss,conocimientosjavascript,conocimientosphp,conocmientossqlmysql,otroslenguajes) VALUES('$question1','$question2','$question3','$question4','$question5','$question6')";
$resultado= mysqli_query($conexion,$insertar);


if($resultado){
    echo "<script> alert('Se enviaron los datos');</script>";
    header("location:enviar evaluaciones.html");
    }else{
        print("Errormessage: %s\n". mysqli_error($conexion));
    
    }




?>
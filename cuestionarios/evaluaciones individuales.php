<?php

$conexion=mysqli_connect("localhost:8111","root","","pasantes alpha db");

$question1 = $_POST['question1'];
$question2 = $_POST['question2'];
$question3 = $_POST['question3'];
$question4 = $_POST['question4'];
$question5 = $_POST['question5'];
$question6 = $_POST['question6'];
$question7 = $_POST['question7'];
$question8 = $_POST['question8'];
$question9 = $_POST['question9'];
$question10 = $_POST['question10'];
$question11 = $_POST['question11'];
$question12= $_POST['question12'];
$Id_formulario= $_POST["Id_formulario"];   

$insertar="INSERT INTO individuales(conociminetoshtml,conociminetoscss,conocimientosjavascript,conocimientosphp,conocimientosc,conocimientosch,conocimientoscm,conocimientossql,conocimientosora,conocimientosmy,conocimientosex,conocimientospo,Id_formulario) VALUES('$question1','$question2','$question3','$question4','$question5','$question6','$question7','$question8','$question9','$question10','$question11','$question12','$Id_formulario')";
$resultado= mysqli_query($conexion,$insertar);

if($resultado){
    echo "<script> alert('Se enviaron los datos');</script>";
    header("location:agradecimientos.html");
    }else{
        print("Errormessage: %s\n". mysqli_error($conexion));
    
    }

<?php

include "config.php";
session_start();
if($_POST)
{
	$nombre=$_SESSION['nombre'];
    $msg=$_POST['msg'];
    
	$sql="INSERT INTO `chat`(`nombre`, `message`) VALUES ('".$nombre."', '".$msg."')";

	$query = mysqli_query($conn,$sql);
	if($query)
	{
		header('Location: chatpage.php');
	}
	else
	{
		echo "Algo salió mal";
	}
	
	}
?>
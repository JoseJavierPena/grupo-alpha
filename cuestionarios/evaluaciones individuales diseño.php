<?php

include ("../conexion db/db.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="stylesheet" type=" text/css" href="../assets/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type=" text/css" href="../assets/css/style evaluaciones individuales.css" media="screen">
    <title>Evaluaciones individuales</title>

    <link rel="icon" href="../assets/img/social-icon.ico">
</head>

<body>

    <div class="container">
        <main class="container1.0  border mt-5  p-5 rounded  shadow col-12 mb-5">

            <div class="py-5 text-center">
              <img class="d-block mx-auto mb-4" src="../assets/img/horizontal/oscuro/small.png" alt="">
            </div>

        
            <div class="text-justify py-3">
                <h2>Evaluaciones individuales</h2>
                <p class="lead">En esta evaluación veremos sus conocimientos del 1 al 10 en lenguajes de programación y base de datos, en donde 1 es mediocre y 10 excelente. </p>
            </div>

            <div class="individuales">

                <h4 class="mb-3">Evaluación</h4>
                <hr class="my-4 ">

                <form action="evaluaciones individuales.php" name="insertar" method="post">

                    <div class="individuales mx-5">
                      <h3>¿Cuál pasante es usted?</h3> 
                        <select name="Id_formulario" required class="form-control ">
                            <?php 

                            $sql="select * from formulario";
                            $bautor=$conexion->query($sql);
                            while($mostrar=$bautor->fetch_array()){
                          echo   "<option value='".$mostrar['Id_formulario']."'> ".$mostrar['1']." ".$mostrar['2']."</option>";
                            }
                            ?>
                       
                    </select>
                    </div>
                    
                    <hr class="my-4 ">
                    <h3>1. Conocimientos en HTML</h3>
                    <div class="individiduales mx-5  mb-5">
                        <input type="number" class="form-control text-center" name="question1" placeholder="Elija un digito del 1 al 10" required>
                    </div>
                    <hr class="my-4 ">

                    <h3>2. Conocimientos en CSS </h3>
                    <div class="individiduales mx-5 mb-5">
                        <input type="number" class="form-control text-center" name="question2" placeholder="Elija un digito del 1 al 10" required>
                    </div>

                    <hr class="my-4 ">
                    <h3>3. Conocimientos en JavaScript</h3>
                    <div class="individiduales mx-5  mb-5">
                        <input type="number" class="form-control text-center" name="question3" placeholder="Elija un digito del 1 al 10" required>
                    </div>

                    <hr class="my-4 ">
                    <h3>4. Conocimientos en PHP </h3>
                    <div class="individiduales mx-5  mb-5">
                        <input type="number" class="form-control text-center" name="question4" placeholder="Elija un digito del 1 al 10" required>
                    </div>

                    <hr class="my-4 ">
                    <h3>5. Conocimientos en SQL, MySQL y otras base de datos </h3>
                    <div class="individiduales mx-5  mb-5">
                        <input type="number" class="form-control text-center" name="question5" placeholder="Elija un digito del 1 al 10" required>
                    </div>

                    <hr class="my-4 ">

                    <h3>6. Otros lenguajes de programación como : C#. C++. Python y C </h3>
                    <div class="individiduales mx-5 mb-5">
                        <input type="number" class="form-control text-center" name="question6" placeholder="Elija un digito del 1 al 10" required>
                    </div>

                    <hr class="my-4 ">
                    <button class=" btn btn-lg w-100  text-white" type="submit">Enviar y continuar</button>
                </form>
            </div>

            <footer class="my-5 pt-5 text-muted text-center text-small ">
            <p class="mb-1 ">© 2021 Pasantes ALPHA AIlogic</p>
        </footer>

        </main>
     
    </div>



</body>
</html>
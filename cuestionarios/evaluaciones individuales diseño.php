<?php

include("../conexion db/db.php");


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

                <input type="hidden" style="text-align: center;" name="Id_formulario" required class="form-control" value="
                            <?php

                            $sql = "SELECT * FROM formulario ORDER BY Id_formulario DESC LIMIT 1";
                            $bautor = $conexion->query($sql);
                            while ($mostrar = $bautor->fetch_array()) {
                                echo  $mostrar['Id_formulario'];
                            }
                            ?>
                        ">


                    <div class="individuales mx-5">
                        <h3>Usuario</h3>
                        <input type="text" style="text-align: center;"  readonly="readonly" name="nombre" required class="form-control" value="
                           <?php

                            $sql = "SELECT * FROM formulario ORDER BY Id_formulario DESC LIMIT 1";
                            $bautor = $conexion->query($sql);
                            while ($mostrar = $bautor->fetch_array()) {
                                echo  $mostrar['1'].$mostrar['2'];
                            }
                            ?>
                        ">
                    </div>

                    <hr class="my-4 ">
                    <h3>1. Conocimientos en HTML</h3>
                    <div class="individiduales mx-5  mb-5">
                        <select name="question1" class="form-control text-center"  placeholder="Elija un digito del 1 al 10" required>
                        <option value="">Elija un digito del 1 al 10</option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
                    </div>
                    <hr class="my-4 ">

                    <h3>2. Conocimientos en CSS </h3>
                    <div class="individiduales mx-5 mb-5">
                    <select name="question2" class="form-control text-center"  placeholder="Elija un digito del 1 al 10" required>
                    <option value="">Elija un digito del 1 al 10</option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>

 </div>

                    <hr class="my-4 ">

                    <h3>3. Conocimientos en JavaScript</h3>
                    <div class="individiduales mx-5  mb-5">
                    <select name="question3" class="form-control text-center"  placeholder="Elija un digito del 1 al 10" required>
                    <option value="">Elija un digito del 1 al 10</option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>

</div>

                    <hr class="my-4 ">
                    <h3>4. Conocimientos en PHP </h3>
                    <div class="individiduales mx-5  mb-5">
                    <select name="question4" class="form-control text-center"  placeholder="Elija un digito del 1 al 10" required>
                    <option value="">Elija un digito del 1 al 10</option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>

</div>

                    <hr class="my-4 ">
                    <h3>5. Conocimientos en C </h3>
                    <div class="individiduales mx-5  mb-5">
                    <select name="question5" class="form-control text-center"  placeholder="Elija un digito del 1 al 10" required>
                    <option value="">Elija un digito del 1 al 10</option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>

</div>

                    <hr class="my-4 ">
                    <h3>6. Conocimientos en C# </h3>
                    <div class="individiduales mx-5  mb-5">
                    <select name="question6" class="form-control text-center"  placeholder="Elija un digito del 1 al 10" required>
<option value="">Elija un digito del 1 al 10</option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>

</div>

                    <hr class="my-4 "> 
                    <h3>7. Conocimientos en C++ </h3>
                    <div class="individiduales mx-5  mb-5">
                    <select name="question7" class="form-control text-center"  placeholder="Elija un digito del 1 al 10" required>
<option value="">Elija un digito del 1 al 10</option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>


</div>

            
                    <hr class="my-4 ">
                    <h3>8. Conocimientos en SQL</h3>
                    <div class="individiduales mx-5  mb-5">
                    <select name="question8" class="form-control text-center" " placeholder="Elija un digito del 1 al 10" required>
                    <option value="">Elija un digito del 1 al 10</option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>

</div>

               
                    <hr class="my-4 ">

                    <h3>9. Conocimientos en ORACLE DATA BASE</h3>
                    <div class="individiduales mx-5  mb-5">
                    <select name="question9" class="form-control text-center"  placeholder="Elija un digito del 1 al 10" required>
                    <option value="">Elija un digito del 1 al 10</option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>

</div>

                 
                    <hr class="my-4 ">

                    <h3>10. Conocimientos en MYSQL</h3>
                    <div class="individiduales mx-5  mb-5">
                    <select name="question10" class="form-control text-center"  placeholder="Elija un digito del 1 al 10" required>
                    <option value="">Elija un digito del 1 al 10</option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>

</div>

                    <hr class="my-4 ">

                    <h3>11. Conocimientos en EXCEL</h3>
                    <div class="individiduales mx-5  mb-5">
                    <select name="question11" class="form-control text-center" placeholder="Elija un digito del 1 al 10" required>
                    <option value="">Elija un digito del 1 al 10</option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>

</div>

                    <hr class="my-4 ">

                      <h3>12. Conocimientos en POWER POINT</h3>
                    <div class="individiduales mx-5  mb-5">
                    <select name="question12" class="form-control text-center"  placeholder="Elija un digito del 1 al 10" required>
                    <option value="">Elija un digito del 1 al 10</option>
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>

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
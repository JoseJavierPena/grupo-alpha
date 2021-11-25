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
    <link rel="stylesheet" type=" text/css" href="../assets/css/style evaluaciones.css" media="screen">
    <title>Evaluaciones</title>

    <link rel="icon" href="../assets/img/social-icon.ico">
</head>

<body>
    <div class="container ">
        <form method="POST" action="evaluaciones.php" enctype="multipart/form-data" class="border mt-5  p-5 rounded  shadow col-12 mb-5">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="../assets/img/horizontal/oscuro/small.png" alt="">
            </div>
            <h2>Evaluaciones</h2>
            <p class="lead mb-5">Aquí nos suministrará su curriculum y repositorios para ver su rendimiento en programación, base de datos y análisis de sistema. </p>


                <input type="hidden"  name="Id_formulario" value="
                    <?php

                    $sql = "SELECT Id_formulario FROM formulario ORDER BY Id_formulario DESC LIMIT 1";
                    $bautor = $conexion->query($sql);
                    while ($mostrar = $bautor->fetch_array()) {
                        echo   $mostrar['Id_formulario'];
                    }
                    ?>
               ">

               <div class="individuales mx-5">
                        <h3 style="text-align: center;" >Usuario</h3>
                        <input type="text" style="text-align: center;" readonly="readonly" name="nombre" required class="form-control" value="
                           <?php

                            $sql = "SELECT * FROM formulario ORDER BY Id_formulario DESC LIMIT 1";
                            $bautor = $conexion->query($sql);
                            while ($mostrar = $bautor->fetch_array()) {
                                echo  $mostrar['1']." ".$mostrar['2'];
                            }
                            ?>
                        ">
                    </div>

            <div class="form-group col-md-12">
                <label for="repositorio" class="form-label"><b>Repositorio:</b> </label>
                <input type="url" class="form-control" name="repositorio" placeholder="Agregue el enlace" required>
            </div>

            <div class="form-group col-md-12">
                <label for="linkedin" class="form-label"><b>LinkedIn:</b> </label>
                <input type="url" class="form-control" name="linkedin" placeholder="Agregue el enlace " required>
            </div>

            <div class="form-group col-md-12">
                <label for="portfolio" class="form-label">Portafolio: </label>
                <input type="url" class="form-control" name="portafolio" placeholder="Agregue el enlace " required>
            </div>

            <div class="form-group col-md-12">
                <label for="curriculum" class="form-label"><b>Curriculum:</b> </label>
                <input type="file" class="form-control" name="curriculum" required>
                <div class="invalid-feedback">
                    Un archivo .pdf es requerido.
                </div>
            </div>
            <hr class="my-4 ">
                    <button class=" btn btn-lg w-100  text-white" type="submit">Enviar y continuar</button>
        </form>
    </div>
</body>

</html>
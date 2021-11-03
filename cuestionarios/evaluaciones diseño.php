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
        <link rel="stylesheet" type=" text/css" href="../assets/css/style evaluaciones.css" media="screen">
        <title>Evaluaciones</title>

        <link rel="icon" href="../assets/img/social-icon.ico">
    </head>

    <body>

        <div class="container">
            <main>
                <div class="py-5 text-center">
                    <img class="d-block mx-auto mb-4" src="../assets/img/horizontal/oscuro/medium.png" alt="" width="400" height="100">
                    <h2>Evaluaciones</h2>

                    <p class="lead">Aqui nos suministrara su currulum y repositorios para ver su rendimiento en programacion. base de datos y analisis de sistema. </p>
                </div>

                <div class="evaluaciones">
                    <h4 class="evaluaciones">Evaluacion</h4>



                    <hr class="my-4">
                    <form method="POST" action="evaluaciones.php" enctype="multipart/form-data">


                        <div class="evaluaciones">
                            <label for="repositorio" class="form-label">Repositorio: </label>
                            <input type="url" class="form-repo" name="repositorio" placeholder="Agregue el enlace" required>
                        </div>

                        <div class="evaluaciones">
                            <label for="linkedin" class="form-label">LinkedIn: </label>
                            <input type="url" class="form-linkedin" name="linkedin" placeholder="Agregue el enlace " required>
                        </div>

                        <div class="evaluaciones">
                            <label for="portfolio" class="form-label">Portafolio: </label>
                            <input type="url" class="form-portfolio" name="portafolio" placeholder="Agregue el enlace " required>
                        </div>

                        <div class="evaluaciones">
                            <label for="curriculum" class="form-label">Curriculum: </label>
                            <input type="file" class="form-cv" name="curriculum" required>
                            <div class="invalid-feedback">
                                Un archivo .pdf es requerido.
                            </div>

                            <div class="evaluaciones">
                                <label for="Id_formulario" class="form-label">Cual pasante es usted?: </label>
                                <select name="Id_formulario" required>
                                    <?php 

                                    $sql="select * from formulario";
                                    $bautor=$conexion->query($sql);
                                    while($mostrar=$bautor->fetch_array()){
                                  echo   "<option value='".$mostrar['Id_formulario']."'> ".$mostrar['1']."".$mostrar['2']."</option>";
                                    }
                                    ?>
                               
                            </select>
                            </div>
                            <hr class="my-4">


                            <button class=" btn btn-primary btn-lg" type="submit">Enviar y continuar</button>

                        </div>
                    </form>
                </div>

            </main>

            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1">© 2021 Pasantes ALPHA AIlogic</p>
                <ul class="list-inline">

                </ul>
            </footer>
        </div>
    </body>

    </html>

    </html>
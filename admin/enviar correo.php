<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="stylesheet" type=" text/css" href="../assets/css/bootstrap.min.css" media="screen">
    <title>Envio Al Correo</title>

    <link rel="icon" href="../assets/img/social-icon.ico">

</head>

<body>

    <div class="container">
        <div class="row">

            <form class="border mt-5 p-3 mx-4 rounded  shadow mb-5" action="PHPMailer/includes/enviar.php" method="Post">

                <div class="py-5 px-4 text-center">
                    <img class="d-block mx-auto mb-4" src="../assets/img/horizontal/oscuro/small.png" alt="">
                </div>

                <div class="form-row mb-3">
                    <div class="form-group col-md-6">
                        <label for="Imail" class="form-label">Correo:</label>
                        <input type="text" class="form-control" id="correo" name="correo" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                            Ingrese un correo.
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="asunto" class="form-label">Asunto:</label>
                        <input type="text" class="form-control" id="asunto" name="asunto" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                            Ingrese un asunto.
                        </div>
                    </div>

                    <div class="form-group  col-12">
                        <textarea name="mensaje" id="mensaje" class="form-control w-100" placeholder="Descripción del asunto " rows="3"></textarea>
                    </div>

                    <hr class="my-4">
                    <button class="btn w-100 p-2 text-white" type="submit" name="enviar" style="background-color: #39ace7">Enviar al correo</button>

                    <footer class=" pt-5 text-muted text-center text-small">
                        <p class="mb-1 text-center">© 2021 Pasantes ALPHA AIlogic</p>
                        <a href="pasantes activos.php">Volver a la página de administrador</a>
                    </footer>

                </div>
            </form>
        </div>
    </div>
</body>

</html>
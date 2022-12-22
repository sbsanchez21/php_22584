<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="text-center">
    <div class="container">
        <div class="m-3">
            <img src="images/logo.jpg" alt="logo" width="72" height="72" class="mb-3">
            <h3 class="mb-3">Editar Usuario</h3>
        </div>    

        <div class="m-4">
            <form action="../controller/updUsuario.php" method="post">
                <input type="hidden" name="idUsuario" value="<?php echo $_GET["idUsuario"]; ?>">
                <div class="row">
                    <div class="col-md-6">
                        <input type="email" name="usuario" id="usuario" value="<?php echo $_GET["usuario"];?>" class="form-control" placeholder="Ingrese el nombre de usuario" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="clave" id="clave" value="<?php echo $_GET["clave"];?>" class="form-control" placeholder="Ingrese la contraseña" required>
                    </div>
                </div>

                <hr class="mb-4">
                <div class="row">
                    <input type="submit" value="Enviar" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>
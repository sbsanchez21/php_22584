<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="text-center">
    <div class="container">
        <div class="m-3">
            <img src="images/logo.jpg" alt="logo" width="72" height="72" class="mb-3">
            <h4 class="mb-3">Alta Localidad</h4>
        </div>

        <div class="mb-3">
            <form action="../controller/addLocalidad.php" method="post" >
                <div class="row mb-3">
                    <div class="col-md-6">
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese nombre de localidad" required>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select" id="idProv"  name="idProv" required>
                            <option selected>Seleccione una provincia</option>
                            <?php
                            require_once("../dao/ProvinciaDAO2.php") ;
                            $dao=new ProvinciaDAO2();
                            $listProv=$dao->listarProvincias();

                            foreach($listProv as $prov) {
                                $id=$prov->getIdProvincia();
                                $nom=$prov->getNombre();
                                echo "<option value='$id'>$nom</option>";
                            }
                            ?>
                            
                        </select>
                    </div>
                </div>
                
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
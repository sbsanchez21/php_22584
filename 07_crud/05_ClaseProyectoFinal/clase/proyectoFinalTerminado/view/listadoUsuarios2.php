<!doctype html>
<html lang="en">

<head>
    <title>Listado Usuarios</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

</head>

<body class="text-center bg-light">
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container">
            <div class="py-3">
                <img class="mx-auto mb-3" src="images/logo.jpg" alt="Logo" width="75" height="75">
                <p class="lead">Listado de usuarios existentes</p>
            </div>

            
                

            <table class="table table-hover table-sm">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Operaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    //importamos UsuarioDAO2 para utilizarlo debajo
                    require_once("../dao/UsuarioDAO2.php");
                    require_once("../model/Usuario.php");

                    //creo un objeto $usuDAO para poder ejecutar sus métodos
                    $usuDAO=new UsuarioDAO2();
                    //ejecuto el método listarUsuarios que trae todos los usuarios de la DB
                    //en la var $listUsu tengo un array con Objetos Usuarios, cada objeto usuario
                    //tiene los datos de cada registro de la DB
                    $listUsu=$usuDAO->listarUsuarios();
                    // var_dump($listUsu);

                    //foreach recorre todo el array $listUsu
                    //y coloca el primer objt Usuario en $usu
                    //luego coloca el 2do objt, 3ro
                    foreach ($listUsu as $usu) {
                        //coloco los datos del objeto usuario en variables
                        $idUsuario=$usu->getIdUsuario();
                        $usuario=$usu->getUsuario();
                        $clave=$usu->getClave();

                        //la var $usu es un Objeto Usuario
                        echo "<tr>";

                        echo "<td>";
                        //ejecuta el méotdo getIdUsuario del objeto Usuario
                        // var_dump($usu);
                        echo $idUsuario;
                        echo "</td>";
                        
                        echo "<td>";
                        echo $usuario;
                        echo "</td>";

                        
                        echo "<td>";
                        echo $clave;
                        echo "</td>";

                        //NO ES seguro enviar info sensible por el método Get
                        //otra opción sería enviar solamente el idUsuario y luego en editUsuario.php recuperar los datos
                        //DTO data transfer object nos permite enviar un objeto
                        echo "<td>";
                        echo "<a href='editUsuario.php?idUsuario=$idUsuario&usuario=$usuario&clave=$clave'>";
                        echo "<i class='bi bi-pencil-fill mx-2'></i>";
                        echo "</a>";
                        echo "<i class='bi bi-trash3-fill mx-2'></i>";
                        echo "</td>";


                        echo "</tr>";

                    }
                    
                    ?>
                </tbody>
                </table>


        </div>



    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
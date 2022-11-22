<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
    
    <?php 
    require_once("Automovil.php");
    require_once("Vendedor.php");
    require_once("Cliente.php");

    //en clases siguientes vamos a leer la DB y cargar los objetos con estos datos
    $vend1=new Vendedor(1,"Juan","Perez",22333111,"Jperez@gmail.com"); //instancia objeto
    $vend2=new Vendedor(2,"Kevin","Caseres",223331111,"kcaseres@gmail.com");

    //todo: construct auto
    $auto1=new Automovil();
    $auto1->setPatente("LLL333");
    $auto1->setAnio(2012);

    $cli1=new Cliente(1,"Roberto","Perez",22333111,"jperez@gmail.com");
    $cli2=new Cliente(1,"laura", "Estevez", 2233555, "lest@gmail.com");

    $vend1->venderAuto($auto1, $cli2);

    ?>


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
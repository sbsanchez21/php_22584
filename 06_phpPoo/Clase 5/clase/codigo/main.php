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
    require_once("Auto.php");
    require_once("Vendedor.php");
    require_once("Cliente.php");

    $vend1=new Vendedor(); //instancia objeto
    $vend1->nombre="Juan";
    $vend1->apellido="Perez";
    $vend1->dni=22333111;
    $vend1->email="jperez@gmail.com";

    $vend2=new Vendedor();
    $vend2->nombre="Kevin";
    $vend2->apellido="Caseres";
    $vend2->dni=22333111;
    $vend2->email="kcaseres@gmail.com";    

    $auto1=new Auto();
    $auto->patente="LLL123";
    $auto1->anio=2012;

    $cli1=new Cliente();
    $cli1->nombre="Roberto";
    $cli1->apellido="Perez";
    $cli1->dni=22333111;
    $cli1->email="jperez@gmail.com";

    $vend1->venderAuto($auto1, $cli1);
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
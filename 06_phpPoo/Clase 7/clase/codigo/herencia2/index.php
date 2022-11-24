<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Admininstración de Vehículos</h4>

    <?php 
    require_once("Automovil.php");
    require_once("Camion.php");
    require_once("Omnibus.php");

    $auto1 = new Automovil("rojo", "Renault", "2012", "AAA111", 5);

    $camion1 = new Camion("rojo", "Renault", "2012", "BBB222", 1000, 6);
    $camion2 = new Camion("rojo", "Renault", "2012", "CCC333", 1000, 6);

    $omni1 = new Omnibus("rojo", "Renault", "2012", "CCC333", 35);
    $omni2 = new Omnibus("rojo", "Renault", "2012", "CCC333", 45);

    $auto1->arrancar();

    $camion1->cargar(1200);
    $camion1->cargar(900);

    ?>
</body>
</html>
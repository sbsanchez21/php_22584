<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenidos al sistema de banco</h1>
    <?php 
    require_once('cliente.php');
    require_once('cuenta.php');

    $cuenta = new Cuenta(1, "Caja de Ahorro", 10000);
    $cliente1 = new Cliente(1, "Juan", "Perez", $cuenta);
    $cliente1->mostrarSaldo();
    $cliente1->mostrarTipoCuenta();
    $cliente1->depositar(5000);

    echo $cliente1->getNombre();
    echo "<br>";
    echo $cliente1->getCuenta()->getTipo();
    echo "<br>";

    //$cliente1->getCuenta()->depositar(1300);
    $cliente1->depositar(1300);
    $cliente1->getCuenta()->extraer(300);



    ?>    

</body>
</html>

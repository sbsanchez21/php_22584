<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Clientes</title>
</head>
<body>
    <h3>Listado de Clientes</h3>
    
    <?php
    require "ConexionDB.php";
    $sql = "SELECT * from clientes order by id";
    $query = $mysqli->query($sql);
    
    //manipular los clientes desde un objetos
    require_once("cliente.php");
    //fetch_assoc() devuelve un array asociativo, par clave-valor id=1, nombre=juan, etc.
    while ($resultado = $query->fetch_assoc()) {
        $cliente = new Cliente($resultado['id'], $resultado['nombre'], $resultado['apellido'], $resultado['telefono'], $resultado['mail'], $resultado['dni']);
        //var_dump($cliente);
        $clientes[] = $cliente;
      }

    $long = count($clientes);
    echo "<ul>";
    //var_dump($clientes);
    for ($i = 0; $i < $long; $i++) {
       echo "<li> {$clientes[$i]->getNombre()}, {$clientes[$i]->getApellido()}: {$clientes[$i]->getMail()} </li>";
    }
    echo "</ul>";
    ?>
    
</body>
</html>
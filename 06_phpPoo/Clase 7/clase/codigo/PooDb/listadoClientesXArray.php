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
    
    
    //manipular los clientes desde un array
    //fetch_assoc() devuelve un array asociativo, par clave-valor id=1, nombre=juan, etc.
    while ($resultado = $query->fetch_assoc()) {
        $clientes[] = $resultado;
      }

    $long = count($clientes);
    echo "<ul>";
    for ($i = 0; $i < $long; $i++) {
        echo "<li> {$clientes[$i]['nombre']}, {$clientes[$i]['apellido']}: {$clientes[$i]['mail']} </li>";
    }
    echo "</ul>";
    ?>
    
</body>
</html>
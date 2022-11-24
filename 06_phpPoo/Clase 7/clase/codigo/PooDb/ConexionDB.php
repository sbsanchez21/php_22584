<?php
    // Variables de la conexion a la DB
    $mysqli = new mysqli("localhost", "root", "", "concesionario2"); //localhost
    // Comprobamos la conexion
    if ($mysqli->connect_errno) {
        die("Fallo la conexion");
    } else {
        //echo "Conexion exitosa";
        mysqli_set_charset($mysqli, "utf8");
    }
?>
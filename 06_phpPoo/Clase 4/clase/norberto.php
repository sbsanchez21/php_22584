<?php 

$conex= new mysqli("localhost", "root", "","alumn22584");
//mysql_select_db("curso28584");
//$query=$conex->query("SELECT * FROM alumnos");

if ($conex->errno) {
    echo"No se pudo conectar a la base de Datos";

} else {
    echo"Ud ingreso de manera satisfactoria a la Basede DAtos...";
    $sql = "SELECT id, nombre, apellido FROM alumnos";
    $result = $conex->query($sql);

    //var_dump($result);
    while ($alumno=$result->fetch_assoc()) {
        var_dump($alumno);
        $listAlumnos[]=$alumno;
    }
    
}
?>

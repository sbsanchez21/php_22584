<?php 
$usu=$_POST["usuario"];
$pass=$_POST["password"];

require_once("../dao/UsuarioDAOC.php");

$usuarioDAO = new UsuarioDAOC();
$guardoOk = $usuarioDAO->guardarUsuario($usu, $pass);

if ($guardoOk) {
    header("Location: ../view/mensajeOk.php");
    exit;    
} else {
    header("Location: ../view/mensajeError.php");
    exit;    
}


?>
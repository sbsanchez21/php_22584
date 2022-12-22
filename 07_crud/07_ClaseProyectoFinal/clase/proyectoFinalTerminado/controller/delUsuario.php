<?php 
require_once("../dao/UsuarioDAO2.php");

$idUsuario=$_POST["idUsuario"];

$dao=new UsuarioDAO2();
$delOk=$dao->delUsuario($idUsuario);


if ($delOk) {
    header("Location: ../view/mensajeOk.php");
    exit;
} else {
    header("Location: ../view/mensajeError.php");
    exit;
} 

?>
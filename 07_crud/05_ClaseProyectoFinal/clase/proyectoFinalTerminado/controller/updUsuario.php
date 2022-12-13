<?php 
    $idUsuario=$_POST["idUsuario"];
    $usuario=$_POST["usuario"];
    $clave=$_POST["clave"];

    require_once("../dao/UsuarioDAO2.php");
    $usuDAO=new UsuarioDAO2();
    $updOk=$usuDAO->updUsuario($idUsuario,$usuario,$clave);

    if ($updOk) {
        header("Location: ../view/mensajeOk.php");
        exit;
    } else {
        header("Location: ../view/mensajeError.php");
        exit;
    } 


?>
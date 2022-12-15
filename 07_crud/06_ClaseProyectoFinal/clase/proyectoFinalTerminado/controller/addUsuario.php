<?php 
    $user=$_POST["user"];
    $pass=$_POST["pass"];

    require_once("../dao/UsuarioDAO2.php");
    $usuDAO=new UsuarioDAO2();
    $insertOk=$usuDAO->addUsuario($user,$pass);

    if ($insertOk) {
        header("Location: ../view/mensajeOk.php");
        exit;
    } else {
        header("Location: ../view/mensajeError.php");
        exit;
    } 


?>
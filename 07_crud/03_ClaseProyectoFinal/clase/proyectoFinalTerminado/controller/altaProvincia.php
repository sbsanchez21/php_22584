<?php 
    $nom=$_POST["nombre"];

    require_once("../dao/ProvinciaDAO2.php");
    $provDAO=new ProvinciaDAO2();
    $insertOk=$provDAO->addProvincia($nom);

    if ($insertOk) {
        header("Location: ../view/mensajeOk.php");
        exit;
    } else {
        header("Location: ../view/mensajeError.php");
        exit;
    }    
?>
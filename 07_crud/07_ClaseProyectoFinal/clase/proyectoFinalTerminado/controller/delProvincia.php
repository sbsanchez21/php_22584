<?php 
    $idProv=$_POST["idProvincia"];

    
    
    require_once("../dao/ProvinciaDAO2.php");
    $provDAO=new ProvinciaDAO2();
    $delOk=$provDAO->delProv($idProv);

    if ($delOk) {
        header("Location: ../view/mensajeOk.php");
        exit;
    } else {
        header("Location: ../view/mensajeError.php");
        exit;
    }    
?>
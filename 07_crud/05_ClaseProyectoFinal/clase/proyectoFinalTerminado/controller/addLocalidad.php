<?php 
    $nom=$_POST["nombre"];
    $idProv=$_POST["idProv"];
    //echo $nom;
    //echo $idProv;

    require_once("../dao/LocalidadDAO2.php");
    $dao=new LocalidadDAO2();
    $insertOk=$dao->addLocalidad($nom,$idProv);
    if ($insertOk) {
        header("Location: ../view/mensajeOk.php");
        exit;
    } else {
        header("Location: ../view/mensajeError.php");
        exit;
    }    
?>
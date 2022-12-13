<?php 
class LocalidadDAO2 {

    /**
     * Da de alta una localidad con los parámetros 
     * True si insert, false si no
     */
    function addLocalidad($nom,$idProv) {
        //todo: para datos sensibles es buena práctica validar si el idprov existe
        require_once("../dataBase/ConexionDB.php");
        $con=new ConexionDB("localhost","root","","cacproyecto");
        $con->conectar();
        $con->ejecutar("INSERT INTO localidades (nombre, idProvincia) VALUES ('$nom',$idProv) ");

        return $con->cantFilas()==1;

    }

}

?>
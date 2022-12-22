<?php 
class ProvinciaDAO2 {
    
    /**
     * Trae todas las provincias de la tabla Provicnia
     * de la db.
     * Devuelve un listado de Objetos Provincia
     */
    public function listarProvincias() {
        require_once("../dataBase/ConexionDB.php");
        require_once("../model/Provincia.php");

        $conexionDB=new ConexionDB("localhost","root","","cacproyecto");
        $conexionDB->conectar();
        $result=$conexionDB->ejecutar("SELECT * FROM provincias");

        //recorrer $result que tiene todas las provincias
        //crear un objeto Provincia x cada fila
        //agregarlo a un array
        while ($prov=$result->fetch_assoc()) {
            //$prov la 1er fila
            $provObj=new Provincia($prov["idprovincia"],$prov["nombre"]);

            //va agregando cada obj prov en un array llamado $listProv
            $listProv[]=$provObj;
        }

        return $listProv;
    }

    public function addProvincia($nom) {
        //todo: validar que no exista la prov
        // if (existeProvincia($nom)) {
        //     # code...
        // } else {
        //     # code...
        // }
        



        require_once("../dataBase/ConexionDB.php");
        $con=new ConexionDB("localhost","root","","cacproyecto");
        $con->conectar();
        $con->ejecutar("INSERT INTO provincias (nombre) VALUES ('$nom')");

        //devuelve true si se insertaron más de una fila
        //devuelve false si se inserto 0 filas
        return $con->cantFilas()==1;
    }

    public function existeProvincia($nom) {
        return false;
    }

    public function delProv($idProv) {
        require_once("../dataBase/ConexionDB.php");
        $con=new ConexionDB("localhost","root","","cacproyecto");
        $con->conectar();
        $con->ejecutar("DELETE FROM provincias WHERE idprovincia=$idProv");

        //devuelve true si se insertaron más de una fila
        //devuelve false si se inserto 0 filas
        return $con->cantFilas()==1;
    }    
}
?>
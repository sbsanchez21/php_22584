<?php 
class ProvinciaDAOC {
    public function getProvinciaXID($id) {
        require_once("../dataBase/ConexionDB.php");
        require_once("../model/Provincia.php");

        $conexionDB = new ConexionDB("localhost","root", "", "cacproyecto");
        $conexionDB->conectar();

        $sql="SELECT * FROM provincias WHERE idprovincia = $id";
        $result = $conexionDB->ejecutar($sql);

        while ($prov = $result->fetch_assoc()) {
            $provObj = new Provincia($prov["idprovincia"], $prov["nombre"]);            
        }

        return $provObj;    

    }

    public function listarProvincias() {
        return null;
    }
}
?>
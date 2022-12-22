<?php 
class LocalidadDAOC {

    public function getLocalidadXID($id) {
        require_once("../dataBase/ConexionDB.php");
        require_once("../model/Localidad.php");
        require_once("../dao/ProvinciaDAOC.php");

        $conexionDB = new ConexionDB("localhost","root", "", "cacproyecto");
        $conexionDB->conectar();

        $sql="SELECT * FROM localidades WHERE idlocalidad=$id";
        $result = $conexionDB->ejecutar($sql);

        $provDAO = new ProvinciaDAOC();
        while ($loc = $result->fetch_assoc()) {
            $provincia = $provDAO->getProvinciaXID($loc["idProvincia"]);

            $locObj = new Localidad($loc["idlocalidad"], $loc["nombre"], $provincia);
        }

        return $locObj;
    }
}
?>
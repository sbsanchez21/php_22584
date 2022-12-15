<?php 
class PedidoDAOC {

    public function listarPedidos() {
        require_once("../dataBase/ConexionDB.php");
        require_once("../model/Pedido.php");
        require_once("../dao/LocalidadDAOC.php");

        $con = new ConexionDB("localhost","root","","cacproyecto");
        $con->conectar();
        $result = $con->ejecutar("SELECT * FROM pedidos");

        $locDAO = new LocalidadDAOC();
        while ($pedido = $result->fetch_assoc()) {
            
            $localidad= $locDAO->getLocalidadXID($pedido["localidad"]);

            $pedObj = new Pedido($pedido["idpedido"],$pedido["nombre"],$pedido["apellido"],$pedido["usuario"],$pedido["mail"],$pedido["lugarentrega"], $localidad ,$pedido["codpostal"], $pedido["formadepago"],$pedido["tarjtitular"],$pedido["tarjnumero"],$pedido["tarjvto"],$pedido["tarjclave"]);

            $listPedidos[]=$pedObj;
        }

        return $listPedidos;

    }

    public function getPedidoXID($id) {
        require_once("../dataBase/ConexionDB.php");
        require_once("../model/Pedido.php");
        require_once("../dao/LocalidadDAOC.php");

        $conexionDB = new ConexionDB("localhost","root", "", "cacproyecto");
        $conexionDB->conectar();

        $sql="SELECT * FROM pedidos WHERE idpedido = $id";
        $result = $conexionDB->ejecutar($sql);
        $locDAO = new LocalidadDAOC();

        while ($pedido = $result->fetch_assoc()) {
            $localidad= $locDAO->getLocalidadXID($pedido["localidad"]);

            $pedObj = new Pedido($pedido["idpedido"],$pedido["nombre"],$pedido["apellido"],$pedido["usuario"],$pedido["mail"],$pedido["lugarentrega"], $localidad ,$pedido["codpostal"], $pedido["formadepago"],$pedido["tarjtitular"],$pedido["tarjnumero"],$pedido["tarjvto"],$pedido["tarjclave"]);
        }

        return $pedObj;            
    }

    public function altaPedido(Pedido $pedido) {
        require_once("../dataBase/ConexionDB.php");

        $conexionDB = new ConexionDB("localhost","root", "", "cacproyecto");
        $conexionDB->conectar();

        $sql = "INSERT INTO pedidos 
        (nombre, apellido, usuario, mail, lugarentrega, localidad, codpostal, formadepago, tarjtitular, tarjnumero, tarjvto, tarjclave) 
        VALUES (
        '{$pedido->getNombre()}', 
        '{$pedido->getApellido()}', 
        '{$pedido->getUsuario()}', 
        '{$pedido->getMail()}', 
        '{$pedido->getLugarentrega()}', 
         {$pedido->getLocalidad()->getIdLocalidad()},
         '{$pedido->getCodpostal()}', 
         '{$pedido->getFormadepago()}', 
         '{$pedido->getTarjtitular()}', 
         {$pedido->getTarjnumero()}, 
         '{$pedido->getTarjvto()}', 
         {$pedido->getTarjclave()})";
         
        //  var_dump($sql);
        $conexionDB->ejecutar($sql);

        return $conexionDB->cantFilas() > 0;
                    
    }

}

?>
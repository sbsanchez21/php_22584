<?php 
class PedidoDAO {

    public function guardarPedido($pedido) {
        require_once("../dataBase/ConexionDB.php");
        $conexionDB = new ConexionDB("localhost","root","","cacproyecto");
        $conexionDB->conectar();
    
        $sql = "INSERT INTO pedidos 
        (`nombre`, `apellido`, `usuario`, `mail`, `lugarentrega`, `localidad`, `provincia`, `codpostal`, `formadepago`, `tarjtitular`, `tarjnumero`, `tarjvto`, `tarjclave`) 
        VALUES (
        '{$pedido->getNombre()}', 
        '{$pedido->getApellido()}', 
        '{$pedido->getUsuario()}', 
        '{$pedido->getMail()}', 
        '{$pedido->getLugarentrega()}', 
         {$pedido->getLocalidad()},
         {$pedido->getProvincia()}, 
         '{$pedido->getCodpostal()}', 
         '{$pedido->getFormadepago()}', 
         '{$pedido->getTarjtitular()}', 
         {$pedido->getTarjnumero()}, 
         '{$pedido->getTarjvto()}', 
         {$pedido->getTarjclave()})";
        
        
        $conexionDB->ejecutar($sql);

        return $conexionDB->cantFilas() > 0;
    }

    public function listarPedidos() {
        require_once("../dataBase/ConexionDB.php");
        $conexionDB = new ConexionDB("localhost","root","","cacproyecto");
        $conexionDB->conectar();

        $sql = "SELECT * FROM pedidos";
        $result = $conexionDB->ejecutar($sql);

        while($pedido = $result->fetch_assoc()) {
            $listaPedidos[] = $pedido;
        }
            
        return $listaPedidos;
    }

    /** Método o Función que devuelve todos los pedidos de 
     * la tabla Pedidos de la Base de Datos.
     * El método se conecta a la BD, obtiene todos los pedidos
     * y devuelve un array asociativo.
     */
    public function listarPedidosEC() {
        require_once("../dataBase/ConexionDB.php");
        $conexionDB = new ConexionDB("localhost","root","","cacproyecto");
        $conexionDB->conectar();

        $sql = "SELECT * FROM pedidos ORDER BY apellido";
        $result = $conexionDB->ejecutar($sql);

        while ($pedido = $result->fetch_assoc()) {
            $listaPedidos[] = $pedido;
        }

        return $listaPedidos;
    }

    public function editarPedido($pedido) {
        require_once("../dataBase/ConexionDB.php");
        $conexionDB = new ConexionDB("localhost","root","","cacproyecto");
        $conexionDB->conectar();
    
        //todo: cargar todos los datos del pedido
        $sql = "UPDATE pedidos SET 
        nombre='{$pedido->getNombre()}',
        apellido='{$pedido->getApellido()}', 
        usuario='{$pedido->getUsuario()}', 
        mail='{$pedido->getMail()}', 
        lugarentrega='{$pedido->getLugarentrega()}' 
        WHERE idpedido='{$pedido->getIdPedido()}'";
                
        
        $conexionDB->ejecutar($sql);

        return $conexionDB->cantFilas() > 0;
    }


}

?>
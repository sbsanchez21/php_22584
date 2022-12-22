<?php 
    $id = $_POST['id'];
    $nombre = $_POST['firstName'];
    $apellido = $_POST['lastName'];
    $usuario = $_POST['username'];
    $mail = $_POST['email'];
    $lugarentrega = $_POST['address'];
    $localidad = $_POST['country'];
    $provincia = $_POST['state'];
    $codpostal = $_POST['zip'];
    $formadepago = $_POST['paymentMethod'];
    $tarjtitular = $_POST['cc-name'];
    $tarjnumero = $_POST['cc-number'];
    $tarjvto = $_POST['cc-expiration'];
    $tarjclave = $_POST['cc-cvv'];

    //Este paso es necesario porque trabajamos con POO
    //Creamos un objeto Pedido para luego guardarlo en la DB
    require_once("../model/Pedido.php");
    require_once("../model/Localidad.php");
    require_once("../model/Provincia.php");

    $provincia = new Provincia(1,"Mendoza");
    $localidad = new Localidad(1,"Guayamallen", $provincia);

    $pedido = new Pedido($id, $nombre, $apellido, $usuario, $mail, $lugarentrega, $localidad, $codpostal, $formadepago, $tarjtitular, $tarjnumero, $tarjvto, $tarjclave);
    
    require_once("../dao/PedidoDAO.php");

    $pedidoDAO = new PedidoDAO();
    $guardoOk = $pedidoDAO->editarPedido($pedido);

    if ($guardoOk) {
        header("Location: ../view/mensajeOk.php");
        exit;    
    } else {
        header("Location: ../view/mensajeError.php");
        exit;    
    }
    
  
?>
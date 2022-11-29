<?php 

$nombre = $_POST['firstName'];
$apellido = $_POST['lastName'];
$usuario = $_POST['username'];
$mail = $_POST['email'];
$lugarentrega = $_POST['address'];
$idLocalidad = $_POST['country'];
$idProvincia = $_POST['state'];
$codpostal = $_POST['zip'];
$formadepago = $_POST['paymentMethod'];
$tarjtitular = $_POST['cc-name'];
$tarjnumero = $_POST['cc-number'];
$tarjvto = $_POST['cc-expiration'];
$tarjclave = $_POST['cc-cvv'];

//populate poo
require_once("../model/Pedido.php");
require_once("../model/Localidad.php");
require_once("../model/Provincia.php");
require_once("../dao/PedidoDAOC.php");

$provincia = new Provincia($idProvincia, null);
$localidad = new Localidad($idLocalidad, null, $provincia);

$pedido = new Pedido(null, $nombre, $apellido,$usuario,$mail,$lugarentrega,$localidad,$codpostal,$formadepago,$tarjtitular,$tarjnumero,$tarjvto,$tarjclave);
// var_dump($pedido);

$dao = new PedidoDAOC();
$insertOk = $dao->altaPedido($pedido);

if ($insertOk) {
    header("Location: ../view/mensajeOk.php");
    exit;
} else {
    header("Location: ../view/mensajeError.php");
    exit;
}




?>
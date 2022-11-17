<?php
require_once("Auto.php");
require_once("Cliente.php");
class Vendedor {
    //atributos
    public $id;
    public $nombre;
    public $apellido;
    public $dni;
    public $email;
    public $cantVentas;
    public $autosVendidos;
    public $comision;

    function venderAuto(Auto $auto, Cliente $cliente) {
        //todo
    }
    
    function armarCotizcion() {

    }
}

?>
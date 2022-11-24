<?php 
require_once("Vehiculo.php");
class Automovil extends Vehiculo {
    private $cantPuertas;

    function __construct($color, $marca, $modelo, $patente, $cantPuertas)  {
        parent::__construct($color, $marca, $modelo, $patente); //ejecuta el constructor de vehículos
        $this->cantPuertas=$cantPuertas;
    }


    /**
     * Get the value of cantPuertas
     */ 
    public function getCantPuertas()
    {
        return $this->cantPuertas;
    }

    /**
     * Set the value of cantPuertas
     *
     * @return  self
     */ 
    public function setCantPuertas($cantPuertas)
    {
        $this->cantPuertas = $cantPuertas;

        return $this;
    }
}
?>
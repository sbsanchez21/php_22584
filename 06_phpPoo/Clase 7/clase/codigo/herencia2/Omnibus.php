<?php 
require_once("Vehiculo.php");
class Omnibus extends Vehiculo {
    private $cantPasajerosMax;
    
    function __construct($color, $marca, $modelo, $patente, $cantPasajerosMax)  {
        parent::__construct($color, $marca, $modelo, $patente); //ejecuta el constructor de vehículos
        $this->cantPasajerosMax=$cantPasajerosMax;
    }


    /**
     * Get the value of cantPasajerosMax
     */ 
    public function getCantPasajerosMax()
    {
        return $this->cantPasajerosMax;
    }

    /**
     * Set the value of cantPasajerosMax
     *
     * @return  self
     */ 
    public function setCantPasajerosMax($cantPasajerosMax)
    {
        $this->cantPasajerosMax = $cantPasajerosMax;

        return $this;
    }

    public function cargarPasajeros(){
        //todo
    }
}
?>
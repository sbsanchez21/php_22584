<?php 
require_once("Vehiculo.php");

class Camion extends Vehiculo {
    private $tara;
    private $cantRuedas;

    function __construct($id, $patente, $marca, $modelo, $tara,$cantRuedas)
    {
        parent::__construct($id,$patente,$marca,$modelo);
        $this->tara=$tara;
        $this->cantRuedas=$cantRuedas;
    }

    /**
     * Get the value of tara
     */ 
    public function getTara()
    {
        return $this->tara;
    }

    /**
     * Set the value of tara
     *
     * @return  self
     */ 
    public function setTara($tara)
    {
        $this->tara = $tara;

        return $this;
    }

    /**
     * Get the value of cantRuedas
     */ 
    public function getCantRuedas()
    {
        return $this->cantRuedas;
    }

    /**
     * Set the value of cantRuedas
     *
     * @return  self
     */ 
    public function setCantRuedas($cantRuedas)
    {
        $this->cantRuedas = $cantRuedas;

        return $this;
    }
}

?>
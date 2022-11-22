<?php 
class Automovil {
    private $patente;
    private $nroMotor;
    private $anio;


    //todo hacer construct
    
    function trasladarse() {
        //todo
    }


    /**
     * Get the value of patente
     */ 
    public function getPatente()
    {
        return $this->patente;
    }

    /**
     * Set the value of patente
     *
     * @return  self
     */ 
    public function setPatente($patente)
    {
        $this->patente = $patente;

        return $this;
    }

    /**
     * Get the value of nroMotor
     */ 
    public function getNroMotor()
    {
        return $this->nroMotor;
    }

    /**
     * Set the value of nroMotor
     *
     * @return  self
     */ 
    public function setNroMotor($nroMotor)
    {
        $this->nroMotor = $nroMotor;

        return $this;
    }

    /**
     * Get the value of anio
     */ 
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set the value of anio
     *
     * @return  self
     */ 
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }
}
?>
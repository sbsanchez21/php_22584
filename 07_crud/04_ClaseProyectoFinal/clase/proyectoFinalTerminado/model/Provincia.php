<?php 
class Provincia {
    private $idProvincia;
    private $nombre;

    function __construct($idProvincia, $nombre)
    {
        $this->idProvincia=$idProvincia;
        $this->nombre=$nombre;
    }
    


    /**
     * Get the value of idProvincia
     */ 
    public function getIdProvincia()
    {
        return $this->idProvincia;
    }

    /**
     * Set the value of idProvincia
     *
     * @return  self
     */ 
    public function setIdProvincia($idProvincia)
    {
        $this->idProvincia = $idProvincia;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
}
?>
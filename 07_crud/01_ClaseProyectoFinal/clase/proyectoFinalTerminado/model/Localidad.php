<?php 
require_once("Provincia.php");
class Localidad {
    private $idLocalidad;
    private $nombre;
    private Provincia $provincia;

    function __construct($idLocalidad, $nombre, Provincia $provincia)
    {
        $this->idLocalidad=$idLocalidad;
        $this->nombre=$nombre;
        $this->provincia=$provincia;
    }


    /**
     * Get the value of idLocalidad
     */ 
    public function getIdLocalidad()
    {
        return $this->idLocalidad;
    }

    /**
     * Set the value of idLocalidad
     *
     * @return  self
     */ 
    public function setIdLocalidad($idLocalidad)
    {
        $this->idLocalidad = $idLocalidad;

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

    /**
     * Get the value of provincia
     */ 
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set the value of provincia
     *
     * @return  self
     */ 
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }
}
?>
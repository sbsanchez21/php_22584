<?php
require_once("Automovil.php");
require_once("Cliente.php");
class Vendedor {
    //atributos
    private $id;
    private $nombre;
    private $apellido;
    private $dni;
    private $email;
    private $cantVentas;
    private $autosVendidos;
    private $comision;

    //constructor
    function __construct($id, $nombre, $apellido, $dni, $email)    {
        $this->id=$id;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->dni=$dni;
        $this->email=$email;
    }    


    // getters y settres

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        //todo: controlar que el user sea admin
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

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
     * Get the value of apellido
     */ 
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */ 
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of dni
     */ 
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set the value of dni
     *
     * @return  self
     */ 
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of cantVentas
     */ 
    public function getCantVentas()
    {
        return $this->cantVentas;
    }

    /**
     * Set the value of cantVentas
     *
     * @return  self
     */ 
    public function setCantVentas($cantVentas)
    {
        $this->cantVentas = $cantVentas;

        return $this;
    }

    /**
     * Get the value of autosVendidos
     */ 
    public function getAutosVendidos()
    {
        return $this->autosVendidos;
    }

    /**
     * Set the value of autosVendidos
     *
     * @return  self
     */ 
    public function setAutosVendidos($autosVendidos)
    {
        $this->autosVendidos = $autosVendidos;

        return $this;
    }

    /**
     * Get the value of comision
     */ 
    public function getComision()
    {
        return $this->comision;
    }

    /**
     * Set the value of comision
     *
     * @return  self
     */ 
    public function setComision($comision)
    {
        $this->comision = $comision;

        return $this;
    }


    //métodos
    function venderAuto(Automovil $auto, Cliente $cliente) {
        echo "El Vendedor $this->nombre, $this->apellido vendió el automóvil con patente ".$auto->getPatente()." al cliente ".$cliente->getNombre().$cliente->getApellido();
    }
    
    function armarCotizcion() {

    }    
}

?>
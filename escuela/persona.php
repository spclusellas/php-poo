<?php

Abstract Class Persona{

  protected $nombre;
  protected $apellido;
  protected $dni;
  protected $edad;

  public function __construct($nombreU, $apellidoU, $dniU, $edadU){
    $this->nombre = $nombreU;
    $this->apellido = $apellidoU;
    $this->dni = $dniU;
    $this->edad = $edadU;
  }



    public function getNombre()
    {
        return $this->nombre;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }


    public function getApellido()
    {
        return $this->apellido;
    }


    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }


    public function getDni()
    {
        return $this->dni;
    }


    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }


    public function getEdad()
    {
        return $this->edad;
    }


    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

}



 ?>

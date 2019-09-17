<?php
require_once("autoload.php");

Class Directivo extends Persona{

  protected $sueldo;

  public function __construct($nombreU, $apellidoU, $dniU, $edadU, $sueldoU){
    parent::__construct($nombreU, $apellidoU, $dniU, $edadU);
    $this->sueldo = $sueldoU;
  }

  public function getSueldo(){
    return $this->sueldo;
  }
  public function setSueldo($sueldo){
    $this->sueldo = $sueldo;
  }

  public function dirigir(){
    return "Soy " . $this->apellido . " y estoy dirigirndo";
  }

  public function contratar(Profesor $profesor){
    return "Felicitaciones " . $profesor->getNombre() . " esta contratado";
  }

}




 ?>

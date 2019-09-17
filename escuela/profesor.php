<?php
require_once("autoload.php");

Class Profesor extends Persona{

  protected $sueldo;

  public function __construct($nombreU, $apellidoU, $dniU, $edadU, $sueldoU){
    $this->nombre = $nombreU;
    $this->apellido = $apellidoU;
    $this->dni = $dniU;
    $this->edad = $edadU;
    $this->sueldo = $sueldoU;
  }

  public function getSueldo(){
    return $this->sueldo;
  }
  public function setSueldo($sueldo){
    $this->sueldo = $sueldo;
  }

  public function enseñar(){
    return "Soy " . $this->nombre . " y estoy enseñando";
  }

  public function evaluar(int $nota, Alumno $alumno){
    if ($nota < 7) {
      return $alumno->getNombre() . " estas desaprobado";
    } elseif ($nota >= 7) {
      return $alumno->getNombre() . " estas aprobado";
    }
  }
}



 ?>

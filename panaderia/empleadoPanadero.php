<?php
require_once("empleado.php");
/**
 *
 */
class EmpleadoPanadero extends Empleado
{
  protected $certificado;

  public function __construct($nombreEmpl, $sueldoEmpl, $cuitEmpl, $codigoEmpl, $certificado){
    $this->nombre = $nombreEmpl;
    $this->sueldo = $sueldoEmpl;
    $this->cuit = $cuitEmpl;
    $this->codigoEmpleado = $codigoEmpl;
    $this->certificado = $certificado;
  }

  public function cumplirHorario(){
    return "Trabajo de 5 a 14";
  }
  public function hacerPan(){
    return "Estoy haciendo pan";
  }
}





 ?>

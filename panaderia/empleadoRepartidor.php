<?php
require_once("empleado.php");


class EmpleadoRepartidor extends Empleado
{
  protected $registroConducir;


  public function __construct($nombreEmpl, $sueldoEmpl, $cuitEmpl, $codigoEmpl, $registroConducir){
    parent::__construct($nombreEmpl, $sueldoEmpl, $cuitEmpl, $codigoEmpl);
    $this->registroConducir = $registroConducir;
  }

  public function cumplirHorario(){
    return "Trabajo de 11 a 19";
  }

  public function repartir(){
    return "Estoy repartiendo pan";
  }



}




 ?>

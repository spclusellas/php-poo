<?php

abstract class Empleado {

  protected $nombre;
  protected $sueldo;
  protected $cuit;
  protected $codigoEmpleado;


  public function __construct($nombreEmpl, $sueldoEmpl, $cuitEmpl, $codigoEmpl){
    $this->nombre = $nombreEmpl;
    $this->sueldo = $sueldoEmpl;
    $this->cuit = $cuitEmpl;
    $this->codigoEmpleado = $codigoEmpl;
  }

  public function getNombre(){
    return $this->nombre;
  }
  public function setNombre(string $nombreNuevo){
    $this->nombre = $nombreNuevo;
  }
  public function getsueldo(){
    return $this->sueldo;
  }
  public function setsueldo(int $sueldoNuevo){
    $this->sueldo = $sueldoNuevo;
  }
  public function getcuit(){
    return $this->cuit;
  }
  public function setCuit(string $cuitNuevo){
    $this->cuit = $cuitNuevo;
  }
  public function getcodigo(){
    return $this->codigoEmpleado;
  }
  public function setCodigo(string $codigoNuevo){
    $this->codigoEmpleado = $codigoNuevo;
  }

  public function registIngreso(){
    $ingreso = date("H:i:s");
    return $ingreso;
  }

  abstract protected function cumplirHorario();


}






 ?>

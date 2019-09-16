<?php
require_once("empleado.php");

class EmpleadoAdmin extends Empleado{

  public function cumplirHorario(){
    return "Trabajo de 10 a 18";
  }
  public function cierreCaja(){
    return "Cerre la caja a las" . date("Y-M-D H:i:s");
  }
  public function pagarSueldos(){}

  public function comprarIngredientes($ingrediente){}


}









 ?>

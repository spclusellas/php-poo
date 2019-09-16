<?php
require_once("autoload.php");

class Classic extends Cuenta{

  public function debitar($gasto, $lugar = "caja"){
    if ($lugar == "banelco") {
      $gasto = $gasto * 1.05;
    } elseif ($lugar == "link") {
      $gasto = $gasto * 1.10;
    }
    $this->balance = $this->balance - $gasto;
  }

  public function acreditar($monto){
    $monto = $monto - $monto * 0.05;
    parent::acreditar($monto);
  }
}




 ?>

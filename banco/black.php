<?php
require_once("autoload.php");

class Black extends Cuenta{

  public function debitar($gasto, $lugar){
    $this->balance = $this->balance - $gasto;
  }

}

 ?>

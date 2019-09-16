<?php
require_once("autoload.php");


class Multinacional extends Cliente{

  private $cuit;
  private $razonSocial;

  public function __construct($emailUsuario, $passUsuario, $cuitUsuario, $razonSocialUsuario){
    $this->email = $emailUsuario;
    $this->pass = $passUsuario;
    $this->cuit = $cuitUsuario;
    $this->razonSocial = $razonSocialUsuario;
  }


}



 ?>

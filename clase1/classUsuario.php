<?php


class Usuario{
  private $nombre;
  private $apellido;
  private $email;
  private $contrase;
  private $avatar;


  public function __construct($usuarioEmail, $usuarioContraseña){
    $this->setEmail($usuarioEmail);
    $this->setContrase($usuarioContraseña);

  }
}

 ?>

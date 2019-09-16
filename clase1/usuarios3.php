<?php
require_once("productos.php");


class Usuario {

  private $nombre;
  private $apellido;
  private $dni;
  private $email;
  private $contrasena;
  private $hobbies;

  public function __construct($usuarioEmail, $usuarioContras, $usuarioDni,string $usuarioNombre = "Desconocido", $usuarioApellido = null){
    $this->email = $usuarioEmail;
    $this->setContrasena($usuarioContras);
    $this->dni = $usuarioDni;
    $this->nombre = $usuarioNombre;
    $this->apellido = $usuarioApellido;
  }

  public function getNombre(){
    return $this->nombre;
  }
  public function setNombre(string $nuevoNombre){
    $this->nombre = $nuevoNombre;
  }

  public function getApellido(){
    return $this->apellido;
  }
  public function setApellido($nuevoApellido){
    $this->apellido = $nuevoApellido;
  }
  public function getEmail(){
    return $this->email;
  }
  public function setEmail(string $nuevoEmail){
    if (filter_var($nuevoEmail,FILTER_VALIDATE_EMAIL)){
      $this->email = $nuevoEmail;
    } else {
      $this->email;
    }

  }
  public function setContrasena($contras){
    if (strlen($contras)<3) {
      $this->contrasena;
    } else {
      $this->contrasena = $this->encriptarPass($contras);
    }

  }
  public function getHobbies(){
    return $this->hobbies;
  }
  public function setHobbies($hobby){
    $this->hobbies[] = $hobby;
  }

  public function nombreCompleto(){
    return "Hola " . $this->nombre . " " . $this->apellido;
  }
  public function comprar(Producto $producto){
    return "Compre " . $producto->getNombre() . " a $" . $producto->getPrecio();
  }

  private function encriptarPass($contraseña){
    return password_hash($contraseña, PASSWORD_DEFAULT);
  }

}



 ?>

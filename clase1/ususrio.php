<?php

class Usuario{
  protected $nombre;
  protected $apellido;
  protected $email;
  protected $contrase;
  protected $avatar;


  public function __construct($usuarioEmail, $usuarioContraseña, $usuarioNombre){
    $this->setEmail($usuarioEmail);
    $this->setContrase($usuarioContraseña);
    $this->setNombre($usuarioNombre);
  }

    public function getNombre():string
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        if (is_string($nombre)) {
          $this->nombre = $nombre;
        }
    }


    public function getApellido()
    {
        return $this->apellido;
    }
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }


    public function getEmail():string
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        if (!filter_var($email ,FILTER_VALIDATE_EMAIL)) {
          return null;
        } else {
          $this->email = $email;
        }
    }

    public function getContrase()
    {
        return $this->contrase;
    }
    public function setContrase($contrase)
    {
        if (strlen($contrase)<3) {
          return null;
        } else {
          $this->contrase = $this->encriptar($contrase);
        }
    }

    public function getAvatar()
    {
        return $this->avatar;
    }
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    public function saludar(){
      echo "Hola " . $this->nombre;
    }

    private function encriptar($pass){
    return password_hash($pass,PASSWORD_DEFAULT);
    }
}


 ?>

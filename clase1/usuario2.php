<?php
include_once("productos.php");


 class Usuario {
   private $nombre;
   private $email;
   private $contraseña;
   private $dni;
   private $hobbies;

   public function __construct($emailUsuario, $contraUsuario, $nombreUsuario = null){
     $this->email = $emailUsuario;
     $this->setContraseña($contraUsuario);
     $this->nombre = $nombreUsuario;
   }

    public function getNombre(){
      return $this->nombre;
    }
    public function setNombre($nombreNuevo){
      $this->nombre = $nombreNuevo;
    }
    public function getEmail(){
      return $this->email;
    }
    public function setEmail($emailNuevo){
      $this->email = $emailNuevo;
    }
    public function getContraseña(){
      return $this->contraseña;
    }
    public function setContraseña ($contraNueva){
      $this->contraseña = $this->encriptarPass($contraNueva);
    }
    public function getDni(){
      return $this->dni;
    }
    public function setDni ($dniNuevo){
      $this->dni = $dniNuevo;
    }
    public function getHobbies(){
      return $this->hobbies;
    }
    public function setHobbies($hobby){
      $this->hobbies[] = $hobby;
    }
    public function getProducto(){
      return $this->producto;
    }
    public function setProducto(Producto $producto){
      $this->producto = $producto;
    }

    public function saludar(){
      return "Hola soy " . $this->nombre;
    }

    private function encriptarPass($contraseña){
      return password_hash($contraseña, PASSWORD_DEFAULT);
    }

    public function comprar(Producto $producto){
      $nombreProd = $producto->getNombre();
      $precioProd = $producto->getPrecio();
      echo "Compre el producto $nombreProd a $ $precioProd";
    }
 }





 ?>

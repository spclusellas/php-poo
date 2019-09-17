<?php
require_once("autoload.php");


Class Aula{

  protected $numero;
  protected $capacidadMaxima;

  public function __construct(int $numeroA, int $capacidadMaximaA){
    $this->numero=$numeroA;
    $this->capacidadMaxima = $capacidadMaximaA;
  }


    public function getNumero()
    {
        return $this->numero;
    }


    public function setNumero($numero)
    {
        $this->numero = $numero;
    }


    public function getCapacidadMaxima()
    {
        return $this->capacidadMaxima;
    }


    public function setCapacidadMaxima($capacidadMaxima)
    {
        $this->capacidadMaxima = $capacidadMaxima;
    }

}




 ?>

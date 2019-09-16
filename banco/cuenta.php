<?php
require_once("autoload.php");

Abstract Class Cuenta{
  protected $cbu;
  protected $balance;
  protected $ultimoMovimiento;

  public function __construct($cbuCliente, $balanceCliente = null, $ultimoMovimiento = null){
    $this->cbu = $cbuCliente;
    $this->balance = $balanceCliente;
    $this->ultimoMovimiento = $ultimoMovimiento;
  }

    public function getCbu(){
    return $this->cbu;
    }
    public function getBalance(){
    return $this->balance;
    }
    public function getUltimoMovimiento(){
    return $this->ultimoMovimiento;
    }
    public function setCbu($cbu){
    $this->cbu=$cbu;
    }
    public function setBalance($balance){
    $this->balance=$balance;
    }
    public function setUltimoMovimiento($ultimoMov){
    $this->ultimoMovimiento=$ultimoMov;
    }

    abstract protected function debitar($gasto, $lugar);

    protected function acreditar($monto){
      $this->balance = $this->balance + $monto;
      $this->ultimoMovimiento = date("d-m-Y H:m:s");
    }
}



 ?>

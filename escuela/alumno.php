<?php
require_once("autoload.php");

Class Alumno extends Persona{

  public function asistirCurso(Curso $curso){
    return "Estoy asistiendo al curso " . $curso->getNombre();
  }

}




 ?>

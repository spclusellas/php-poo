<?php
require_once("autoload.php");

Class Curso{
  protected $nombre;
  protected $profesor;
  protected $alumnos;
  protected $contenido;
  protected $aula;

  public function __construct($nombreC, Profesor $profesorC, $contenido, Aula $aulaC, Alumno $alumnoC = null){
    $this->nombre = $nombreC;
    $this->profesor = $profesorC;
    $this->contenido = $contenido;
    $this->aula = $aulaC;
    $this->alumnos = $alumnoC;
  }

public function getNombre(){
  return $this->nombre;
}
public function getProfesor(){
  return $this->profesor;
}
public function getContenido(){
  return $this->contenido;
}
public function getAlumnos(){
  return $this->alumnos;
}
public function getAula(){
  return $this->aula;
}

public function setNombre($nombre){
  $this->nombre=$nombre;
}
public function setProfesor(Profesor $profesor){
  $this->profesor=$profesor;
}
public function setContenido($contenido){
  $this->contenido=$contenido;
}
public function setAlumno(Alumno $alumno){
  $this->alumnos[]=$alumno;
}
public function setAula(Aula $aula){
  $this->aula = $aula;
}

}


 ?>

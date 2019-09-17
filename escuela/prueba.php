<?php
require_once("autoload.php");

$aula1 = new Aula(1, 40);
$alumno1 = new Alumno("Pedro", "Perez", 2121212, 37);
$alumno2 = new Alumno("Juana", "J", 737475, 35);
$profesor1 = new Profesor("Vicky", "Vazquez", 63728494, 47, 5000);
$directivo1 = new Directivo("Alberto", "Alvarez", 1737485, 67, 7000);
$curso1 = new Curso("Programacion", $profesor1, "PHP", $aula1);
$curso1->setAlumno($alumno1);
$curso1->setAlumno($alumno2);



echo $profesor1->evaluar(6, $alumno1);
echo "<br>";
echo $profesor1->evaluar(8, $alumno2);


echo "<pre>";
var_dump($curso1);
echo "</pre>";

 ?>

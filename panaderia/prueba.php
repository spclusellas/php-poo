<?php
require_once("autoload.php");

$empleado1 = new EmpleadoPanadero("Juan", 1000, 204567, 1, true);
$empleado2 = new EmpleadoRepartidor("Jose", 1000, 157676, 2, true);

 echo $empleado2->cumplirHorario();
 echo "<br>";
 echo $empleado1->cumplirHorario();

echo "<pre>";
var_dump($empleado2);
echo "</pre>";

 ?>

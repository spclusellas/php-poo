<?php
require_once("ususrio.php");

$email = "santi@gmail.com";
$contraseña = 1234567;


$usuario1 = new Usuario($email, $contraseña, 12);

// $usuario1->setNombre(12);
// $usuario1->saludar();

echo "<pre>";
var_dump($usuario1);
echo "</pre>";


 ?>

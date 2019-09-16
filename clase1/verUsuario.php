<?php
require_once("usuarios3.php");
require_once("productos.php");

$email = "jorge@dh.com";

$usuario1 = new Usuario($email, "ho", 65656565);


$usuario1->setNombre("Jorge");


$usuario1->setNombre("Jorge Antonio");
$usuario1->setHobbies("Correr");
$usuario1->setHobbies("Jugar");

$producto1 = new Producto("Zapatillas", 66000);


// $usuario1->setContrasena("djrghliuksd");
echo $usuario1->comprar("Remera");
// $usuario1->setApellido("Soliz");
//
// echo $usuario1->getNombre();

echo "<pre>";
var_dump($usuario1);
echo "</pre>";
 ?>

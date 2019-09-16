<?php
include_once("usuario2.php");
include_once("productos.php");


$usuario1 = new Usuario("carlos@carlos.com", "12345678", "Carlos");
$usuario1->setHobbies("Correr");
$usuario1->setHobbies("Programar");
$usuario1->setHobbies("Jugar");

$producto1 = new Producto("Remera", 400);

$usuario1->comprar($producto1);

// echo "<pre>";
// var_dump($usuario1);
// echo "</pre>";


 ?>

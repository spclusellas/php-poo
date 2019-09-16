<?php
require_once("autoload.php");


$cuentaClassic = new Classic(13313131);
// $cliente = new Cliente("mn@mn.com", 1535353);

$persona = new Persona("pio@pio.com", 12345, $cuentaClassic, "Pio", "Cluse", 75756767, "10/2");

$persona->getCuenta()->acreditar(1500);

// $multinacional = new Multinacional("mn@mn.com", 1535353, 8477474, "Multinacional");

echo "<pre>";
var_dump($persona);
echo "</pre>";




 ?>

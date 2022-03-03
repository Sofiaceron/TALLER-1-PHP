<?php
require_once("01_claseEmpleadoo.php");
$objEmpleadoo = new Empleadoo("Juan Ceron",3054388504,"Tecnico",4000000, 25000);
echo "Nombre: ".$objEmpleadoo->getNombre()."<br>";
echo "Celular: ".$objEmpleadoo->getCelular()."<br>";
echo "Cargo: ". $objEmpleadoo->getCargo(). "<br>";
echo "Sueldo: ". $objEmpleadoo->sueldo. "<br>";
echo "Auxilio de transporte: ". $objEmpleadoo->auxilio_de_transporte."<br>";
echo $objEmpleadoo->Retefuente();



?>
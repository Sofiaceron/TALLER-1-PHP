<?php
require_once("01_clase_Persona.php");
require_once("02_clase_Empleado.php");

$objPersona=new Persona("Kevin Gomez",23);
echo "<h2> PERSONA </h2>";
print_r("<pre>");
print_r($objPersona->Responsabilidadess());
print_r("</pre>");
echo"Nombre: ". $objPersona->nombre ."<br>";
echo "Edad: ".$objPersona->getEdad()."<br>";

echo "<h3> EMPLEADO </h3>";
$objEmpleado=new Empleado("Sara Ruiz", 21, 2000000, "Activo");
echo "Nombre:".$objEmpleado->nombre."<br>";
echo "Edad: ".$objEmpleado->getEdad()."<br>";
echo"Sueldo: ".number_format($objEmpleado->sueldo)."<br>";
echo "Estado: ".$objEmpleado->getEstado()."<br>";
echo $objEmpleado->setEstado("Inactivo")."<br>";
echo "Estado Actualizado: ".$objEmpleado->getEstado();

?>
<?php
require_once("01_claseePersonaa.php");
require_once("02_claseEmpleado.php");
require_once("03_claseContador.php");

$objPersona = new Personaa("Andres Sanchez", 23);
print_r('<pre>');
print_r($objPersona->Responsabilidades());
print_r('</pre>');
echo "<h2> Llamado a la clase persona </h2>";
echo "Nombre: " . $objPersona->nombre. "<br>";
echo "Edad: " . $objPersona->edad."<br>";

$objEmpleado = new Empleaddoo("Edwin Lopez", 34, 2000000 );
echo "<h2> Llamado a la clase Empleado </h2>";
echo "Nombre: " . $objEmpleado->nombre. "<br>";
echo "Edad: " . $objEmpleado->edad . "<br>";
echo "Sueldo: " . number_format($objEmpleado->getSueldo()) . "<br>";

$objContador = new Contador ("Luis Solarte", 25, 3000000, 20);
echo "<h2> Llamado a la clase Contador </h2>";
echo "Nombre: " . $objContador->getNombre(). "<br>";
echo "Edad: " . $objContador->getEdad() . "<br>";
echo "Sueldo: " . number_format($objContador->getSueldo()) . "<br>";
echo "Dias trabajados: " . $objContador->getDiaslaborados()."<br>";
echo "Calculo de los dias trabajados: " . number_format($objContador->Diaslaborados(15))."<br>";
?>
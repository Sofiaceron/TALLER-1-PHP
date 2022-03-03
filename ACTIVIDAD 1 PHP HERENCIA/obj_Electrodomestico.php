<?php

require_once("01_claseElectrodomestico.php");
require_once("02_claseLavadora.php");
$objElectrodomestico =new Electrodomestico("LG");
echo "<h3>Electrodomestico</h3>";
 echo"Marca: ". $objElectrodomestico->marca ."<br>";
 $objElectrodomestico->Infoelectrodomestico();

 $objElectrodomestico =new Lavadora("lg",5,1350000);
 echo "<h3>Lavadora 1</h3>";
 echo "Marca:" .$objElectrodomestico->marca."<br>";
 echo "Cantidad: " . $objElectrodomestico->getCantidad()."<br>";
 echo "Precio: " . number_format($objElectrodomestico->getPrecio())."<br>";

 echo "Precio total con IVA incluido: ".number_format($objElectrodomestico->VentaLavadora(5))."<br>";

 $objElectrodomestico =new Lavadora("Wirpool",8,1150000);
 echo "<h3>Lavadora 2</h3>";
 echo "Marca:" .$objElectrodomestico->marca."<br>";
 echo "Cantidad: " . $objElectrodomestico->getCantidad()."<br>";
 echo "Precio: " .number_format($objElectrodomestico->getPrecio())."<br>";

 
 echo "Precio total con IVA incluido: ".number_format($objElectrodomestico->VentaLavadora2(8))."<br>";
?>
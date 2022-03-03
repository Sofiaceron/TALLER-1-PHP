<?php
require_once("01_claseZapatos.php");
require_once("02_claseDeportivos.php");

$objZapatos=new Zapatos (34,"Calzado Isabella",6);
echo "<h2> Zapatos </h2>";
print_r("<pre>");
print_r($objZapatos->getVerInventario());
print_r("</pre>");

$objDeportivos=new Deportivos(37,"Nike",7,"Calzado masculino",380000,9);
echo "<h3> Zapatos Deportivos </h3>";
print_r("<pre>");
print_r($objDeportivos->setVerInventario());
print_r("</pre>");

echo "<h4> Detalles de la venta</h4>";
echo $objDeportivos->CantStock(9)

?>
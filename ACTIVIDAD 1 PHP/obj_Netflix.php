<?php

require_once("03_claseNetflix.php");

$objNetflix= new Netflix ('Spider-Man', 2017, "Sí", 4);

echo 'Nombre de la pelicula: ' . $objNetflix-> getTitulo() . "<br>";
echo 'Año de creacion: ' . $objNetflix-> getAñodecreacion() . "<br>";
echo 'Disponible para alquiler: ' . $objNetflix->getAlquilada() . "<br>"; 
echo 'Fecha prevista de devolucion: ' . Netflix:: $fecha_devolucion . "<br>"; 
echo 'Dias de alquiler: ' .$objNetflix->getDias(). "<br>";
echo 'Valor a pagar por los dias alquilados: ' . number_format($objNetflix->CostoAlquiler());

?>
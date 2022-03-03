<?php

require_once("01_claseLibro.php");
require_once("02_claseRevista.php");

echo "<h2>LIBRO</h2>";
$objLibro=new Libro (14,"El Principito", "Antoine de Saint-Exupéry");
$objLibro->getDatosLibro();
print_r('<pre>');
print_r($objLibro);
print_r('</pre>');

echo "<h2>REVISTA</h2>";
$objRevista=new Revista(12, "Revista Semana", "Felipe López Caballero", 2067, 70);
echo "Nombre: ".$objRevista->titulo."<br>";
echo "Autor: ".$objRevista->autor."<br>";
echo "Edicion: ".$objRevista->getEdicion()."<br>";
echo "Numero Paginas: ".$objRevista->getNumeroPaginas()."<br>";


?>
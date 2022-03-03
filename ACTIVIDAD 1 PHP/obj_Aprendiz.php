<?php
require_once ("02_claseAprendiz.php");
$objAprendiz = new Aprendiz (1061684233, "Ceron ", "Sofia ", "Matematicas", 5, 2, 3 );
print_r('<pre>');
print_r($objAprendiz);
print_r('</pre>');
echo "Aprendiz ".  $objAprendiz->apellido . $objAprendiz->nombre. " su nota definitiva es: ". $objAprendiz->getDefinitiva(). "<br>";
echo "Su calificacion definitiva es: ". $objAprendiz->getConceptoValorativo(). "<br>";
echo $objAprendiz->getValoracionCualitativa();






?>
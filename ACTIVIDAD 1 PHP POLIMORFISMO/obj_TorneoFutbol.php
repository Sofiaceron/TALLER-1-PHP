<?php
require_once("01_claseTorneodeFutbol.php");
require_once("02_clasePartidos.php");

$objTorneo=new TorneoFutbol("America",13,"Ascenso");
echo "<h3> TORNEO </h3>";
echo"Nombre del equipo: ". $objTorneo->nombre_del_equipo ."<br>";
echo "Número de integrantes: ".$objTorneo->numero_integrantes."<br>";
echo "Estado Asignado: ".$objTorneo->getEstadoasignar()."<br>";

$objPartidos=new Partidos("Nacional",13,"Ascenso",17);
echo "<h3> EQUIPO DOS </h3>";
echo"Nombre del equipo: ". $objPartidos->nombre_del_equipo ."<br>";
echo "Número de integrantes: ".$objPartidos->numero_integrantes."<br>";
echo "Estado Asignado: ".$objPartidos->getEstadoasignar()."<br>";
echo $objPartidos->Partidosganados(6);

?>
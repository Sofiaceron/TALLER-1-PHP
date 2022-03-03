<?php

require_once("04_clasePeluqueria.php");
$objPeluqueria = new Peluqueria (12,"Peluqueria SPACE", "Calle 70-A", 3054381106, "9:00am", "7:00pm", 10000,"Corte de cabello" );
echo "id Peluqueria: " . $objPeluqueria->id_peluqueria. "<br>";
echo "Nomre: " . $objPeluqueria->nombre . "<br>";
echo "Direccion: " . $objPeluqueria->direccion . "<br>";
echo "Telefono: " . $objPeluqueria->telefono . "<br>";
echo "Hora de inico: " . $objPeluqueria->hora_inicio . "<br>";
echo "Hora de cierre: " . $objPeluqueria->hora_cierre . "<br>";
echo "Valor del corte: " . $objPeluqueria->getValorcorte() . "<br>";
echo "Servicio: " . $objPeluqueria->getServicio() . "<br>";

$objPeluqueria->AgendarCita();
print_r("<pre>");
echo"<h1>AGENDAMIENTO CITA</h1>";
print_r($objPeluqueria->AgendarCita());
print_r("</pre>");
echo "Otro servicio: " . $objPeluqueria->setServicio(2)."<br>";
echo "Valor: " . $objPeluqueria->setValorcorte(2). "<br>";


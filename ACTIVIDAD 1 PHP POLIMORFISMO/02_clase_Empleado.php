<?php

require_once("02_clase_Empleado.php");
class Empleado extends Persona{

public $sueldo;
public $estado="Activo";

function __construct($vr_nombre,$vr_edad,$vr_sueldo,$vr_estado)
{
    parent:: __construct($vr_nombre,$vr_edad);
    $this->sueldo=$vr_sueldo;
    $this->estado=$vr_estado;
}

public function getEstado(){
return $this->estado;

}
public function setEstado($vr_estado){
    $this->estado=$vr_estado;
}

}

?>

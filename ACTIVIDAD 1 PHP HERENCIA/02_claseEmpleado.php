<?php
require_once("02_claseEmpleado.php");
class Empleaddoo extends Personaa
{
    public $sueldo;

    function __construct($vr_nombre, $vr_edad, $vr_sueldo)
    {
        parent::__construct($vr_nombre, $vr_edad);
        $this->sueldo = $vr_sueldo;
    }
    public function getSueldo()
    {
        return $this->sueldo;
    }
    public function setSueldo($vr_sueldo){
        $this->sueldo = $vr_sueldo;
    }
}

?>
<?php

require_once("01_claseTorneodeFutbol.php");
class Partidos extends TorneoFutbol{

    public $partidos_ganados;

    function __construct($vr_nombre_del_equipo,$vr_numero_integrantes,$vr_estado_asignar,$vr_partidos_ganados)
    {
        parent::__construct($vr_nombre_del_equipo,$vr_numero_integrantes,$vr_estado_asignar);
        $this->partidos_ganados=$vr_partidos_ganados;
    }

    public function Partidosganados($vr_partidos_ganados){
        $this->partidos_ganados=$vr_partidos_ganados;
        if ($vr_partidos_ganados<15){

            parent::setEstadoasignar("Desenso");
            echo "Estado actual: ";
            return parent::getEstadoasignar();
          
        }

    }

}


?>
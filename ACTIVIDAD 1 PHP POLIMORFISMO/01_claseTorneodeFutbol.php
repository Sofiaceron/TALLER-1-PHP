<?php
class TorneoFutbol{

    public $nombre_del_equipo;
    public $numero_integrantes;
    public $estado_asignar="Ascenso";

    function __construct($vr_nombre_del_equipo,$vr_numero_integrantes,$vr_estado_asignar)
    {
        $this->nombre_del_equipo=$vr_nombre_del_equipo;
        $this->numero_integrantes=$vr_numero_integrantes;
        $this->estado_asignar=$vr_estado_asignar;
    }
    
    public function getEstadoasignar(){
       return $this->estado_asignar;
    }
    public function setEstadoasignar($vr_estado_asignar){
       $this->estado_asignar=$vr_estado_asignar;
     }
    

}
?>
<?php
class Persona{


    public $nombre;
    public $edad;

    function __construct($vr_nombre,$vr_edad)
    {
        $this->nombre=$vr_nombre;
        $this->edad=$vr_edad;
    }

    public function Responsabilidadess(){
        $arrayDatosPersona=Array(
            'Nombre: '=>$this->nombre,
            
        );
        return $arrayDatosPersona;
    }

    public function getEdad(){
        return $this->edad;
    }
    public function setEdad($vr_edad){
        $this->edad=$vr_edad;
    }
}
?>
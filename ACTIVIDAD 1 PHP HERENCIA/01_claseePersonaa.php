<?php
class Personaa 
{
public $nombre;
public $edad;

function __construct($vr_nombre,$vr_edad)
{
    $this->nombre = $vr_nombre;
    $this->edad = $vr_edad;
}
public function Responsabilidades(){
    $arrayResponsabilidades =Array(
        'Nombre: '=>$this->nombre,
        'Edad: '=>$this->edad,
    );
    
     return $arrayResponsabilidades;
 }



}


?>
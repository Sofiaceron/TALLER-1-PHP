<?php

require_once("01_claseLibro.php");

class Revista extends Libro{

    public $edicion;
    public $numero_paginas;


    function __construct($vr_codigo, $vr_nombre,$vr_autor,$vr_edicion,$vr_numero_paginas)
    {
        parent:: __construct($vr_codigo, $vr_nombre, $vr_autor);
        $this->edicion=$vr_edicion;
        $this->numero_paginas=$vr_numero_paginas;
        
    }
    public function getEdicion(){
    return $this->edicion;
}
    public function setEdicion($vr_edicion){
        $this->edicion= $vr_edicion;
    }
    public function getNumeroPaginas(){
        return $this->numero_paginas;
    }
    public function setNumeroPaginas($vr_numero_paginas){
        $this->numero_paginas=$vr_numero_paginas;
    }
}
?>
<?php
class Libro {

    public $codigo;
    public $titulo;
    public $autor;


    function  __construct($vr_codigo, $vr_titulo,$vr_autor)
    {
        $this->codigo=$vr_codigo;
        $this->titulo=$vr_titulo;
        $this->autor=$vr_autor;
    }
    public function getDatosLibro()
    {
    $arrayDatosLibro = array(
        'Codigo: ' =>$this->codigo,
        'Titulo del libro: ' =>$this->titulo,
        'Autor: ' =>$this->autor,
            );
            return $arrayDatosLibro;
            
        }
    }

?>
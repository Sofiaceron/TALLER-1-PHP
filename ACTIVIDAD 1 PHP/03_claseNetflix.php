<?php
class Netflix
{
    public $titulo;
    private $año_de_creacion;
    protected $alquilada;
    static $fecha_devolucion;
    public $dias;
    function __construct($vr_titulo, $vr_año_de_creacion, $vr_alquilada, $vr_dias)
    {
        $this->titulo = $vr_titulo;
        $this->año_de_creacion = $vr_año_de_creacion;
        $this->alquilada = $vr_alquilada;
        Netflix:: $fecha_devolucion = "28 de febrero";
        $this->dias = $vr_dias;
    }
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($vr_titulo)
    {
        $this->titulo = $vr_titulo;
    }
    public function getAñodecreacion()
    {
        return $this->año_de_creacion;
    }
    public function setAñodecreacion($vr_año_de_creacion)
    {
        $this->año_de_creacion = $vr_año_de_creacion;
    }
    public function getAlquilada()
    {
        return $this->alquilada;
    }
    public function setAlquilada($vr_alquilada)
    {
        $this->alquilada = $vr_alquilada;
    }
    public function setFecha_devolucion()
    {
        Netflix::$fecha_devolucion;
    }
    public function getDias(){
        return $this->dias;
    }

    public function CostoAlquiler()
    {
        if ($this->dias <= 5) {
            $this->dias = $this->dias * 4000;
        }
        return $this->dias;
    }
}
?>
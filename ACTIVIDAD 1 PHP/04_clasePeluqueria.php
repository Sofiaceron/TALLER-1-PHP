<?php
class Peluqueria
{
    public $id_peluqueria;
    public $nombre;
    public $direccion;
    public $telefono;
    public $hora_inicio;
    public $hora_cierre;
    private $valor_corte;
    protected $servicio;


    public function __construct($vr_id_peluqueria, $vr_nombre, $vr_direccion, $vr_telefono, $vr_hora_inicio, $vr_hora_cierre, $vr_valor_corte, $vr_servicio)
    {
        $this->id_peluqueria = $vr_id_peluqueria;
        $this->nombre = $vr_nombre;
        $this->direccion = $vr_direccion;
        $this->telefono = $vr_telefono;
        $this->hora_inicio = $vr_hora_inicio;
        $this->hora_cierre = $vr_hora_cierre;
        $this->valor_corte = $vr_valor_corte;
        $this->servicio = $vr_servicio;
    }
    public function getServicio()
    {
        return $this->servicio;
    }
    public function setServicio($vr_servicio)
    {
        $this->servicio = $vr_servicio;
        if ($vr_servicio==1) {
            return "Corte de cabello";
        }elseif ($vr_servicio==2) {
            return "Corte de cabello y corte de cejas";
        }elseif ($vr_servicio==3) {
            return "Corte de cabello, corte cejas y corte de barba";
        }
    }
    public function getValorcorte()
    {
        return $this->valor_corte;
    }
    public function setValorcorte($vr_valor_corte)
    {
        $this->valor_corte = $vr_valor_corte;
        if ($vr_valor_corte== 1) {
            return 10000;
        }elseif ($vr_valor_corte == 2) {
            return 12000;
        }elseif ($vr_valor_corte == 3) {
            return 15000;
    }
}

public function AgendarCita(){
    $arrayAgendarCita = array(
'Servicio: ' =>$this->servicio,
'Valor del corte: ' =>$this->valor_corte,
    );
    return $arrayAgendarCita;
    
}
}

?>
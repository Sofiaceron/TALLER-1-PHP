<?php
class Aprendiz
{
    public $documento_de_identidad;
    public $apellido;
    public $nombre;
    public $asignatura;
    public $primer_parcial;
    public $segundo_parcial;
    public $examen_final;

    function __construct( $vr_docuemto_de_identidad, string $vr_apellido, string $vr_nombre, string $vr_asignatura, $vr_primer_parcial, $vr_segundo_parcial, $vr_examen_final)
    {
        $this->documento_de_identidad = $vr_docuemto_de_identidad;
        $this->apellido = $vr_apellido;
        $this->nombre = $vr_nombre;
        $this->asignatura = $vr_asignatura;
        $this->primer_parcial = $vr_primer_parcial;
        $this->segundo_parcial = $vr_segundo_parcial;
        $this->examen_final = $vr_examen_final;
    }
    public function getDefinitiva()
    {

        $this->definitiva = ($this->primer_parcial * 0.3) + ($this->segundo_parcial * 0.3) + ($this->examen_final * 0.4);
        return $this->definitiva;
    }

    public function getConceptoValorativo()
    {
        if ($this->definitiva < 2) {
            $this->definitiva = "Malo";
        } elseif ($this->definitiva >= 3 or $this->definitiva < 4) {
            $this->definitiva = "Aceptable";
        } elseif ($this->definitiva >= 4 or $this->definitiva < 4.5) {
            $this->definitiva = "Excelente";
        }
        return $this->definitiva;
    }

    public function getValoracionCualitativa()
    {
        if ($this->definitiva < 3.5) {
            $this->Definitiva = "El aprendiz reprobó la competencia";
        } elseif ($this->definitiva > 3.5) {
            $this->definitiva = "El aprendiz aprobó la competencia";
        }
        return $this->definitiva;
    }
}








?>
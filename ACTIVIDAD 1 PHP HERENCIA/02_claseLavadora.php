<?php

require_once("02_claseLavadora.php");

class Lavadora extends Electrodomestico{

    public $cantidad;
    public $precio;

    public function __construct($vr_marca,$vr_cantidad,$vr_precio)
    {
        parent:: __construct($vr_marca);
        $this->cantidad=$vr_cantidad;
        $this->precio=$vr_precio;
    }

    public function getCantidad(){
        return $this->cantidad;
    }
    public function getPrecio(){
        return $this->precio;
    }
    
    public function VentaLavadora($vr_venta){
        $this->cantidad=$vr_venta;
        $vr_precio=$this->precio;
        if($vr_venta<=5){
            $total=$vr_precio* parent::iva;
            $total=$total+$vr_precio;
            $totalales=$total*$vr_venta;
        return $totalales;
        }
    }
    public function VentaLavadora2($vr_venta2){
        $this->cantidad=$vr_venta2;
        $vr_precio=$this->precio;
        if($vr_venta2<=8){
            $total=$vr_precio* parent::iva;
            $total=$total+$vr_precio;
            $totalales=$total*$vr_venta2;
        return $totalales;
    }
    
}
    
}
    ?>
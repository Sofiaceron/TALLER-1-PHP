<?php
class Zapatos{

public $talla;
public $marca;
public $stock=8;

function __construct($vr_talla,$vr_marca,$vr_stock)
{
    $this->talla=$vr_talla;
    $this->marca=$vr_marca;
    $this->stock=$vr_stock;

}

public function getVerInventario(){
$arrayVerInventario =Array(
    'Talla: '=>$this->talla,
    'Marca :'=>$this->marca,
    'Stock '=>$this->stock
);
return $arrayVerInventario;
}

}
?>
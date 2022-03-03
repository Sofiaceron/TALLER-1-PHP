<?php

require_once("01_claseZapatos.php");
class Deportivos extends Zapatos{

    public $descripcion;
    public $precio;
    public $cantidad;

function __construct($vr_talla,$vr_marca,$vr_stock,$vr_descripcion,$vr_precio,$vr_cantidad){
    parent:: __construct($vr_talla,$vr_marca,$vr_stock);
    $this->descripcion=$vr_descripcion;
    $this->precio=$vr_precio;
    $this->cantidad=$vr_cantidad;

}

public function setVerInventario(){
    $arrayVerInventario =Array(
         parent::getVerInventario(),
        'Descripcion'=>$this->descripcion,
        'Precio: '=>$this->precio,
        'Cantidad'=>$this->cantidad,
    );
    
    return $arrayVerInventario;
    }  
   public  function CantStock($vr_stock){
        $this->stock=$vr_stock;
        if ($vr_stock<=8){
        echo"Cantidad disponible, se puede realizar la venta"."<br>";}
        else{
            echo"Cantidad no disponible, no se puede realizar la venta";
       }
    }


}
       
?>
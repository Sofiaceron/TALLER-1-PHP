<?php

class Electrodomestico{


    public $marca;
    const iva = 0.19;
 
   function __construct($vr_marca){
 
     $this->marca=$vr_marca;
   }
   
 
    public function Infoelectrodomestico(){
        echo "IVA: ".self::iva . "<br>";
    }
   
   
 
 }
 



?>
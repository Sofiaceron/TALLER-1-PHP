<?php
require_once("01_claseePersonaa.php");
class Contador extends Personaa
{
    protected $diaslaborados;
    function __construct($vr_nombre, $vr_edad, $vr_sueldo, $vr_diaslaborados)

    {
        parent::__construct($vr_nombre, $vr_edad, $vr_sueldo);
        $this->diaslaborados = $vr_diaslaborados;
        $this->sueldo=$vr_sueldo;
    }
   public  function getNombre(){

        return $this->nombre;
        
        }
        public function getEdad(){
            return $this->edad;
        
        }
        
       public  function getSueldo(){
            
        return $this->sueldo;
        
        }
        public function getDiaslaborados(){
 
            return $this->diaslaborados;
            
            }
    public function Diaslaborados($vr_diaslaborados)
    {
        $this->diaslaborados=$vr_diaslaborados;
        $this->vr_sueldo=$this->sueldo;
        
        $diastrabajados= $this->diaslaborados*$this->vr_sueldo;
        return $diastrabajados;
}
}

?>

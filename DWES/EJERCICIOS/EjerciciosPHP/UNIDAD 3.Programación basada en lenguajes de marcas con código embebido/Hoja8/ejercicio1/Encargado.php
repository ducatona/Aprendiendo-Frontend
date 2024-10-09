<?php  

class Encargado extends Empleado{


public function __construct($nombre,$sueldo)
{
 
    parent::__construct($nombre,$sueldo);
} 


public function getSueldo($sueldo){
    return parent::getSueldo($sueldo)*1.15;                                                         
}




                    
}





?>
<?php




class Circulo {

private $radio;

public function __construct($radio)
{
    $this->radio = $radio;

}

// public function setRadio($radio){
//     $this->radio = $radio;
// }


// public function getRadio($radio){
//     return $this->radio;

// }






    // Método mágico __set
    public function __set($name, $value) {
        if ($name == "radio") {
            $this->radio = $value;
        }
    }

    // Método mágico __get
    public function __get($name) {
        if ($name == "radio") {
            return $this->radio;
        }
    }
}










?>
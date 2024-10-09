<?php


class Helicoptero extends ElementoVolador
{


    private string $propietario;
    private int $nRotor;

    public function __construct($nombre, $numAlas, $numMotores, $propietario, $nRotor)
    {
        parent::__construct($nombre, $numAlas, $numMotores);
        $this->propietario = $propietario;
        $this->nRotor = $nRotor;
    }


    function volar($altitud)
    {


        $altitudMaxima = $this->nRotor * 100;
        if ($altitud > $altitudMaxima) {
            echo "Error: La altitud no puede superar los " . $altitudMaxima . " metros.\n";
        } else {
            $incremento = 20;
            for ($i = $this->getAltitud(); $i < $altitud; $i += $incremento) {
                $this->setAltitud($i);
                echo "Subiendo a " . $this->getAltitud() . " metros.\n";
            }
            $this->setAltitud($altitud);
            echo "El helicóptero ha alcanzado la altitud de " . $this->getAltitud() . " metros.\n";
        }
    }


    public function getNrotor(){
        return $this->nRotor;


    }




    public function mostrarInformacion()
    {
        echo "Helicóptero del propietario: $this->propietario\n";
        echo "Número de rotores: $this->nRotor\n";
        echo "Velocidad: " . $this->getVelocidad() . "\n";
        echo "Altitud actual: " . $this->getAltitud() . "\n";
    }
}

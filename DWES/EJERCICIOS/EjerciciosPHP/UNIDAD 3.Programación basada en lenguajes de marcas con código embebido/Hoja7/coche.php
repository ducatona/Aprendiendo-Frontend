<?php


class Coche
{


    private $matricula, $velocidad;


    function __construct($matricula, $velocidad)
    {
        $this->matricula = $matricula;
        $this->velocidad = $velocidad >= 0 && $velocidad <= 120 ? $velocidad : 0;
    }

    function acelera($incremento)
    {
        $this->velocidad += $incremento;

        if ($this->velocidad > 120) {
            $this->velocidad = 120;
        }
    }


    function disminuir($decremento)
    {

        $this->velocidad -=  $decremento;

        if ($this->velocidad < 0) {
            $this->velocidad = 0;
        }
    }


    function mostrarInformacion()
    {

        echo "Matricula:" . $this->matricula .  "Velocidad" . $this->velocidad . "km";
    }

    
}

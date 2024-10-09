<?php


class Aeropuerto
{

    private $elementosVoladores;



    function __construct()
    {
        $this->elementosVoladores = []; //Array de elementos voladores
    }

    function insertarElemento($elemento)
    {

        $this->elementosVoladores[] = $elemento; //insertamos un elemento al array

    }

    function buscarElemento($nombre)

    {

        foreach ($this->elementosVoladores as $elemento) {

            if ($elemento->getNombre() === $nombre) {
                $elemento->mostrarInformacion();
                return;
            }
        }

        echo "No se ha encontrado";
    }

    function listarCompania($compania)
    {
        $encontrado = false;

        foreach ($this->elementosVoladores as $elemento) {
            if ($elemento instanceof Avion && $elemento->getCompaniaAerea() === $compania) {
                $elemento->mostrarInformacion();
                $encontrado = true;
            }
        }

        if (!$encontrado) {
            echo "No se ha encontrado ningún avión de la compañía $compania";
        }
    }

    function rotores($nRotores)
    {

        foreach ($this->elementosVoladores as $elemento) {
            if ($elemento instanceof Helicoptero && $elemento->getNrotor() ===$nRotores) {
                $elemento->mostrarInformacion();
            }
        }
    }


    function despegar($nombre, $altitud, $velocidad)
    {
        foreach ($this->elementosVoladores as $elemento) {

            if ($elemento->getNombre() === $nombre) {
                $elemento->acelerar($velocidad);
                $elemento->volar($altitud);
                return $elemento;
            }

            echo "No se ha encontrado";
        }
    }
}

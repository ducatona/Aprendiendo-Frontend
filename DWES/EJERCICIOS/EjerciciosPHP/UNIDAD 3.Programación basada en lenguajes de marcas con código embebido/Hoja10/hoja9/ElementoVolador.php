<?php
abstract class ElementoVolador implements Volador
{

    private string $nombre;
    private int $num_alas;
    private int $num_motores;
    private int $altitud;
    private int $velocidad;

    public function __construct(string $nombre, int $num_alas, int $num_motores)
    {

        $this->nombre = $nombre;
        $this->num_alas = $num_alas;
        $this->num_motores = $num_motores;
        $this->altitud = $altitud = 0;
        $this->velocidad = $velocidad = 0;
    }

    public function getNombre()
    {

      return  $this->nombre;
    }

    public function getNumAlas()
    {

        $this->num_alas;
    }


    public function getNumMotores()
    {

        $this->num_motores;
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


    public function setNumAlas($num_alas)
    {
        $this->num_alas = $num_alas;
    }

    public function setNumMores($num_motores)
    {

        $this->num_motores = $num_motores;
    }

public function getVelocidad(){
    return $this->velocidad;
}
public function getAltitud(){
    return $this->altitud;
}

public function setVelocidad($velocidad){
    $this->velocidad = $velocidad;
}


public function setAltitud($altitud){
    $this->altitud = $altitud;
}



    public function avionVolando($altitud): bool
    {

        if ($altitud > 0) {
            return true;
        }else {
            return false;
        }
    }

    function acelerar($velocidad)
    {
        $this->velocidad += $velocidad;
    }

    abstract function volar($altitud);

    abstract function mostrarInformacion();
}

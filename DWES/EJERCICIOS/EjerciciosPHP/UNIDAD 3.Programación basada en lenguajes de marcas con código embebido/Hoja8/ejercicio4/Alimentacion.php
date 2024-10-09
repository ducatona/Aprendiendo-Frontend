<?php


class Alimentacion extends Producto
{

    private int $mes_caducidad;
    private int $ano_caducidad;



    public function __construct(int $codigo, float $precio, string $nombre,  int $mes_caducidad, int $ano_caducidad)
    {

        parent::__construct($codigo, $precio, $nombre);
        $this->mes_caducidad =    $mes_caducidad;
        $this->ano_caducidad =     $ano_caducidad;
    }



    public function getMesCaducidad()
    {
        return $this->mes_caducidad;
    }

    public function getAnoCaducidad()
    {
        return $this->ano_caducidad;
    }


    public function setMesCaducidad(int $mes_caducidad): void
    {
        $this->mes_caducidad = $mes_caducidad;
    }
    public  function setAnoCaducidad(int $ano_caducidad): void
    {
        $this->ano_caducidad = $ano_caducidad;
    }


    public function mostrarInformacion(): string
    {
        return  "Alimentacion - Nombre: {$this->nombre}, Codigo: {$this->codigo}, Precio: {$this->precio}, Caducidad : {$this->ano_caducidad}-{$this->mes_caducidad}";
    }
}

<?php


abstract class Medico {

protected string $nombre;
protected int $edad;
protected string $turno;


public function __construct(string $nombre,int $edad,string $turno){

$this->nombre = $nombre;
$this->edad = $edad;
$this->turno = $turno;


}
public function getEdad(): int {
    return $this->edad;
}
abstract public function mostrarInformacion(): string;

}



?>
<?php



Class Empleado {

private float $sueldo;
private string $nombre;


public function __construct(float $sueldo,string $nombre)

{
    $this->sueldo = $sueldo;
    $this->nombre = $nombre;
}

public function __destruct()
{
    echo 'adios empleado';
}

public function getSueldo($sueldo) {

    return $this->sueldo;                                                                  
}








}



?>
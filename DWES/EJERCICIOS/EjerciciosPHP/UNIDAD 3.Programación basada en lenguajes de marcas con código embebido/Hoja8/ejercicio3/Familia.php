<?php



class Familia extends Medico{

 private int $num_pacientes;

public function __construct(string $nombre,int $edad,string $turno,int $num_pacientes)
{
parent::__construct($nombre,$edad,$turno);
$this->num_pacientes=$num_pacientes;
}

function mostrarInformacion(): string
{
    return "<p>Médico de Familia - Nombre: {$this->nombre}, Edad: {$this->edad}, Turno: {$this->turno}, Nº Pacientes: {$this->num_pacientes}</p>";
}



public function pacientesSuficientes(int $min_pacientes):bool{

    return $this->num_pacientes >= $min_pacientes;

}










    
}




?>
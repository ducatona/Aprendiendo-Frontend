<?php


class Urgencia extends Medico
{
    private string $unidad;
    private int $num_pacientes; 

    public function __construct(string $nombre, int $edad, string $turno, int $num_pacientes, string $unidad)
    {
        parent::__construct($nombre, $edad, $turno);
        $this->num_pacientes = $num_pacientes; 
        $this->unidad = $unidad; 
    }

    public function mostrarInformacion(): string
    {
        return "<p>Médico de Urgencia - Nombre: {$this->nombre}, Edad: {$this->edad}, Turno: {$this->turno}, Nº Pacientes: {$this->num_pacientes}, Unidad: {$this->unidad}</p>";
    }
    
public function esturnoTarde(): bool{

    return $this->turno === "tarde";

}
}






























?>
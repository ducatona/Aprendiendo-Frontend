<?php



class Avion extends ElementoVolador
{



    private string $companiaAerea;
    private DateTime $fechaAlta;
    private int $altitudMaxima;



    public function __construct(string $nombre, int $num_alas, int $num_motores, string $companiaAerea, string $altitudMaxima, DateTime $fechaAlta)
    {
        parent::__construct($nombre, $num_alas, $num_motores);
        $this->companiaAerea = $companiaAerea;
        $this->fechaAlta = $fechaAlta;
        $this->altitudMaxima = $altitudMaxima;
    }

    public function getCompaniaAerea()
    {
        $this->companiaAerea;
    }
    public function getFechaAlta()
    {
        $this->fechaAlta;
    }
    public function getAltitudMaxima()
    {
        $this->altitudMaxima;
    }
    public function setCompaniaAerea(string $companiaAerea)
    {
        $this->companiaAerea = $companiaAerea;
    }
    public function setFechaAlta(DateTime $fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;
    }
    public function setAltitudMaxima(int $altitudMaxima)
    {

        $this->altitudMaxima = $altitudMaxima;
    }


    public function volar($altitud)
    {
        if ($altitud < 0 || $altitud > $this->altitudMaxima) {
            echo "Error: La altitud es incorrecta.\n";
        } elseif ($this->getVelocidad() < 150) {
            echo "Error: La velocidad debe ser de al menos 150 para volar.\n";
        } else {
            $incremento = 100;
            for ($i = $this->getAltitud(); $i < $altitud; $i += $incremento) {
                $this->setAltitud($i);
                echo "Subiendo a " . $this->getAltitud() . " metros.\n";
            }
            $this->setAltitud($altitud);
            echo "El avión ha alcanzado la altitud de " . $this->getAltitud() . " metros.\n";
        }
    }




    public function mostrarInformacion()
    {

        echo "Avión de la compañía: $this->companiaAerea\n";
        echo "Altitud máxima: $this->altitudMaxima\n";
        echo "Velocidad: " . $this->getVelocidad() . "\n";
        echo "Altitud actual: " . $this->getAltitud() . "\n";
    }
}

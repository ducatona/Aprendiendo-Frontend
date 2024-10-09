<?php



class CuentaAhorro extends Cuenta
{

    private float $comision_apertura;
    private float $intereses;


    public function __construct(int $numero, string $titular, float $saldo, float $comision_apertura, float $intereses)
    {

        parent::__construct($numero, $titular, $saldo);
        $this->comision_apertura = $comision_apertura;
        $this->intereses = $intereses;
        $this->saldo -= $comision_apertura;




    }


    public function aplicarIntereses():void{
        $this->saldo += $this->saldo * ($this->intereses / 100);

    }


    public function mostrarInformacion(): void
    {
        parent::mostrarInformacion();
        echo"<p>Comision de apertura  {$this->comision_apertura}</p>";
        echo"<p>Intereses {$this->intereses}</p>";
    }
}

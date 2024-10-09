<?php

class CuentaCorriente extends Cuenta
{


    private float $cuota_mantenimiento;



    public function __construct(int $numero, string $titular, float $saldo,float $cuota_mantenimiento)
    {
        parent::__construct($numero, $titular, $saldo);
        $this->cuota_mantenimiento = $cuota_mantenimiento;
        $this->saldo -= $cuota_mantenimiento;        

    }







    public function retirarSaldo(float $cantidad): void
    {
        if ($this->saldo < 20)
            parent::retirarSaldo($cantidad);
    }

    public function mostrar():void{
        parent::mostrarInformacion();
        echo "<p>Cuota Mantenimiento: {$this->cuota_mantenimiento}";

    }
}

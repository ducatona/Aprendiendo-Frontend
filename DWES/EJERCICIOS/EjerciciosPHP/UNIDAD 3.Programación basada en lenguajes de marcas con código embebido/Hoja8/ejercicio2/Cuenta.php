<?php

class Cuenta
{

    protected int $numero;
    protected string $titular;
    protected float $saldo;


    //constructor
    public function __construct(int $numero, string $titular, float $saldo)
    {

        $this->numero = $numero;
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function ingresarSaldo(float $cantidad)
    {
        $this->saldo += $cantidad;
    }


    public function retirarSaldo(float $cantidad)
    {

        if ($cantidad <= $this->saldo) {
            $this->saldo -= $cantidad;
        } else {
            echo  "No hay saldo suficiente";
        }
    }
    public function esPreferencial(float $cantidad): bool
    {
        return $this->saldo > $cantidad;
    }

    public function mostrarInformacion(): void
    {

        echo "<p>Numero de cuenta: {$this->numero}</p>";
        echo "<p>Titular: {$this->titular}</p>";
        echo "<p>Saldo: {$this->saldo}</p>";
    }
}
?>
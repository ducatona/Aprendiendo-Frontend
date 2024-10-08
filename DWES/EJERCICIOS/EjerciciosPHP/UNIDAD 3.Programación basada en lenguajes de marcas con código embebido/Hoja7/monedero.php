<?php



class Monedero
{



    private $dinero;
    static $numero_monederos = 0;

    function __construct($cantidadInicial)
    {
        $this->dinero = max(0, $cantidadInicial);

        self::$numero_monederos++;
    }


    public function __destruct()
    {
        self::$numero_monederos--;
    }


    public function meterDinero($cantidad)
    {


        if ($cantidad > 0) {

            $this->dinero += $cantidad;
        }
    }



    public function consultarSaldo()
    {

        return $this->dinero;
    }

    public function sacarDinero($cantidad)
    {
        if ($cantidad > 0 && $cantidad <= $this->dinero) {

            $this->dinero -= $cantidad;
        }
    }


    public static function numeroMonederosCreados()
    {
        return self::$numero_monederos;
    }
}

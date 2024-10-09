<?php




abstract class Producto
{

    protected int $codigo;
    protected float $precio;
    protected string $nombre;





    public function __construct(int $codigo, float $precio, string $nombre)
    {

        $this->codigo = $codigo;
        $this->precio = $precio;
        $this->nombre = $nombre;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function getPrecio()
    {
        return $this->codigo;
    }

    public function getNombre()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }
    public function setPrecio($precio){
        $this->precio = $precio;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }



    abstract public function mostrarInformacion():string;
}

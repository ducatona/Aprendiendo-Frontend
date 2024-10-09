<?php



class Electronica extends Producto {
    private int $plazo_garantia;

  public function __construct(int $codigo, float $precio, string $nombre, int $plazo_garantia){
    parent::__construct($codigo, $precio, $nombre);
    $this->plazo_garantia= $plazo_garantia;
  }
  
  public function getPlazoGarantia(){
    return $this->plazo_garantia;

  }

  public function setPlazoGarantia(int $plazo_garantia){
    $this->plazo_garantia = $plazo_garantia;

  }


  public  function mostrarInformacion(): string
  {
    return "Electrónica - Nombre: {$this->nombre}, Código: {$this->codigo}, Precio: {$this->precio}, Garantía: {$this->plazo_garantia} meses";
  }









}




















?>
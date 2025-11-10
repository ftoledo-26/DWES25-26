<?php
abstract class  Producto{
    private string $codigo;
    protected float $precio;
    public function __construct($codigo, $precio)
    {
        $this->codigo = $codigo;
        $this->precio = $precio;
    }


//////////////GETTERS////////////
    public function getCodigo(){
        return $this->codigo;
    }
    public function getPrecio(){
        return $this->precio;
    }


/////////////SETTERS///////////////
public function setPrecio(float $value){
    $this->precio = $value;
}
abstract function mostrarResumen();
}

/////////////METODOS////////////////

?>
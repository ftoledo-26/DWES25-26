<?php
include_once "Producto.php";
class ProductoFisico extends Producto{
    public int $peso;
    function __construct($peso,$codigo, $precio)
    {
        parent::__construct($codigo, $precio);
        $this->peso = $peso;
    }
    function mostrarResumen()
    {
        echo "<br>📦 Producto físico ". $this->getCodigo() . "-". 
                    $this->getPrecio(). " ($this->peso 'KG')";
    }
}

?>
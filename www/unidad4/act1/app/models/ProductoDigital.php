<?php 
include_once "Producto.php";
class ProductoDigital extends Producto{
    public int $pesoArchivo;
    function __construct($pesoArchivo,$codigo, $precio)
    {
        parent::__construct($codigo, $precio);
        $this->pesoArchivo = $pesoArchivo;
    }
    function mostrarResumen()
    {
        echo "<br>💾 Producto digital ". $this->getCodigo() . "-". 
                    $this->getPrecio(). " ($this->pesoArchivo 'MG')";
    }

}



?>
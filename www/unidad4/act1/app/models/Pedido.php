<?php
include_once __DIR__ . "/../interfaces/ResumenInterface.php";
include_once __DIR__ . "/Cliente.php";
include_once __DIR__ . "/Producto.php";

class Pedido implements ResumenInterface {
    public array $p;
    public Cliente $c;

    public function __construct(Cliente $c)
    {
        $this->c = $c;
        $this->p = []; 
    }

    public function agregarProducto(Producto $prod)
    {
        $this->p[] = $prod;
    }

    public function mostrarDetalles()
    {
        echo $this->c;
        foreach ($this->p as $listado) {
            $listado->mostrarResumen(); // ← corregido, antes era $this->$listado
        }
    }
}
?>

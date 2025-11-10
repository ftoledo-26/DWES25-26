<?php
$n = rand(5,10);
function generaMatrizCartasRand($n) : array{
    $palos = ['c', 'd', 'p', 't'];
    $cartas = [];

    while (count($cartas) < $n) {
        $palo = $palos[array_rand($palos)];
        $numero = rand(1, 13);
        $carta = $palo . $numero;
        $cartas[] = $carta;
    }

    return $cartas;
}
$cartas = generaMatrizCartasRand($n);

foreach ($cartas as $carta) {
    echo "<img src='img/$carta.svg' alt='Carta $carta' width='180'>";
}

?>
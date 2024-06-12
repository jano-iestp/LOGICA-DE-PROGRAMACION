<?php
// Algoritmo suma_numeros con while
$numero = readline("Ingrese el número: ");
$factorial = 1;

while ($numero >0) {
    $factorial *= $numero;
    $numero--;
}

echo $factorial;
?>

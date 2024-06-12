<?php
// Algoritmo suma_numeros
$N = (int) readline("Ingrese el valor de N: ");
$SUMA = 0;

for ($i = 0; $i < $N; $i++) {
    $numero = (float) readline("Ingrese un número: ");
    $SUMA += $numero;
}

echo "La suma de los $N números es: $SUMA\n";
?>

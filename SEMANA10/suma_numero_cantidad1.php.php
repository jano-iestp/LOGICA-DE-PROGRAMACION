<?php
// Algoritmo suma_numeros con while
$numero = readline("Ingrese el número: ");
$SUMA = 0;

while ($numero >0) {
    $SUMA += $numero;
    $numero--;
}

//echo "La suma de los $numero números es: $SUMA";
echo $SUMA;
?>

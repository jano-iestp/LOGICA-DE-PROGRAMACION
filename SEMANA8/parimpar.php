<?php
	$stdin = fopen('php://stdin', 'r');
	// designamos la variable como entero
	settype($n, 'integer');
	echo 'Ingrese un número entero:', PHP_EOL;
	fscanf($stdin, "%d", $n);
	// La condicional para saber si es par o impar
	if ($n%2==0) {
		echo 'Es un numero par', PHP_EOL;
	} else {
		echo 'Es un numero impar', PHP_EOL;
	}
?>

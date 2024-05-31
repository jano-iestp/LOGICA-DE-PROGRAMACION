<?php
	$stdin = fopen('php://stdin', 'r');
	// designamos la variable como entero
	settype($edad, 'integer');
	settype($ingresos, 'integer');
	echo 'Ingrese su edad:', PHP_EOL;
	fscanf($stdin, "%d", $edad);
	echo 'Ingrese sus ingresos mensuales:', PHP_EOL;
	fscanf($stdin, "%d", $ingresos);
	// La condicional para saber si tiene o no tiene que tributar
	if ($edad>=18) {
		if ($ingresos>=1000) {
			echo 'Tienes que tributar', PHP_EOL;
		} else {
			echo 'No tienes que tributar', PHP_EOL;
		}
	} else {
		echo 'No tienes que tributar', PHP_EOL;
	}
?>

<?php
	$stdin = fopen('php://stdin', 'r');
	// designamos la variable como entero
	settype($edad, 'integer');
	echo 'Ingrese su edad:', PHP_EOL;
	fscanf($stdin, "%d", $edad);
	// La condicional para saber cuanto debes de cobrar segun su edad
	if ($edad<=18) {
		if ($edad<4) {
			echo 'Entras gratis', PHP_EOL;
		} else {
			echo 'Debes de pagar 5$', PHP_EOL;
		}
	} else {
		echo 'Debes de pagar 10$', PHP_EOL;
	}
?>

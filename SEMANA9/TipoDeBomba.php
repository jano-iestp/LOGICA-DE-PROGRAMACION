<?php
	$stdin = fopen('php://stdin', 'r');
	settype($tipomotor, 'integer');
	// Solicitamos al usuario que ingrese el tipo de motor
	echo 'Ingrese el tipo de motor (1, 2, 3 o 4): ', PHP_EOL;
	fscanf($stdin, "%d", $tipomotor);
	// Evaluamos el valor ingresado usando un condicional switch
	switch ($tipomotor) {
	case 0:
		echo 'No hay establecido un valor definido para el tipo de bomba', PHP_EOL;
		break;
	case 1:
		echo 'La bomba es una bomba de agua', PHP_EOL;
		break;
	case 2:
		echo 'La bomba es una bomba de gasolina', PHP_EOL;
		break;
	case 3:
		echo 'La bomba es una bomba de hormigon', PHP_EOL;
		break;
	case 4:
		echo 'La bomba es una bomba de pasta alimenticia', PHP_EOL;
		break;
	default:
		echo 'No existe un valor válido para tipo de bomba', PHP_EOL;
	}
?>

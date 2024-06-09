<?php
	$stdin = fopen('php://stdin', 'r');
	settype($mes, 'integer');
	// Solicitamos al usuario que ingrese el número de mes
	echo 'Ingrese el número de mes (1-12): ', PHP_EOL;
	fscanf($stdin, "%d", $mes);
	// Evaluamos el mes para determinar la estación del año
	switch ($mes) {
	case 12:
	case 1:
	case 2:
		echo 'Estación del año: Invierno', PHP_EOL;
		break;
	case 3:
	case 4:
	case 5:
		echo 'Estación del año: Primavera', PHP_EOL;
		break;
	case 6:
	case 7:
	case 8:
		echo 'Estación del año: Verano', PHP_EOL;
		break;
	case 9:
	case 10:
	case 11:
		echo 'Estación del año: Otoño', PHP_EOL;
		break;
	default:
		echo 'Número de mes inválido', PHP_EOL;
	}
?>

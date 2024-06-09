<?php
	$stdin = fopen('php://stdin', 'r');
	settype($calificacion, 'integer');
	// Solicitamos al usuario que ingrese la calificación numérica
	echo 'Ingrese la calificación numérica (0-100): ', PHP_EOL;
	fscanf($stdin, "%d", $calificacion);
	// Evaluamos la calificación y asignamos la letra correspondiente
	switch ($calificacion) {
	case 90:
	case 91:
	case 92:
	case 93:
	case 94:
	case 95:
	case 96:
	case 97:
	case 98:
	case 99:
	case 100:
		echo 'Calificación en letra: A', PHP_EOL;
		break;
	case 80:
	case 81:
	case 82:
	case 83:
	case 84:
	case 85:
	case 86:
	case 87:
	case 88:
	case 89:
		// Si es mayor o igual a 90, es una A
		echo 'Calificación en letra: B', PHP_EOL;
		break;
	case 70:
	case 71:
	case 72:
	case 73:
	case 74:
	case 75:
	case 76:
	case 77:
	case 78:
	case 79:
		// Si es menor de 90 pero mayor o igual a 80, es una B
		echo 'Calificación en letra: C', PHP_EOL;
		break;
	case 69:
		// Si es menor de 80 pero mayor o igual a 70, es una C
		echo 'Calificación en letra: D', PHP_EOL;
		break;
	default:
		// Si es igual a 69, es una D
		echo 'Calificación en letra: F', PHP_EOL;
	}
	// Si es menor de 69, es una F
?>

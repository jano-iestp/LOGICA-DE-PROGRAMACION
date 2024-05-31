<?php
	$stdin = fopen('php://stdin', 'r');
	// designamos las variables
	settype($horaslaboradas, 'float');
	settype($tarifahora, 'float');
	settype($sueldo, 'float');
	echo 'Ingrese las horas laboradas en el mes:', PHP_EOL;
	fscanf($stdin, "%f", $horaslaboradas);
	echo 'Ingrese la tarifa por hora:', PHP_EOL;
	fscanf($stdin, "%f", $tarifahora);
	// la formula para hallar el sueldo
	$sueldo = $horaslaboradas*$tarifahora;
	echo 'El sueldo del empleado es: ', $sueldo, PHP_EOL;
	// La condicional para que cuando sea menor a 1000 te dira que le dara bono
	if ($sueldo<1000) {
		echo 'Recibe bono', PHP_EOL;
	} else {
		echo 'No recibe bono', PHP_EOL;
	}
?>

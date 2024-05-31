<?php
	$stdin = fopen('php://stdin', 'r');
	// designamos las variables
	settype($nota1, 'float');
	settype($nota2, 'float');
	settype($nota3, 'float');
	settype($promedio, 'float');
	echo 'Ingrese la primera nota parcial:', PHP_EOL;
	fscanf($stdin, "%f", $nota1);
	echo 'Ingrese la segunda nota parcial:', PHP_EOL;
	fscanf($stdin, "%f", $nota2);
	echo 'Ingrese la tercera nota parcial:', PHP_EOL;
	fscanf($stdin, "%f", $nota3);
	// la formula de promedio
	$promedio = ($nota1+$nota2+$nota3)/3;
	echo 'El promedio de las notas es: ', $promedio, PHP_EOL;
	// La condicional para que cuando sea mayor igual a 13 te diga que aprueba
	if ($promedio>=13) {
		echo 'Aprueba', PHP_EOL;
	} else {
		echo 'Desaprueba', PHP_EOL;
	}
?>

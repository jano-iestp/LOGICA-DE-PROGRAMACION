Algoritmo ESTACIONDELANO
	Definir mes Como Entero
	// Solicitamos al usuario que ingrese el número de mes
	Escribir 'Ingrese el número de mes (1-12): '
	Leer mes
	// Evaluamos el mes para determinar la estación del año
	Según mes Hacer
		12, 1, 2:
			Escribir 'Estación del año: Invierno'
		3, 4, 5:
			Escribir 'Estación del año: Primavera'
		6, 7, 8:
			Escribir 'Estación del año: Verano'
		9, 10, 11:
			Escribir 'Estación del año: Otoño'
		De Otro Modo:
			Escribir 'Número de mes inválido'
	FinSegún
FinAlgoritmo

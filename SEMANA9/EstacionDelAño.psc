Algoritmo ESTACIONDELANO
	Definir mes Como Entero
	// Solicitamos al usuario que ingrese el n�mero de mes
	Escribir 'Ingrese el n�mero de mes (1-12): '
	Leer mes
	// Evaluamos el mes para determinar la estaci�n del a�o
	Seg�n mes Hacer
		12, 1, 2:
			Escribir 'Estaci�n del a�o: Invierno'
		3, 4, 5:
			Escribir 'Estaci�n del a�o: Primavera'
		6, 7, 8:
			Escribir 'Estaci�n del a�o: Verano'
		9, 10, 11:
			Escribir 'Estaci�n del a�o: Oto�o'
		De Otro Modo:
			Escribir 'N�mero de mes inv�lido'
	FinSeg�n
FinAlgoritmo

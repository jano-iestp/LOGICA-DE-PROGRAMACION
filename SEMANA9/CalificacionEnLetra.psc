Algoritmo CalificacionEnLetra
	Definir calificacion Como Entero
	// Solicitamos al usuario que ingrese la calificaci�n num�rica
	Escribir 'Ingrese la calificaci�n num�rica (0-100): '
	Leer calificacion
	// Evaluamos la calificaci�n y asignamos la letra correspondiente
	Seg�n calificacion Hacer
		90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100:
			Escribir 'Calificaci�n en letra: A'
		80, 81, 82, 83, 84, 85, 86, 87, 88, 89: // Si es mayor o igual a 90, es una A
			Escribir 'Calificaci�n en letra: B'
		70, 71, 72, 73, 74, 75, 76, 77, 78, 79: // Si es menor de 90 pero mayor o igual a 80, es una B
			Escribir 'Calificaci�n en letra: C'
		69: // Si es menor de 80 pero mayor o igual a 70, es una C
			Escribir 'Calificaci�n en letra: D'
		De Otro Modo: // Si es igual a 69, es una D
			Escribir 'Calificaci�n en letra: F'
	FinSeg�n // Si es menor de 69, es una F
FinAlgoritmo

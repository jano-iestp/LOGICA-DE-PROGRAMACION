Algoritmo CalificacionEnLetra
	Definir calificacion Como Entero
	// Solicitamos al usuario que ingrese la calificación numérica
	Escribir 'Ingrese la calificación numérica (0-100): '
	Leer calificacion
	// Evaluamos la calificación y asignamos la letra correspondiente
	Según calificacion Hacer
		90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100:
			Escribir 'Calificación en letra: A'
		80, 81, 82, 83, 84, 85, 86, 87, 88, 89: // Si es mayor o igual a 90, es una A
			Escribir 'Calificación en letra: B'
		70, 71, 72, 73, 74, 75, 76, 77, 78, 79: // Si es menor de 90 pero mayor o igual a 80, es una B
			Escribir 'Calificación en letra: C'
		69: // Si es menor de 80 pero mayor o igual a 70, es una C
			Escribir 'Calificación en letra: D'
		De Otro Modo: // Si es igual a 69, es una D
			Escribir 'Calificación en letra: F'
	FinSegún // Si es menor de 69, es una F
FinAlgoritmo

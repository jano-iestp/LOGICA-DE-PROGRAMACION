Algoritmo CalcularPuntaje
    //designamos las variables
	Definir ganados, perdidos, empatados, puntos Como Entero
	
    Escribir "Ingrese el n�mero de partidos ganados:"
    Leer ganados
	
    Escribir "Ingrese el n�mero de partidos perdidos:"
    Leer perdidos
	
    Escribir "Ingrese el n�mero de partidos empatados:"
    Leer empatados
	//la formula para hallar los puntos
    puntos = (ganados * 3) + empatados
	
    Escribir "El puntaje total del equipo es: ", puntos
FinAlgoritmo

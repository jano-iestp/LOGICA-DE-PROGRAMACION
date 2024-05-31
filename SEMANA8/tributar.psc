Algoritmo tributar
	//designamos la variable como entero
	Definir edad, ingresos Como entero
	Escribir "Ingrese su edad:"
	Leer edad
	Escribir "Ingrese sus ingresos mensuales:"
	Leer ingresos
	
	//La condicional para saber si tiene o no tiene que tributar
	si edad >= 18 Entonces
		Si ingresos >= 1000 Entonces
			Escribir "Tienes que tributar"
		SiNo
			Escribir "No tienes que tributar"
		Fin Si
	SiNo
		Escribir "No tienes que tributar"
	FinSi
	
FinAlgoritmo

Algoritmo cobrarjuego
	//designamos la variable como entero
	Definir edad Como entero
	Escribir "Ingrese su edad:"
	Leer edad
	
	//La condicional para saber cuanto debes de cobrar segun su edad
	si edad <= 18  Entonces
		Si edad < 4 Entonces
			Escribir "Entras gratis"
		SiNo
			Escribir "Debes de pagar 5$"
		Fin Si
	SiNo
		Escribir "Debes de pagar 10$"
	FinSi
	
FinAlgoritmo

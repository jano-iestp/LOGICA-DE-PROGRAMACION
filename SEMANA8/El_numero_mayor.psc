Algoritmo CalcularPromedio
    //designamos las variables
	Definir nota1, nota2, nota3, promedio Como real
	
    Escribir "Ingrese la primera nota parcial:"
    Leer nota1
	
    Escribir "Ingrese la segunda nota parcial:"
    Leer nota2
	
    Escribir "Ingrese la tercera nota parcial:"
    Leer nota3
	
	//la formula de promedio
    promedio = (nota1 + nota2 + nota3) / 3
    Escribir "El promedio de las notas es: ", promedio
	
	//La condicional para que cuando sea mayor igual a 13 te diga que aprueba
	si promedio >= 13 Entonces
		Escribir "Aprueba"
	SiNo
		Escribir "Desaprueba"
	FinSi
	

FinAlgoritmo


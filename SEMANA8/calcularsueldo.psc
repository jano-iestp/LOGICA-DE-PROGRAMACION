Algoritmo CalcularSueldo
    //designamos las variables
	Definir horasLaboradas, tarifaHora, sueldo Como Real
	
    Escribir "Ingrese las horas laboradas en el mes:"
    Leer horasLaboradas
	
    Escribir "Ingrese la tarifa por hora:"
    Leer tarifaHora
	//la formula para hallar el sueldo
    sueldo = horasLaboradas * tarifaHora
	
    Escribir "El sueldo del empleado es: ", sueldo
	
	//La condicional para que cuando sea menor a 1000 te dira que le dara bono
	si sueldo < 1000 Entonces
		Escribir "Recibe bono"
	SiNo
		Escribir "No recibe bono"
	FinSi
	
FinAlgoritmo

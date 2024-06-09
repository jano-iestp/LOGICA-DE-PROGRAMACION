Algoritmo TipoDeBomba
    Definir tipoMotor Como Entero
	
    // Solicitamos al usuario que ingrese el tipo de motor
    Escribir "Ingrese el tipo de motor (1, 2, 3 o 4): "
    Leer tipoMotor
	
    // Evaluamos el valor ingresado usando un condicional switch
    Segun tipoMotor Hacer
        0:
            Escribir "No hay establecido un valor definido para el tipo de bomba"
        1:
            Escribir "La bomba es una bomba de agua"
        2:
            Escribir "La bomba es una bomba de gasolina"
        3:
            Escribir "La bomba es una bomba de hormigón"
        4:
            Escribir "La bomba es una bomba de pasta alimenticia"
        De Otro Modo:
            Escribir "No existe un valor válido para tipo de bomba"
    Fin Segun
FinAlgoritmo
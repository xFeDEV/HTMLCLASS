num_1 = 10
num_2 = 20
text_1 = 'Hola'
text_2 = 'clase'
print(text_1.capitalize())

dia = 2

suma = num_1 + num_2

print(num_1, num_2, sep='+', end='=')  #SEP: separa las variables, END: para poner al final
print(suma)
print(text_1, text_2)
print('Hoy es ' + str(dia) + ' octubre')  #STR sirve para cambiar un INT a STRING


#impresion con formato:
message = 'El día {} tenemos que enviar {} ejercicios de física'  #para inyectar una variable
print(message.format('lunes', 4))

mensaje = 'imprimir {0:1f} de los {1:2d} números que hay' #primera posicion, enteros, decimales
print(mensaje.format(123.12, 321)) 


#impresion con formato
day = 23
cakes = 2
print(f"El día {day} tenemos que traer {cakes} tortas") #interpolas: rezplazar las variables

#funcion input

nombre = input("Por favor ingrese su nombre: ")
print(f"Hola {nombre}", "gusto conocerlo.")

num1 = int(input("Ingrese el numero 1: "))
print(f"El numero ingresado es {num1}")

num2 = int(input("Ingrese el numero 2: "))
print(f"El numero ingresado es {num2}")

print(f"La suma de {num1} con {num2} es igual a {num1+num2}")


saludo = "Hola, bienvenido."
v1 = saludo.find("a")
print(f"La letra a en -|{saludo}|- se encuentra en -> {v1}")

print("*"*64)
print("\tLos metodos asociados a los strings son: ")
print(dir(saludo))

saludo_upper = saludo.upper()

print(f"\n{saludo}\n{saludo_upper}")

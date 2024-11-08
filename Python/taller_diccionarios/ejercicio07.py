diccionario = dict()

for num in range(1,2,1):
    usuario = "usuario"+str(num)
    nombre = input("Ingrese su nombre: ")
    apellido = input("Ingrese su apellido: ")
    edad = input("Ingrese su edad: ")
    email = input("Ingrese su email: ")
    hijos = input("Ingrese la cantidad de hijos: ")
    diccionario[usuario] = {
        'nombre': nombre,
        'apellido': apellido,
        'edad': edad,
        'email': email,
        'hijos': hijos
    }

print(diccionario)
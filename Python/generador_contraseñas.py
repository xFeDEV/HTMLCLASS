import random

letras = (
    'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 
    'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
)

letras_min = (
    'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 
    'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
)

caracteres_especiales = (
    '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '=', '+',
    '[', ']', '{', '}', ';', ':', ',', '.', '<', '>', '/', '?', '|', '~'
)

generar = True
mayusculas = 0
minusculas = 0
numeros = 0
especiales = 0
contrasena = []

while(generar):
    print("1. Cuántas letras mayúsculas quiere incluir en la contraseña")
    print("2. Cuántes letras minúsculas quiere incluir en la contraseña")
    print("3. Cuántos números deberá tener la contraseña")
    print("4. Cuántos caracteres especiales debe incluir en la contraseña")
    print("5. Generar contraseña")
    print("6. Salir")
    print(f"mayusculas: {mayusculas}")
    print(f"minusculas: {minusculas}")
    print(f"numeros: {numeros}")
    print(f"especiales: {especiales}")

    op = input("Ingrese su eleccion\n-->")

    if op == "1":
        print("Cuántas letras mayúsculas quiere incluir en la contraseña")
        mayusculas = int(input("Ingrese la cantidad\n-->"))
    elif op == "2":
        print("Cuántes letras minúsculas quiere incluir en la contraseña")
        minusculas = int(input("Ingrese la cantidad\n--> "))
    elif op == "3":
        print("Cuántos números deberá tener la contraseña")
        numeros = int(input("Ingrese la cantidad\n--> "))
    elif op == "4":
        print("Cuántos caracteres especiales debe incluir en la contraseña")
        especiales = int(input("Ingrese la cantidad\n--> "))


    elif op == "5":
        total_caracteres = mayusculas + minusculas + numeros + especiales
        if total_caracteres >= 6:
            print("Generando contraseña con los valores ingresados...")
            for caracter in range(mayusculas):
                contrasena.append(letras[random.randint(0,(len(letras)-1))])

            for caracter in range(minusculas):
                contrasena.append(letras_min[random.randint(0,(len(letras_min)-1))])

            for caracter in range(numeros):
                contrasena.append(random.randint(0,9))

            for caracter in range(especiales):
                contrasena.append(caracteres_especiales[random.randint(0,(len(caracteres_especiales)-1))])

            cadena_contrasena = ""
            random.shuffle(contrasena)
            cadena_contrasena = "".join(str(caracter) for caracter in contrasena)
            print(f" \n \n   ------>    {cadena_contrasena} \n \n")
            contrasena = []
        else:
            print(f"\nERROR muy pocos caracteres ingresados: {total_caracteres}\nPara generar la contraseña deben ingresar mas de 5 caracteres en total\n")

    elif op == "6":
        print("Saliendo...")
        generar = False
    else:
        print("Opción no válida. Por favor, elija una opción del 1 al 6.")
    
        
lista = ['perros', 'casa', 'limones', 'juegos', 'programar']


contador = 0
for item in lista:
    if item[-1] == "s":
        contador += 1

print(f"En la lista hay {contador} palabras terminadas en s")

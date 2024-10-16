lista = ['abc', 'xyz', 'aba', '1221']

contador = 0
for cadena in lista:
    if cadena[0] == cadena[-1]:
        contador += 1


print(f"resultado = {contador}")
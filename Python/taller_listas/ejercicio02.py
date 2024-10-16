import random

lista = []

for i in range(20):
    lista.append(random.randint(1,20))

print(lista)


max = 0

min = 10000000000

for num in lista:
    if num > max:
        max = num
    
    if num < min:
        min = num

print(f"El mayor numero de la lista es: {max}")
print(f"El menor numero de la lista es: {min}")

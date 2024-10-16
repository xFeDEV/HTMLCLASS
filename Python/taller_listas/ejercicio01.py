import random

lista = []

suma = 0

for i in range(20):
    lista.append(random.randint(1,10))
    suma += lista[i]

print(lista)
print(suma)
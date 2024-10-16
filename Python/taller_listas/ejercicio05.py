import random

lista = []
lista_2 =[]

for i in range(5):
    lista.append(random.randint(1,10))
    lista_2.append(random.randint(1,10))


result = False

for num in lista:
    for num_2 in lista_2:
        if num == num_2:
            result = True

print(lista)
print(lista_2)
print(result)
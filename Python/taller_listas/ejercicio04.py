import random

lista = []

for i in range(6):
    lista.append(random.randint(1,5))

print(lista)


for num in lista:
    if lista.count(num) > 1:
        lista.remove(num)

print(lista)



    










        

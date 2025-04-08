import random
lista = [random.randint(1,10) for caracter in range(10)]
print(lista)
x= 1
if x in lista:
    print(f"el numero {x} se encuentra {lista.count(x)} veces en la lista")
else:
    print(f"no se encuentra el {x} en la lista")
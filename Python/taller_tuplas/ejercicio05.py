tupla = ((1, 20), (3, 40), (20, 50), (9, 12), (90, 12))

# usar lista.reverse() para invertir la lista, o usar tupla[::-1] para invertir la tupla sin pasarla a lista
lista = list(tupla)
lista.sort()
tupla = tuple(lista)
print(tupla)
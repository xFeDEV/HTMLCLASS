lista =  [(), (), ('',), ('a', 'b'), ('a', 'b', 'c'), ('d')]

tupla_vacia = ()
while tupla_vacia in lista:
    lista.remove(tupla_vacia)

print(lista)
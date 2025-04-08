diccionario = dict({(10+x,x)for x in range(10)})
print(diccionario)
items = list(diccionario.items())
inver_items = list()
for item in items:
    inver_items.append((item[1], item[0]))
inver_items.sort()
diccionario.clear()
for item in inver_items:
    diccionario.update({item[1]: item[0]})
print(inver_items)
print(diccionario)

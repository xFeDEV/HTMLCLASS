set1 = {x for x in range(6)}
set2 = set()

for x in range(3,9,1):
    set2.add(x)

interseccion = set1 & set2

print(set1)
print(set2)
print(interseccion)
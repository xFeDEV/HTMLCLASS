import random
numeros = [random.randint(1,10) for x in range(10)]
print(numeros)
conjunto = set(numeros)
sorted(conjunto)
numeros = list(conjunto)
parMax = (numeros[len(numeros)-1], numeros[len(numeros)-2])

print(conjunto)
print(f"Par maximo: {parMax}")
print(f"Producto maximo: {parMax[0]*parMax[1]}")
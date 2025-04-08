tupla = ((10, 10, 10, 12), (30, 45, 56, 45), (81, 80, 39, 32), (1, 2, 3, 4))
resultados = []

for num in range(len(tupla)):
    acum = 0
    for num2 in range(len(tupla[0])):
        acum += tupla[num2][num]
    resultados.insert(num, acum/len(tupla))

print(resultados)

resultados2 = [sum(col)/len(tupla) for col in zip(*tupla)]

print(resultados2)

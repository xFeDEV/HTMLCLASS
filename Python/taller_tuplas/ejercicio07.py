tupla = ((10, 10, 10, 12), (30, 45, 56, 45), (81, 80, 39, 32), (1, 2, 3, 4))
resultados = []
cont = 0
for col in zip(*tupla):
    print(col)

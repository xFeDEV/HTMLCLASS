lista = [1, 2, 3]

a, b, c = lista

print(f"a= {a}, b = {b}, c = {c}")



frutas = ("manzana", "banano", "cereza")
lista_frusta = list(frutas)
lista_frusta[1] = "naranja"
frutas = tuple(lista_frusta)
print(frutas)
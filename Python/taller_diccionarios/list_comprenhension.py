# LIST COMPREHENSION --> COMPRESIÓN DE LISTAS
"""
List Comprehension:
Es una forma, exclusiva de Python, que permite crear nuevas listas basadas en el contenido 
de otras listas o iterables. Es una sintáxis corta y en muchos casos ahorra el uso de 
expresiones más largas y complejas.
"""

# Ejemplo 1:
# Dada una lista de números, generar una nueva lista que contenga cada número de la lista inicial al cuadrado.

numeros_lst = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
print(f"Lista original = {numeros_lst}")

# Opción 1:
# Cómo lo harían?
lista_cuadrados = []
for x in numeros_lst:
    lista_cuadrados.append(x*x)

print(f"lista de números al cuadrado = {lista_cuadrados}")

# Opción 2: compresion de listas
print("*"*64)
lista_cuadrados_2 = [x*x for x in numeros_lst]
print(f"nueva lista de números al cuadrado = {lista_cuadrados_2}")


# Ejemplo 2:
# Usando como base una lista de animales, creamos una nueva lista sólo con aquellos animales que tengan la letra "a" en su nombre

animales = ["gata", "perro", "leon", "elefante", "conejo"]

# Opción 1:
# Ustedes cómo lo harían?


# Opción 2: compresion de listas
print("*"*64)
animales_a = [animal for animal in animales if "a" in animal]

print(f"animales con letra `a` en el nombre = {animales_a}")


animales_2 = [[animal, animal.count("a")] for animal in animales if "a" in animal]
print(animales_2)
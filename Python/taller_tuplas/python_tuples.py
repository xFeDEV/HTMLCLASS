# -*- coding: utf-8 -*-
"""python_tuples.ipynb

Automatically generated by Colab.

Original file is located at
    https://colab.research.google.com/drive/1jW-VIq3hk60LZ8bQtAgcy_QyAUF2x0j-

# TUPLAS
Una tupla es una estructura de datos que permite guardar diferentes objetos (tipos de datos). En un sentido amplio, una tupla es similar a una lista pero con una diferencia importante: "Las tuplas no se pueden modificar luego de ser creadas."
"""

# Ejemplo 1:
tupla = (1, 2, 3)
print(tupla)

# Ejemplo 2: Accediendo a los elementos de una tupla
tupla_animales = ("perro", "gato", "león", "elefante")
print(f"tupla_animales[0] = {tupla_animales[0]}")  # Salida: 1
print(f"tupla_animales[1] = {tupla_animales[1]}")  # Salida: 2
print(f"tupla_animales[-1] = {tupla_animales[-1]}")  # Salida: Último elemento

# Ejemplo 3: Concatenación de tuplas
tupla1 = (1, 2, 3)
tupla2 = (4, 5, 6)
tupla_concatenada = tupla1 + tupla2
print(f"tupla_concatenada = {tupla_concatenada}")

# Ejemplo 4: Longitud de una tupla
tupla_mixta = (1, 2, "texto_1", 4, "texto_2")
longitud = len(tupla_mixta)
print(f"Longitud de la tupla: {longitud}")

# Ejemplo 5: Duplicar tuplas
tupla = ("primero", 2, "tercero")
tupla_repetida = tupla * 3
print(f"tupla_repetida = {tupla_repetida}")

# Ejemplo 6: Convertir una lista en tupla
lista = [1, 2, 3, 4, 5]
tupla = tuple(lista)
print(f"tupla = {tupla}")

# Ejemplo 7: Convertir una tupla en lista
tupla = (1, 2, 3, 4, 5)
lista = list(tupla)
print(f"lista = {lista}")

# Ejemplo 8: Desempaquetamiento de tuplas
tupla = (10, 20, 30)
a, b, c = tupla
print(f"a = {a}, b = {b}, c = {c}")

# Ejemplo 9: Desempaquetamiento de tuplas con comodines
tupla = (10, 20, 30, 40, 50)
a, b, *comodin = tupla
print(f"a = {a}, b = {b}, comodin = {comodin}")

# Ejemplo 10: Desempaquetar elementos de una tupla en una lista
mi_tupla = (1, 2, 3, 4, 5)
mi_lista = [*mi_tupla]
print(f"mi_lista = {mi_lista}")

# Ejemplo 11: Comprobar si un elemento existe en una tupla
tupla = (1, 2, 3, 4, 5)
if 3 in tupla:
    print("El elemento 3 existe en la tupla.")

# Ejemplo 12: Iterar sobre los elementos de una tupla
tupla = (1, "Pez", 2, "Saltamontes", 3, "Iguana")
for elemento in tupla:
    print(elemento)

# Ejemplo 13: Listas vs tuplas
a= (1,2,3,4,5,6,7,8,9,0)
b= [1,2,3,4,5,6,7,8,9,0]

print('a=',a.__sizeof__())
print('b=',b.__sizeof__())

# Ejemplo 14: Modificar elemento en tupla
frutas = ("manzana", "banano", "cereza")
frutas[1] = "naranja"
print(frutas)

# ¿Cómo puedo solucionar el anterior problema y poder modificar un elemento
# de una tupla?

# Ejemplo 15 metodos de tuplas
dir(frutas)

# Ejemplo 16: método count
cars = ('Ford', 'BMW', 'Volvo')
cars.count('Ford')

# Ejemplo 17: método index
cars = ('Ford', 'BMW', 'Volvo')
cars.index('Ford')

# Ejemplo 18: crear una tupla de un elemento
thistuple = ("apple",)
print(type(thistuple))

#NOT a tuple
thistuple = ("apple")
print(type(thistuple))
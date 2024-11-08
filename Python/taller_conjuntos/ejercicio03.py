nombres = [
    "Carlos", "Ana", "Luis", "María", "Juan", "Sofía", "Carlos", "Miguel", 
    "Ana", "Pedro", "Lucía", "Luis", "Carla", "María", "Jorge", "Laura", 
    "Sofía", "Pablo", "Lucía", "Diego"
]

nombres_repetidos =set()
nombres_unicos = set()

for nombre in nombres:
    if nombre in nombres_unicos:
        nombres_repetidos.add(nombre)
    else:
        nombres_unicos.add(nombre)

nombres_unica_aparicion = nombres_unicos - nombres_repetidos

print(nombres_unica_aparicion)

nombres2 = [nombre for nombre in nombres if nombres.count(nombre) == 1]
print(nombres2)


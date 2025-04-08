tupla = (('Red', 'White', 'Blue'), ('Green', 'Pink', 'Purple'), ('Orange', 'Yellow', 'Lime'))
buscar = 'Purple'

encontrado = False
for element in tupla:
    if buscar in element:
        print("Elemento en tupla =", buscar in element)
        print(f"Posición de la tupla = {element.index(buscar)}")
        encontrado = True
if not encontrado:
    print("no se encontro el item")

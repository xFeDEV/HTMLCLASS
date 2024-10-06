<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>Registro de ventas en base de datos </h3>
    <form action="ingresar_venta.php" method="POST">
        <label for="">Nombre: </label> 
            <input type="text" name="nombre">
            <br>
        <label for="">Documento: </label>
            <input type="number" name="documento">
            <br>
        <label for="">Email: </label>
            <input type="email" name="email">
            <br>
        <label for="">Efectivo: </label>
            <input type="number" name="efectivo">
            <br>
        <label for="">Seleccione el producto: </label>
            <select name="producto" id="">
                <option value="tomate">Tomate</option>
                <option value="cebolla">Cebolla</option>
                <option value="maracuya">Maracuya</option>
                <option value="aguacate">Aguacate</option>
            </select>
        <label for="">Cantidad: </label>
            <input type="number" name="cantidad">
            <br>
        <input type="submit" value="ingresar">    
    </form>    

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ingresar_estudiante.php" method="POST">
        <label for="">Documento: </label>
            <input type="number" name="documento">
        <label for="">Nombre: </label>
            <input type="text" name="nombre">
        <label for="">Apellido: </label>
            <input type="text" name="apellido">
        <label for="">Emai </label>
            <input type="email" name="email">
        <label for="">Edad: </label>
            <input type="number" name="edad">
        <p>Nota #1 </p>
            <input type="number" step="0.0001" name="nota1">
        <p>Nota #2 </p>
            <input type="number" step="0.0001" name="nota2">
        <p>Nota #3 </p>
            <input type="number" step="0.0001" name="nota3">
        
        <input type="submit" value="ingresar">

    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persona</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <form action="resultado.php" method="POST">

        <div class="input-group">
            <span class="input-group-text" id="inputGroup-sizing-default">numero de documento:</span>
            <input type="number" name="documento" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group">
            <span class="input-group-text" id="inputGroup-sizing-default">nombre</span>
            <input type="text" name="nombre" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="col-3">

        </div>
        <label>apellido:</label>
        <input type="text" name="apellido">
        <br>

        <label>email:</label>
        <input type="text" name="email">
        <br>

        <label>telefono:</label>
        <input type="number" name="telefono">
        <br>

        <label>direccion:</label>
        <input type="text" name="direccion">
        <br>

        <label>fecha de nacimiento:</label>
        <input type="text" name="BDay">
        <br>

        <label>genero:</label>
        <input type="text" name="genero">
        <br>

        <label>estado civil:</label>
        <input type="text" name="estadoCivil">
        <br>

        <label>aux transporte:</label>
        <input type="number" name="auxTrans">
        <br>

        <label>horas laboradas:</label>
        <input type="number" name="horas">
        <br>

        Ciudad:
        <select name="ciudad" id="">
            <option value="bogota">BOGOTA</option>
            <option value="cali">CALI</option>
            <option value="medellin">MEDELLIN</option>
        </select>
        <br>


        ocupacion:
        <select name="ocupacion" id="">

            <option value="ing">ING</option>
            <option value="tec">TEC</option>
        </select>
        <br>


        <input type="submit" value="enviar">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
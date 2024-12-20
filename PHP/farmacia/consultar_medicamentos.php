<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla medicamentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="text-center text-light">

    
<?php
    include_once('nav_bar.php');
?>

    <h1 class="mt-5">Tabla medicamentos</h1>
    <div class="container mt-5">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Codigo</th>
                    <th scope="col">Laboratorio</th>
                </tr>
        </thead>
        <tbody>
    <?php
    include_once('conexion_farmacia.php');

        $consulta = $conexion->query("SELECT * from medicamentos");

        while($row=$consulta->fetch_array()){

            $id = $row['ID'];
            $nombre = $row['nombre'];
            $precio = $row['precio'];
            $codigo = $row['codigo'];
            $laboratorio = $row['laboratorio'];

            echo "<tr>";
            echo '<th scope="row">',$id,'</th>';
            echo '<td>',$nombre,'</td>';
            echo '<td>',$precio,'</td>';
            echo '<td>',$codigo,'</td>';
            echo '<td>',$laboratorio,'</td>';
            echo ' </tr>';
        }
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
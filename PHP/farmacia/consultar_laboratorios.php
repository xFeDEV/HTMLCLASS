<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla laboratorio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="text-center text-light">

    
<?php
    include_once('nav_bar.php');
?>

    <h1 class="mt-5">Tabla laboratorios</h1>
    <div class="container mt-5">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Tipo de producto</th>
                </tr>
        </thead>
        <tbody>
    <?php
    include_once('conexion_farmacia.php');

        $consulta = $conexion->query("SELECT * from laboratorio");

        while($row=$consulta->fetch_array()){

            $id = $row['ID'];
            $nombre = $row['nombre'];
            $direccion = $row['direccion'];
            $telefono = $row['telefono'];
            $tipo_producto = $row['tipo_de_productos'];

            echo "<tr>";
            echo '<th scope="row">',$id,'</th>';
            echo '<td>',$nombre,'</td>';
            echo '<td>',$direccion,'</td>';
            echo '<td>',$telefono,'</td>';
            echo '<td>',$tipo_producto,'</td>';
            echo ' </tr>';
        }
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
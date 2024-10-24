<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla inventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="text-center text-light">

    
<?php
    include_once('nav_bar.php');
?>
    <h1 class="mt-5">Tabla inventario</h1>


    <div class="container">
        <form action="" method="POST">
            <input type="text" name="buscar" placeholder="Buscar alumno" >
            <br>
            <button type="submit" class="btn btn-primary mt-3">Buscar</button>
        </form>
    </div>

    
    <div class="container mt-5">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Laboratorio</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Fecha de caducidad</th>
                    <th scope="col">Numero de lote</th>
                    <th scope="col"> </th>
                    <th scope="col"> </th>
                </tr>
        </thead>
        <tbody>
    <?php
    include_once('conexion_farmacia.php');

        if(isset($_POST['buscar'])){
            $buscar = $_POST['buscar'];
            $consulta = $conexion->query("SELECT * from inventario WHERE nombre LIKE '%$buscar%' ORDER BY ID ASC");
        }else{
            $consulta = $conexion->query("SELECT * from inventario");
        }

        while($row=$consulta->fetch_array()){

            $id = $row['ID'];
            $nombre = $row['nombre'];
            $laboratorio = $row['laboratorio'];
            $cantidad = $row['cantidad'];
            $fecha_caducidad = $row['fecha_caducidad'];
            $numero_de_lote = $row['numero_de_lote'];
        ?>
            <tr>
            <th scope="row"><?php echo $id ?> </th>
            <td><?php echo $nombre ?></td>
            <td><?php echo $laboratorio ?></td>
            <td><?php echo $cantidad ?></td>
            <td><?php echo $fecha_caducidad?></td>
            <td><?php echo $numero_de_lote ?></td>
            <td> <button type="button" class="btn btn-primary btn-sm">Editar</button></td>
            <td> <button type="button" class="btn btn-danger btn-sm">Eliminar</button></td>
            </tr>
        <?php    
        }        
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
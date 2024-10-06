<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Profesores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="text-center text-light">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="menu.php">Colegio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="formulario_estudiantes.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Estudiantes
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="formulario_estudiantes.php">REGISTRAR</a></li>
                    <li><a class="dropdown-item" href="consultar_estudiantes.php">CONSULTAR</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="formulario_profesor.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Profesores
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="formulario_profesor.php">REGISTRAR</a></li>
                    <li><a class="dropdown-item" href="consultar_profesores.php">CONSULTAR</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="formulario_materia.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Materias
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="formulario_materia.php">REGISTRAR</a></li>
                    <li><a class="dropdown-item" href="consultar_materias.php">CONSULTAR</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="formulario_grupo.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Grupos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="formulario_grupo.php">REGISTRAR</a></li>
                    <li><a class="dropdown-item" href="consultar_grupos.php">CONSULTAR</a></li>
                </ul>
            </li>

        </ul>
        </div>
    </div>
</nav>


    <h1 class="mt-5">Tabla profesores</h1>
    <div class="container mt-5">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Documento</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Materia</th>
                    <th scope="col">Fecha Contrato</th>
                    <th scope="col">Genero</th>
                </tr>
        </thead>
        <tbody>
    <?php
    include_once('conexion_bd_estu.php');

        $consulta = $conexion->query("SELECT * from profesores");

        while($row=$consulta->fetch_array()){

            $id = $row['Id'];
            $documento = $row['documento'];
            $nombre = $row['nombre'];
            $apellido = $row['apellido'];
            $email = $row['email'];
            $materia = $row['materia'];
            $fecha = $row['fecha_contrato'];
            $genero = $row['genero'];
            echo "<tr>";
            echo '<th scope="row">',$id,'</th>';
            echo '<td>',$documento,'</td>';
            echo '<td>',$nombre,'</td>';
            echo '<td>',$apellido,'</td>';
            echo '<td>',$email,'</td>';
            echo '<td>',$materia,'</td>';
            echo '<td>',$fecha,'</td>';
            echo '<td>',$genero,'</td>';
            echo ' </tr>';
        }
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
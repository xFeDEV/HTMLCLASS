<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Estudiantes</title>
    <link rel="stylesheet" href="bootstrap.min.css">
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


    <h1 class="mt-5">Tabla estudiantes</h1>
    <div class="container mt-5">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Documento</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Promedio</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Grupo</th>
                    <th scope="col">Profesor</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
        </thead>
        <tbody>
    <?php
    include_once('conexion_bd_estu.php');

        $consulta = $conexion->query("SELECT * from estudiantes");

        while($row=$consulta->fetch_array()){

            $id = $row['Id'];
            $documento = $row['documento'];
            $nombre = $row['nombre'];
            $apellido = $row['apellido'];
            $email = $row['email'];
            $edad = $row['edad'];
            $promedio = $row['promedio'];
            $estado = $row['estado'];
            $grupo = $row['grupo'];
            $profesor = $row['profesor'];
            echo "<tr>";
            echo '<th scope="row">',$id,'</th>';
            echo '<td>',$documento,'</td>';
            echo '<td>',$nombre,'</td>';
            echo '<td>',$apellido,'</td>';
            echo '<td>',$email,'</td>';
            echo '<td>',$edad,'</td>';
            echo '<td>',$promedio,'</td>';
            echo '<td>',$estado,'</td>';
            echo '<td>',$grupo,'</td>';
            echo '<td>',$profesor,'</td>';
            ?>
            <td>
                <a class="btn btn-primary" href="modificar.php?
                nombre=<?php echo $nombre?> &
                email=<?php echo $email?> &
                nota=<?php echo $promedio?> &
                grupo=<?php echo $grupo?> &
                profesor=<?php echo $profesor?>" title="Editar">
                    <i class="icon-edit">Editar</i> 
                </a>
            </td>
            <td>
                <a class="btn btn-danger" href="eliminar.php?email=<?php echo $email?>" title="Eliminar">
                    <i class="icon-edit">Eliminar</i>
                </a>
            </td>
            <?php
            echo '</tr>';
        }
    ?>
    </div>
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>
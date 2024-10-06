<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="forms.css">
    <title>Formulario profesores</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Colegio</a>
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



<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Registro profesor</h3>
                        <p>Llena todos los campos para registrar profesor</p>
                        <form class="requires-validation" action="ingresar_profesor.php" method="POST" novalidate>

                            <div class="col-md-12">
                               <input class="form-control" type="number" name="documento" placeholder="Documento" required>
                               <div class="valid-feedback">Datos correctas!</div>
                               <div class="invalid-feedback">Este dato es necesisario para el registrar profesor</div>
                            </div>

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="nombre" placeholder="Nombre" required>
                               <div class="valid-feedback">Datos correctas!</div>
                               <div class="invalid-feedback">Este dato es necesisario para el registrar profesor</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="apellido" placeholder="Apellido" required>
                                 <div class="valid-feedback">Datos correctas!</div>
                                 <div class="invalid-feedback">Este dato es necesisario para el registrar profesor</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="Email" required>
                                 <div class="valid-feedback">Datos correctas!</div>
                                 <div class="invalid-feedback">Este dato es necesisario para el registrar profesor</div>
                            </div>

                           <div class="col-md-12">
                              <input class="form-control" type="text" name="materia" placeholder="Materia" required>
                               <div class="valid-feedback">Datos correctas!</div>
                               <div class="invalid-feedback">Este dato es necesisario para el registrar profesor</div>
                           </div>


                           <div class="col-md-12 mt-2">
                                <label for="">Fecha contratacion: </label>
                                <input class="form-control" type="date" name="contratacion" required>
                               <div class="valid-feedback">Datos correctas!</div>
                               <div class="invalid-feedback">Este dato es necesisario para el registrar profesor</div>
                           </div>

                           <div class="col-md-12 mt-3">
                            <label class="mb-3 mr-1" for="gender">Genero: </label>

                            <input type="radio" class="btn-check" name="gender" value="hombre" id="hombre" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="hombre">Hombre</label>

                            <input type="radio" class="btn-check" name="gender" id="mujer" value="mujer" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="mujer">Mujer</label>

                            <input type="radio" class="btn-check" name="gender" id="secret" value="secreto" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="secret">Secret</label>
                               <div class="valid-feedback mv-up">Genero seleccionado</div>
                                <div class="invalid-feedback mv-up">Por favor seleccione un genero</div>
                            </div>
                  

                            <div class="form-button mt-4 d-flex justify-content-center">
                                <button id="submit" type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="forms.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
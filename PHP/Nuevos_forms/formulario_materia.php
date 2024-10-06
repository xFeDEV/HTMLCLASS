<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="forms.css">
    <title>Formulario materia</title>
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
                        <h3>Registrar materia</h3>
                        <p>Llena todos los campos para registrar materia</p>
                        <form class="requires-validation" action="ingresar_materia.php" method="POST" novalidate>

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="nombre_materia" placeholder="Nombre materia" required>
                               <div class="valid-feedback">Datos correctas!</div>
                               <div class="invalid-feedback">Este dato es necesisario para el registrar materia</div>
                            </div>

                            <div class="col-md-12 mt-3">
                                <input class="form-control" type="text" name="profesor" placeholder="Profesor" required>
                                <div class="valid-feedback">Datos correctas!</div>
                                <div class="invalid-feedback">Este dato es necesisario para el registrar materia</div>
                            </div>

                            <div class="col-md-12">
                                <select class="form-select mt-3" name="grado" required>
                                      <option selected disabled value="">Grado</option>
                                      <option value="octavo">Octavo</option>
                                      <option value="noveno">Noveno</option>
                                      <option value="decimo">Decimo</option>
                                      <option value="once">Once</option>
                               </select>
                                <div class="valid-feedback">Seleccionaste un grado!</div>
                                <div class="invalid-feedback">Por favor selecciona un grado!</div>
                           </div>


                           <div class="col-md-12 mt-3">
                              <input class="form-control" type="number" name="creditos" placeholder="Creditos" required>
                              <div class="valid-feedback">Datos correctas!</div>
                              <div class="invalid-feedback">Este dato es necesisario para el registrar materia</div>
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
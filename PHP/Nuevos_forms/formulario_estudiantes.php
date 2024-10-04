<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="forms.css">
    <title>Estudiantes</title>
</head>
<body>
<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Registro estudiantes</h3>
                        <p>Llena todos los campos para registrar estudiante</p>
                        <form class="requires-validation" action="ingresar_estudiante.php" method="POST" novalidate>
                            <div class="col-md-12">
                               <input class="form-control" type="number" name="documento" placeholder="Documento" required>
                               <div class="valid-feedback">Datos correctas!</div>
                               <div class="invalid-feedback">Este dato es necesisario para el registrar estudiantes</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="nombre" placeholder="Nombre" required>
                                 <div class="valid-feedback">Datos correctas!</div>
                                 <div class="invalid-feedback">Este dato es necesisario para el registrar estudiantes</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="apellido" placeholder="Apellido" required>
                                 <div class="valid-feedback">Datos correctas!</div>
                                 <div class="invalid-feedback">Este dato es necesisario para el registrar estudiantes</div>
                            </div>

                           <div class="col-md-12">
                              <input class="form-control" type="email" name="email" placeholder="Email" required>
                               <div class="valid-feedback">Datos correctas!</div>
                               <div class="invalid-feedback">Este dato es necesisario para el registrar estudiantes</div>
                           </div>

                           <div class="col-md-12 mt-3">
                                <input class="form-control" type="number" name="edad" placeholder="Edad" required>    
                                <div class="valid-feedback">Datos correctas!</div>
                                <div class="invalid-feedback">Este dato es necesisario para el registrar estudiantes</div>
                            </div>

                            <div class="col-md-12 mt-3">
                                <input class="form-control" type="number" name="nota1" step="0.0001" placeholder="Nota #1" required>    
                                <div class="valid-feedback">Datos correctas!</div>
                                <div class="invalid-feedback">Este dato es necesisario para el registrar estudiantes</div>
                            </div>

                            <div class="col-md-12 mt-3">
                                <input class="form-control" type="number" name="nota2" step="0.0001" placeholder="Nota #2" required>    
                                <div class="valid-feedback">Datos correctas!</div>
                                <div class="invalid-feedback">Este dato es necesisario para el registrar estudiantes</div>
                            </div>

                            <div class="col-md-12 mt-3">
                                <input class="form-control" type="number" name="nota3" step="0.0001" placeholder="Nota #3" required>    
                                <div class="valid-feedback">Datos correctas!</div>
                                <div class="invalid-feedback">Este dato es necesisario para el registrar estudiantes</div>
                            </div>

                           <div class="col-md-12 mt-3">
                            <label class="mb-3 mr-1" for="gender">Gender: </label>

                            <input type="radio" class="btn-check" name="gender" value="hombre" id="hombre" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="hombre">Hombre</label>

                            <input type="radio" class="btn-check" name="gender" id="mujer" value="mujer" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="mujer">Mujer</label>

                            <input type="radio" class="btn-check" name="gender" id="secret" autocomplete="off" required>
                            <label class="btn btn-sm btn-outline-secondary" for="secret">Secret</label>
                               <div class="valid-feedback mv-up">Genero seleccionado</div>
                                <div class="invalid-feedback mv-up">Por favor seleccione un genero</div>
                            </div>
                  

                            <div class="form-button mt-3">
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
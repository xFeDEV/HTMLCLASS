<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="one.css">
    <title>Inventario</title>
</head>
<body>


<?php
    include_once('nav_bar.php');
?>


<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Ingresar inventario</h3>
                        <p>Llene todo los campos</p>
                        <form class="requires-validation" action="ingresar_inventario.php" method="POST" novalidate>

                            <div class="col-md-12">
                                <select class="form-select mt-3" name="medicamento" required>
                                      <option selected disabled value="">Medicamento</option>
                                      <?php
                                        include_once('conexion_farmacia.php');
                                        $consulta = $conexion->query("SELECT * FROM medicamentos");
                                        while($row = $consulta->fetch_array()){
                                            echo '<option value="',$row['nombre'],'">',$row['nombre'],'</option>';
                                        }
                                      ?>
                               </select>
                               <div class="valid-feedback">Datos correctas!</div>
                               <div class="invalid-feedback">Este dato es necesisario para el registrar estudiantes</div>
                           </div>

                           <div class="col-md-12">
                                <select class="form-select mt-3" name="laboratorio" required>
                                      <option selected disabled value="">Laboratorio</option>
                                      <?php
                                        include_once('conexion_farmacia.php');
                                        $consulta = $conexion->query("SELECT * FROM laboratorio");
                                        while($row = $consulta->fetch_array()){
                                            echo '<option value="',$row['nombre'],'">',$row['nombre'],'</option>';
                                        }
                                      ?>
                                    
                               </select>
                               <div class="valid-feedback">Datos correctas!</div>
                               <div class="invalid-feedback">Este dato es necesisario para el registrar estudiantes</div>
                           </div>

                            <div class="col-md-12 mt-3">
                                <input class="form-control" type="number" name="cantidad" placeholder="Cantidad" required>
                                <div class="valid-feedback">Datos correctas!</div>
                                <div class="invalid-feedback">Este dato es necesisario para el registrar estudiantes</div>
                            </div>

                            <div class="col-md-12 mt-3">
                               <label for="">Fecha de caducidad</label> 
                               <input class="form-control mt-3" type="date" name="fecha_caducidad" required>
                               <div class="valid-feedback">Datos correctas!</div>
                               <div class="invalid-feedback">Este dato es necesisario para el registrar estudiantes</div>
                            </div>

                            <div class="col-md-12 mt-3">
                               <input class="form-control" type="number" name="lote" placeholder="Numero de lote" required>
                               <div class="valid-feedback">Datos correctas!</div>
                               <div class="invalid-feedback">Este dato es necesisario para el registrar estudiantes</div>
                            </div>

                            <div class="form-button mt-3 d-flex justify-content-center mt-5">
                                <button id="submit" type="submit" class="btn btn-primary">Ingresar inventario</button>
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
<?php
    include_once('conexion_bd_estu.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="forms.css">
    <title>Document</title>
</head>
<body>
    <?php
    include_once('nav_bar.php');
    ?>
    <div class="container text-center text-light mt-5">
        <div class="row">
            <div class="col-12 mb-2">
                <h1>Consulta indivual estudiante</h1>
            </div>

            <div class="col-12 d-flex justify-content-center">
                <form action="" method="POST">
                    <div class="col-12">
                        <select class="form-select" aria-label="Grupo" name="documento">
                            <option selected>Seleccione documento</option>
                                <?php
                                    include_once('conexion_bd_estu.php');
                                    $consulta = $conexion->query("SELECT * FROM estudiantes");
                                    while($row = $consulta->fetch_array()){
                                         echo '<option value="',$row['documento'],'">',$row['documento'],'</option>';
                                    }
                                ?>
                        </select>
                    </div>

                    <input type="submit" class="mt-3">

                </form>
            </div>
        </div>

        <div class="container">
            <?php
                    if(isset($_POST['documento'])){
                        include_once('conexion_bd_estu.php');

                        $documento = $_POST['documento'];
                        
                        $consulta = $conexion->query("SELECT * from estudiantes where documento='$documento' ");
                        $row=$consulta->fetch_array();

                        $fields = [
                            'documento' => 'Documento',
                            'nombre' => 'Nombre',
                            'apellido' => 'Apellido',
                            'email' => 'Email',
                            'edad' => 'Edad',
                            'genero' => 'Género',
                            'promedio' => 'Promedio',
                            'estado' => 'Estado',
                            'grupo' => 'Grupo',
                            'profesor' => 'Profesor',
                        ];
                        
                        foreach ($fields as $key => $label) {
                            echo '<div class="row mt-3">';
                            echo '<div class="col-6">';
                            echo '<input class="form-control" type="text" value="',$label,'" aria-label="Disabled input example" disabled readonly>';
                            echo '</div>';
                            
                            echo '<div class="col-6">';
                            echo '<input class="form-control" type="text" value="',$row[$key],'" aria-label="Disabled input example" disabled readonly>';
                            echo '</div>';
                            echo '</div>';
                        }
                    }else{
                        
                    }
            ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

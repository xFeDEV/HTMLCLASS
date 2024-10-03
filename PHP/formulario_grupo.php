<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario grupo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
</head>
<body class="d-flex align-items-center">
    <div class="container-fluid row">
        <div class="col-5 bg-primary rounded ms-2 pb-3">
            <form action="ingresar_grupo.php" method="POST">
                <div class="mt-3 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre del Grupo</label>
                    <input type="text" name="nombre_grupo" class="form-control"  placeholder="Nombre">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Año Escolar</label>
                    <input type="number" name="ano_escolar" class="form-control"  placeholder="2024">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Grado</label>
                    <input type="number" name="grado" class="form-control"  placeholder="Decimo">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Jefe de grupo</label>
                    <input type="text" name="jefe_grupo" class="form-control"  placeholder="Profesor Pablo">
                </div>
                
                <div class="d-flex justify-content-end">
                    <input type="submit" value="INGRESAR" class="btn btn-secondary">
                </div>
            </form>
        </div>
        
            
     
        

        <div class="col-6 d-flex justify-content-center align-items-center">
            <h1 class="text-primary"><span class="fs-1">Formulario</span> <span class="fs-2"> grupo!</span></h1>
        </div>

    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
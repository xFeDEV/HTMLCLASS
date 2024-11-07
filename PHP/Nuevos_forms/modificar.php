<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre = $_GET['nombre'];
        $email = $_GET['email'];
        $promedio = $_GET['nota'];
        $grupo = $_GET['grupo'];
        $profesor = $_GET['profesor'];

    ?>

    <form action="editar.php" method="POST">
        <tr>
            <td> <input type="text" name="nombre" value="<?php echo $nombre;?>"></td>
            <td> <input type="text" name="email" value="<?php echo $email;?>"></td>
            <td> <input type="text" name="promedio" value="<?php echo $promedio;?>"></td>
            <td> <input type="text" name="grupo" value="<?php echo $grupo;?>"></td>
            <td> <input type="text" name="profesor" value="<?php echo $profesor;?>"></td>
            <input type="submit" value="Editar">
        </tr>
    </form>
</body>
</html>
<?php
    include_once('conexion_bd_estu.php');

    $consulta = $conexion->query("SELECT * from estudiante");

    while($row=$consulta->fetch_array()){

        $id = $row['Id'];
        $documento = $row['documento'];
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $email = $row['email'];
        $edad = $row['edad'];
        $promedio = $row['promedio'];
        $estado = $row['estado'];

        echo 'ID: ', $id.'<br>';
        echo 'Documento: ', $documento.'<br>';
        echo 'Nombre: ', $nombre.'<br>';
        echo 'Apellido: ', $apellido.'<br>';
        echo 'Email: ', $email.'<br>';
        echo 'Edad: ', $edad.'<br>';
        echo 'Promedio: ', $promedio.'<br>';
        if($promedio >= 3){
            echo ' --> APROBADO!';
        }else{
            echo ' --> REPROBADO!';
        }
        echo '<br> <br>';
    }


?>
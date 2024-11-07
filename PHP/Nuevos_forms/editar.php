<?php
    include_once('conexion_bd_estu.php');
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $nota = $_POST['promedio'];
    $grupo = $_POST['grupo'];
    $profesor = $_POST['profesor'];

    $conexion->query("UPDATE estudiantes set nombre='$nombre', email='$email', promedio='$nota', grupo='$grupo', profesor='$profesor' where email='$email'");
    header("Location: consultar_estudiantes.php");
?>
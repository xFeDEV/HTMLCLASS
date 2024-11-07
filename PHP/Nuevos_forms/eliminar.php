<?php
    include_once('conexion_bd_estu.php');
    $email_recibida = $_GET["email"];
    $conexion->query("DELETE FROM estudiantes where email='$email_recibida'");
    header("Location: consultar_estudiantes.php");
?>
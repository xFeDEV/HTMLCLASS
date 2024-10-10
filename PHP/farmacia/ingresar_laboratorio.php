<?php

include_once('nav_bar.php');
include_once('conexion_farmacia.php');

    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $tipo_de_producto = $_POST['tipo_de_productos'];


    $conexion->query("INSERT INTO laboratorio(nombre, direccion, telefono, tipo_de_productos)
    values ('$nombre', '$direccion', $telefono, '$tipo_de_producto')");

    include_once('consultar_laboratorios.php');
?>

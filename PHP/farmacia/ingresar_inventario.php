<?php

include_once('nav_bar.php');
include_once('conexion_farmacia.php');

    $medicamento = $_POST['medicamento'];
    $laboratorio = $_POST['laboratorio'];
    $cantidad = $_POST['cantidad'];
    $fecha_caducidad = $_POST['fecha_caducidad'];
    $lote = $_POST['lote'];

    $conexion->query("INSERT INTO inventario(nombre, laboratorio, cantidad, fecha_caducidad, numero_de_lote)
    values ('$medicamento', '$laboratorio', $cantidad, '$fecha_caducidad', $lote)");

    echo "EXITO!";

?>

<?php 
    include_once('conexion_farmacia.php');
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $codigo = $_POST['codigo'];
    $laboratorio = $_POST['laboratorio'];

    $conexion->query("INSERT INTO medicamentos(nombre, precio, codigo, laboratorio)
    values('$nombre', $precio, $codigo, '$laboratorio')");

    echo "Exito!"
?>
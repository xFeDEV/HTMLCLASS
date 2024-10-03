<?php

include_once('conexion_bd_estu.php');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$materia = $_POST['materia'];
$fecha = $_POST['contratacion'];

$conexion->query("INSERT INTO profesores(nombre, apellido, email, materia, fecha_contrato) values ('$nombre', '$apellido', '$email', '$materia', '$fecha')");

echo "Profesor registrado exitosamente"

?>
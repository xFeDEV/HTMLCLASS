<?php

include_once('conexion_bd_estu.php');


$documento = $_POST['documento'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$materia = $_POST['materia'];
$fecha = $_POST['contratacion'];
$genero = $_POST['gender']

$conexion->query("INSERT INTO profesores(documento, nombre, apellido, email, materia, fecha_contrato, genero) values ($documento, '$nombre', '$apellido', '$email', '$materia', '$fecha', '$genero')");

echo "Profesor registrado exitosamente"

?>
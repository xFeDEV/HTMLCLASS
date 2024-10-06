<?php

include_once('conexion_bd_estu.php');

$nombre_materia = $_POST['nombre_materia'];
$profesor = $_POST['profesor'];
$grado = $_POST['grado'];
$creditos = $_POST['creditos'];

$conexion->query("INSERT INTO materias(nombre, profesor, grado, creditos) values ('$nombre_materia', '$profesor', '$grado', $creditos)");

echo "Materia registrada exitosamente"

?>
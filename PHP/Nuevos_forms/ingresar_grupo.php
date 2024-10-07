<?php

include_once('conexion_bd_estu.php');

$nombre_grupo = $_POST['nombre_grupo'];
$ano_escolar = $_POST['ano_escolar'];
$grado = $_POST['grado'];
$jefe_grupo = $_POST['jefe_grupo'];

$conexion->query("INSERT INTO grupos(nombre, ano_escolar, grado, jefe_grupo) values ('$nombre_grupo', '$ano_escolar', '$grado', '$jefe_grupo')");

include_once('consultar_grupos.php');
?>
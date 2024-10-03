<?php

include_once('conexion_bd_estu.php');

$documento = $_POST['documento'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$email = $_POST['email'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

$promedio = ($nota1 + $nota2 + $nota3)/3;

if($promedio >= 3){
    $estado = "aprobado";
}else{
    $estado = "reprobado";
}

$conexion->query("INSERT INTO estudiante(documento, nombre, apellido, email, edad, promedio, estado) values ($documento, '$nombre', '$apellido', '$email', $edad, $promedio, '$estado')");

echo "El estudiante ha sido ingresado con exito"

?>
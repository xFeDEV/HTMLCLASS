<?php

include_once('conexion_bd_estu.php');

$documento = $_GET['documento'];

$consulta = $conexion->query("SELECT * from estudiantes where documento='$documento' ");

if($row=$consulta->fetch_array()){
    $nombre = $row['nombre'];
    echo $nombre;
}else{
    echo 'No existe';
}

?>



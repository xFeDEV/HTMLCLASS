<?php
    $conexion = new mysqli('localhost', 'root', '', 'tienda');

    $nombre = $_POST['nombre'];
    $documento = $_POST['documento'];
    $email = $_POST['email'];
    $producto = $_POST['producto'];
    $cantidad = $_POST['cantidad'];
    $efectivo = $_POST['efectivo'];

    $tomate = 4000;
    $cebolla = 3500;
    $maracuya = 6000;
    $aguacate = 8000;

    if ($producto == 'tomate'){
        $sub_total = $tomate * $cantidad;

    }elseif($producto == 'cebolla'){
        $sub_total = $cebolla * $cantidad;

    }elseif($producto == 'maracuya'){
        $sub_total = $maracuya * $cantidad;

    }elseif($producto == 'aguacate'){
        $sub_total = $aguacate * $cantidad;

    }


    if ($sub_total > $efectivo){
        echo "Efectivo insuficiente!";
    }else{
        $cambio = $efectivo-$sub_total;
        $iva = $sub_total*0.19;
        $total = $sub_total+$iva;
        $conexion->query("INSERT INTO data_ventas(nombre, documento, email, producto, cantidad, precio, efectivo, cambio, iva, total) values ('$nombre', $documento, '$email', '$producto', $cantidad, $sub_total, $efectivo, $cambio, $iva, $total)");
        echo "Venta registrada con exito";
    }

?>
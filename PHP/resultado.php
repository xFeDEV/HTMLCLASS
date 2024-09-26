<?php

$documento=$_REQUEST['documento'];
$nombre=$_REQUEST['nombre'];
$apellido=$_REQUEST['apellido'];
$email=$_REQUEST['email'];
$telefono=$_REQUEST['telefono'];
$direccion=$_REQUEST['direccion'];
$BDay=$_REQUEST['BDay'];
$genero=$_REQUEST['genero'];
$estadoCivil=$_REQUEST['estadoCivil'];
$horas=$_REQUEST['horas'];
$ciudad=$_REQUEST['ciudad'];
$auxTrans=$_REQUEST['auxTrans'];
$ocupacion = $_REQUEST['ocupacion'];

$sueldo_bogota_ing = 4000000;
$sueldo_bogota_tec = 2000000;
$sueldo_cali_ing = 3000000;
$sueldo_cali_tec = 2500000;
$sueldo_medellin_ing = 4500000;
$sueldo_medellin_tec = 3000000;
$sueldo_hora;

echo "Este es el documento: ", $documento.'<br>';
echo "Este es el nombre ", $nombre.'<br>';
echo "Este es el apellido: ", $apellido.'<br>';
echo "Este es el email: ", $email.'<br>';
echo "Este es el telefono: ", $telefono.'<br>';
echo "Este es el dirrecion: ", $direccion.'<br>';
echo "Este es el fecha de nacimiento: ", $BDay.'<br>';
echo "Este es el genero: ", $genero.'<br>';
echo "Este es el estado civil: ", $estadoCivil.'<br>';
echo "Las horas laborasdas son: ", $horas.'<br>';
echo "La ciudad es: ", $ciudad.'<br>';
echo "Este es el auxilio transporte: ", $auxTrans.'<br>';
echo "Esta es su ocupacion: ", $ocupacion.'<br>';

if ($horas > 160){
    $horas_extra = $horas-160;
    $horas = 160;
}else{
    $horas_extra = 0;
}

if(($ciudad == 'bogota') && ($ocupacion == 'ing')){
    $sueldo_hora = ($sueldo_bogota_ing / 30) / 8;
    $sueldo_hora_extra = $sueldo_hora * 1.5;
}elseif(($ciudad == 'cali') && ($ocupacion == 'ing')){
    $sueldo_hora = ($sueldo_cali_ing / 30) / 8;
    $sueldo_hora_extra = $sueldo_hora * 1.5;
}elseif(($ciudad == 'medellin') && ($ocupacion == 'ing')){
    $sueldo_hora = ($sueldo_medellin_ing / 30) / 8;
    $sueldo_hora_extra = $sueldo_hora * 1.5;
}elseif(($ciudad == 'bogota') && ($ocupacion == 'tec')){
    $sueldo_hora = ($sueldo_bogota_tec / 30) / 8;
    $sueldo_hora_extra = $sueldo_hora * 1.5;
}elseif(($ciudad == 'cali') && ($ocupacion == 'tec')){
    $sueldo_hora = ($sueldo_cali_tec / 30) / 8;
    $sueldo_hora_extra = $sueldo_hora * 1.5;
}elseif(($ciudad == 'medellin') && ($ocupacion == 'tec')){
    $sueldo_hora = ($sueldo_medellin_tec / 30) / 8;
    $sueldo_hora_extra = $sueldo_hora * 1.5;
}

    echo "sueldo por horas ordinales: ", ($sueldo_hora * $horas), "<br>";
    echo "sueldo por horas extras: ", ($sueldo_hora_extra*$horas_extra), "<br>";
    echo "sueldo: ", ($sueldo_hora * $horas) + ($sueldo_hora_extra*$horas_extra), "<br>";
    echo "sueldo total: ", (($sueldo_hora * $horas) + ($sueldo_hora_extra*$horas_extra))*0.90 + auxTrans, "<br>";
?>
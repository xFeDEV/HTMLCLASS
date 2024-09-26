<?php

$edad=$_REQUEST['edad'];

echo "Esta es la edad: ", $edad.'<br>';

if($edad>=18){
    echo "Es mayor de edad";
}else{
    echo "Es menor de edad";
}






?>
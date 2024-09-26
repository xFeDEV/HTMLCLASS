<?php
    $cantidad = $_REQUEST['cant'];
    $salario_new = $_REQUEST['salario'];
    for($i=1;$i<=$cantidad;$i++){
        echo $i;
        if ($salario_new > 1000000){
            $total = $salario_new*0.1;
            $pago=$total+$salario_new;
            echo "Este es el salario nuevo" + $pago;
        }
    }
?>
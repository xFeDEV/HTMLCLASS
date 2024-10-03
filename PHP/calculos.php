<?php
    $cantidad = $_REQUEST['cant'];
    $salario_new = $_REQUEST['salario'];
    for($i=1;$i<=$cantidad;$i++){
        echo $i;
    ?>

        <form action="">
            salario:
            <input type="text" name="salario">
            <input type="submit" value="calcular">
        </form>
        <?php

        if ($salario_new > 100000){
            $total = $salario_new*0.1;
            $pago=$total+$salario_new;
            echo "Este es el salario nuevo" + $pago;
        }
    }
?>
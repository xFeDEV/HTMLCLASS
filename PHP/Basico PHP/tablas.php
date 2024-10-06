<?php
    for($i=1;$i<=10;$i++){
        echo "Tabla del ", $i;
        for($z=1;$z<=10;$z++){
            echo '<p>', $i, " x ", $z ," = ",($i*$z), '</p>';
        }
    }   
?>
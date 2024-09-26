<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(empty($_REQUEST)){
    ?>
        <h1>Cuantos empleados son?</h1>
        <form action="" method="POST">
            <label>Ingrese el numero de empleados: </label>
            <input type="number" name="num">
            <input type="submit" name="submit" value="Enviar">
        </form>
    <?php        
    }elseif(isset($_REQUEST['num'])){

    ?>
    <form action="" method="POST">
        <?php
        $empleados = $_REQUEST['num'];
        for($i=0;$i<$empleados;$i++){
            echo "<p> Empleado #",($i+1) ,"</p>";
            ?>
            Ingrese las horas que trabajo
            <input type="number" name="horas[]" value="">
            <select name="ocupacion[]" id="">
                <option value="ing">ING</option>
                <option value="tec">TEC</option>
            </select>
            <br>
            <?php
        }
        ?>
        <br>
        <input type="submit" value="enviar">
        </form>
        <?php
    }else{
        $sueldo_ing = 5000000;
        $sueldo_tec = 3500000;
        $horas = $_REQUEST['horas'];
        $rangos = $_REQUEST['ocupacion'];
        $empleados = 0;
        foreach($horas as $hora){
            if($hora > 160 ){
                $horas_extra = $hora - 160;
                $hora = 160;
            }else{
                $horas_extra = 0;
            }
            
            if($rangos[$empleados] == "ing"){
                $sueldo_hora = ($sueldo_ing / 30) / 8;
                $sueldo_hora_extra = $sueldo_hora * 1.5;
            }else{
                $sueldo_hora = ($sueldo_tec / 30) / 8;
                $sueldo_hora_extra = $sueldo_hora * 1.5;
            }
            $empleados++;
            echo "<p> Empleado #: $empleados </p>";
            echo "Ocupacion: ", $rangos[$empleados-1], "<br>";
            echo "Horas ordinales: ", $hora, "<br>";
            echo "Horas extras: ", $horas_extra, "<br>";
            echo "Sueldo por horas ordinales: ", ($sueldo_hora * $hora), "<br>";
            echo "Sueldo por horas extras: ", ($sueldo_hora_extra*$horas_extra), "<br>";
            echo "Sueldo: ", ($sueldo_hora * $hora) + ($sueldo_hora_extra*$horas_extra), "<br>";
        }
    }
    ?>

</body>
</html>
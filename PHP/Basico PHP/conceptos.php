<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naranjas</title>
</head>
<body>
    <h1>Tiendas de Naranjas</h1>
    <?php //abre php
        if(empty($_REQUEST)){
    ?>
        <form action="" method="POST">
            <label> ¿Cuantos clientes?</label>
            <input type="text" name="num">
            <input type="submit" name="submit" value="Enviar">
        </form>
    <?php


    }elseif(isset($_REQUEST['num'])){
        
    ?>
        <form action="" method="POST"> 
        <?php
            $numero =$_REQUEST['num'];
            for($i=0;$i<$numero;$i++){
        ?>
                Ingrese la cantidad de kilos del cliente <?php echo $i;?>;
                <input type="number" name="cantidad[]" value="">
                <br>
        <?php
            }
        ?>
            <input type="submit" value="enviar">
            </form>
        <?php
    }else{
        $acum = 0;
        $precio = 1000;
        $cantidades = $_REQUEST['cantidad'];
        foreach($cantidades as $cantidad){
            echo "<p> Cantidad: $cantidad </p>";
            if ($cantidad>10){
                $total = $precio*$cantidad;
                echo "tiene descuento";
            }else{
                echo "no tiene descuento";
            }
            $acum = $acum+$total;
        }
        echo $acum;
        }
        ?>
</body>
</html>
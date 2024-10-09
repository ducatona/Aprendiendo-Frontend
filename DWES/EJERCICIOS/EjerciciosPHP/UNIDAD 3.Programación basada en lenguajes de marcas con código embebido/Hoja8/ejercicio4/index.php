<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php
    require_once("Producto.php");
    require_once("Alimentacion.php");
    require_once("Electronica.php");

    
    $productos = []; 

   
    $productos[] = new Alimentacion(1, 2.50, "Leche", 12, 2025);
    $productos[] = new Alimentacion(2, 1.20, "Pan", 11, 2025);

    $productos[] = new Electronica(3, 150.00, "Televisor", 24);
    $productos[] = new Electronica(4, 50.00, "Auriculares", 12);

    $totalAlimentacion = 0;
    $totalElectronica = 0;


    foreach ($productos as $producto) {

        echo $producto->mostrarInformacion() . "<br>";

    }
    if($producto instanceof Alimentacion){
        $totalAlimentacion += $producto->getPrecio();
    }

    if($producto instanceof Electronica){

        $totalElectronica += $producto->getPrecio();
    }

        

        if($totalAlimentacion > $totalElectronica){
            echo "<p>Te has gastado mas en Alimentación</p>";

        }else{
            echo "<p>Te has gastado mas en Electronica</p>";
        }



    


?>
</body>
</html>
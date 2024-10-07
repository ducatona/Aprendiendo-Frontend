<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php


    $dinero = 200;




    function desgloseDinero($dinero)
    {

        $coleccionBilletes = [500, 200, 100, 50, 20, 10, 5];
        $coleccionMonedas = [2, 1, 0.5, 0.2, 0.1];

        foreach ($coleccionBilletes as $billete) {
            $cantidad =  floor($dinero / $billete);
            if ($cantidad > 0) {
                echo  "Billetes de $billete: $cantidad \n";
            }

            $dinero -= $billete * $cantidad;
        }


        foreach ($coleccionMonedas as $moneda) {

            $cantidad = floor($dinero /  $moneda);

            if ($cantidad > 0) {
                echo "Monedas de $moneda: $cantidad \n";
            }

            $dinero -=  $moneda * $cantidad;
        }


        
    }


    ?>
</body>

</html>
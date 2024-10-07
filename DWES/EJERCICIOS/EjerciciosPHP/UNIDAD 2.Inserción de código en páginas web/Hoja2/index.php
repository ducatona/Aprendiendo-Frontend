<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoja02_PHP_02</title>
</head>

<body>


    <!-- ejercicio 1-->

    <?php
    echo "Este es el resultado correcto del primer ejercicio";
    ?>

    <br>

    <!-- ejercicio 2-->

    <?php

    echo "Segundo ejercicio: visualización
del contenido de variables";

    $nombre = "Adrián"; //asigna el valor de Adrian
    $edad = "21"; //asigna el valor de mi edad



    echo "Mi nombre es $nombre y mi edad es
$edad ";



    ?>

    <!-- ejercicio 3-->
    <?php

    $operador1 = "13";
    $operador2 = "4";
    $resultadoResta = $operador1 - $operador2;

    echo "La resta de $operador1 - $operador2 es: $resultadoResta\n";
    $resultadoSuma = $operador1 + $operador2;
    echo "La suma de $operador1 + $operador2 es: $resultadoSuma\n";
    $resultadoMultiplicacion = $operador1 * $operador2;
    echo "La multiplicación de $operador1 * $operador2 es: $resultadoMultiplicacion\n";
    $resultadoDivision = $operador1 / $operador2;
    echo "La división de $operador1 / $operador2 es: $resultadoDivision\n";
    $resultadoResto =  $operador1 % $operador2;
    echo "El resto de $operador1 % $operador2 es: $resultadoResto\n";


    ?>

    <!-- ejercicio 4-->


    <?php
    //Declaramos la variable
    $name = "Adrián";
    //mostramos el información de la variable
    echo "informacion de la variable 'name';";
    var_dump($name);


    //Mostramos el contenido de la vartiable
    echo "contenido de la variable: $name";

    //Le asignamos el valor nulo
    $name = null;
    echo "Después de asignarle un valor nulo: $name";
    ?>

    <?php
    $temporal = "Juan";
    echo "Valor de temporal: gettype($temporal)";
    $temporal = 3.14;
    echo "Valor de temporal: gettype($temporal)";
    $temporal = false;
    echo "Valor de temporal: gettype($temporal)";
    $temporal = 3;
    echo "Valor de temporal: gettype($temporal)";
    $temporal = null;
    echo "Valor de temporal: gettype($temporal)";
    ?>




    <?php

    $num1 = 10;
    $num2 = 20;
    $num3 = 40;


    $media = $num1 + $num2 + $num3 / 3;

    echo "La media de los tres numeros es: $media";

    ?>


    <?php

    $a = 5;
    $b = 10;

    // Mostrar los valores originales
    echo "Antes del intercambio:<br>";
    echo "a = $a<br>";
    echo "b = $b<br>";

    $temp = $a;  // Guardar el valor de 'a' en una variable temporal
    $a = $b;     // Asignar el valor de 'b' a 'a'
    $b = $temp;  // Asignar el valor de 'temp' (valor original de 'a') a 'b'

    // Mostrar los valores después del intercambio
    echo "Después del intercambio:<br>";
    echo "a = $a<br>";
    echo "b = $b<br>";


    ?>

    <?php
    // Cantidad a desglosar
    $cantidad = 67;

    // Desglosar en billetes y monedas
    $billetes10 = intdiv($cantidad, 10);
    $resto = $cantidad % 10;

    $billetes5 = intdiv($resto, 5);
    $monedas1 = $resto % 5;

    // Mostrar el resultado
    echo "Cantidad a desglosar: $cantidad €<br>";
    echo "Billetes de 10€: $billetes10<br>";
    echo "Billetes de 5€: $billetes5<br>";
    echo "Monedas de 1€: $monedas1<br>";
    ?>


</body>

</html>
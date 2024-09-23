<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoja02_PHP_01</title>
</head>

<body>

 <!-- Ejercicio1 -->

    <?php
    //variables
    $name = "Adrián Peña Carnero";
    $city = "Santander";
    //Mostramos por pantalla
    echo "Buenas internautas mi nombre es: <strong>$name</strong> y vivo en la ciudad llamada: $city";
    ?>

    <!-- Ejercicio2 -->

    <?php

    //variables
    $num1 = "1";
    $num2 = "9";
    $suma = $num1 + $num2;
    //Mostramos por pantalla
    echo "La suma de $num1 + $num2 es : $suma";
    ?>

   <!-- Ejercicio3 -->

    <?php
    $x = -1;
    $y = 9;
    $suma = $x + $y;
    print("El valor de x es <i>$x</i>");
    print("El valor de y es <i>$y</i><br/>");
    print("La suma es <b><i>$suma</i></b><br/>");
    ?>



    <!--
    7 errores del codigo corregido:

    1. Mal declaradas las variables en la suma.
    2. Falta unas comillas.
    3. Falta el ;
    4. La etiqueta <br /> esta fuera del contexto como tal.
    5. Falta un parentesis.
    6. Mal realizada la etiqueta del cierre <i>
        7. No hace falta el ; en la etiqueta de cierre de PHP.




-->







</body>

</html>
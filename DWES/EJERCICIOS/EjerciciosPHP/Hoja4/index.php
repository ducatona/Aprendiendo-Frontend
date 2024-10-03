<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoja03_PHP_01</title>
</head>

<body>

    <!-- Ejercicio 1 -->
    <?php
    // Establecer la zona horaria
    date_default_timezone_set('Europe/Madrid');

    // Obtener la fecha actual
    $fechaActual = date('l, d \d\e F \d\e Y');

    // Meses y dias de ingles a español
    $diasSemana = [
        'Sunday' => 'Domingo',
        'Monday' => 'Lunes',
        'Tuesday' => 'Martes',
        'Wednesday' => 'Miércoles',
        'Thursday' => 'Jueves',
        'Friday' => 'Viernes',
        'Saturday' => 'Sábado',
    ];

    $meses = [
        'January' => 'Enero',
        'February' => 'Febrero',
        'March' => 'Marzo',
        'April' => 'Abril',
        'May' => 'Mayo',
        'June' => 'Junio',
        'July' => 'Julio',
        'August' => 'Agosto',
        'September' => 'Septiembre',
        'October' => 'Octubre',
        'November' => 'Noviembre',
        'December' => 'Diciembre',
    ];

    // Transformación de nombres
    foreach ($diasSemana as $en => $es) {
        $fechaActual = str_replace($en, $es, $fechaActual);
    }

    foreach ($meses as $en => $es) {
        $fechaActual = str_replace($en, $es, $fechaActual);
    }

    // Mostrar la fecha
    echo "<h1>Fecha Actual</h1>";
    echo "<p>$fechaActual</p>";
    ?>

    <!--Ejercicio 2 -->
    <?php
    $suma = 0;
    for ($a = 10; $a <= 100; ++$a) {
        if ($a % 2 == 0) {
            $suma += $a;
        }
    }
    print("El resultado de la suma del 10 al 100 de los números pares naturales es: $suma");
    ?>

    <!-- Ejercicio 3 -->
    <?php
    function esCapicua($n)
    {
        $original = $n;
        $invertido = 0;

        while ($n > 0) {
            $invertido = $invertido * 10 + ($n % 10);
            $n = (int)($n / 10);
        }

        return ($original == $invertido) ? "El número $original es capicúa." : "El número $original no es capicúa.";
    }

    echo esCapicua(1221);
    ?>

    <!-- Ejercicio 4 -->
    <?php
    function esCapicua2($n)
    {
        $original = $n;
        $invertido = 0;

        while ($n > 0) {
            $invertido = $invertido * 10 + ($n % 10);
            $n = (int)($n / 10);
        }

        return $original == $invertido;
    }

    echo "<h2>Números capicúas entre 100 y 999:</h2>";
    for ($a = 100; $a < 1000; $a++) {
        if (esCapicua2($a)) {
            echo $a . " ";
        }
    }
    ?>

    <!-- Ejercicio 5 -->
    <?php
    $num = 123;
    $sumaD = 0; // Suma de los dígitos
    $productoD = 1; // Producto de los dígitos
    $tempNum = $num;

    while ($tempNum > 0) {
        $digito = $tempNum % 10;
        $sumaD += $digito;
        $productoD *= $digito;
        $tempNum = (int)($tempNum / 10);
    }

    echo "<p>La suma de los dígitos de $num es: $sumaD</p>";
    echo "<p>El producto de los dígitos de $num es: $productoD</p>";
    if ($sumaD == $productoD) {
        echo "<p>La suma y el producto de los dígitos son iguales.</p>";
    } else {
        echo "<p>La suma y el producto de los dígitos son diferentes.</p>";
    }
    ?>

    <!--Ejercicio 6 -->


    <?php


    function fibonacci($n)
    {


        $a = 0;
        $b = 1;


        echo "$a,$b";

        for ($i = 2; $i < $n; $i++) {

            $c = $a + $b;
            echo ", $c";

            $a = $b;
            $b = $c;
        }
    }
    fibonacci(13);






    ?>

    <!--Ejercicio 7 -->










    <!--Ejercico 10 -->

    <?php

    function esPrimo($n)
    {



        if ($n <= 1) {
            return "no es primo";
        }



        for ($i = 2; $i <= sqrt($n); $i++) {


            if ($n % $i == 0) {
                return "No es primo";
            }
        }

        return "Es primo";
    }
    echo esPrimo(4);


    ?>

    <!--Ejercicio 11 -->

    <?php

    for($i = 10;$i >=1;$i--){
        for($j = $i; $j >=1; $j-- ){
            echo $j . "";
        }
    echo "<br>";
    }
    ?>
<!--Ejercicio 12 -->

<?php

for($i = 3;$i<999;$i++){
    echo "$i" . ' '. esPrimo($i);


}

?>


</body>
</html>
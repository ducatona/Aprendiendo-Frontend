<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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

print ("El resultado de la suma del 10 al 100 de los numeros pares naturales es: $suma");

    ?>



<!--Ejercicio 3-->
 

<?php






function esCapicua($numero){
//convertimos el numero a cadena
 $cadena = strval($numero);
//cadena Invertida
 $cadenaInvertida =   strrev($cadena);

 //comparamos
 if($cadena == $cadenaInvertida){
   return true;
 }else{
    return false;
 }
}
$numeroPrueba = 281128;

if(esCapicua($numeroPrueba)){
    print"El numero $numeroPrueba es capicua";

}else{
    print"El numero $numeroPrueba no es capicua";
}


?>



</body>

</html>
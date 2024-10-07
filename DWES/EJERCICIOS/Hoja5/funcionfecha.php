¿<?php

function fecha()
{
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
}

?>
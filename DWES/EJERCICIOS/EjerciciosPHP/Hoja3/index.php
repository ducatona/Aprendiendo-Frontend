<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoja02_PHP_0</title>
</head>
<body>
    


<?php
echo date("d-m-y");
?>

<?php
//establecemos la fecha de hoy
$fechaHoy = new  DateTime();
//la modificamos 7 dias
$fechaHoy->modify('-7 days');
//imprimimos por pantalla el resultado
echo"la fecha de hoy modificada es: ".$fechaHoy->format('d-m-y');
?>


<?php

$dia = "09";
$mes = "01";
$anio = "2003";


echo checkdate($dia,$mes,$anio)
? "la fecha $dia-$mes-$anio es valida."
: "la fecha $dia-$mes-$anio no ses valida.";

?>


<?php
$fecha1 = new DateTime('23-09-2024');
$fecha2 = new DateTime('26-09-2024');

$diff = $fecha1->diff($fecha2);


echo $diff->days. 'dias';






?>


<?php
// Establecer la fecha actual
$fecha = new DateTime();

// Sumar 5 horas (puedes cambiar el número de horas según necesites)
$fecha->modify('+5 hours');

// Mostrar la fecha y hora resultante
echo "La nueva fecha y hora es: " . $fecha->format('d-m-Y H:i:s');
?>


</body>
</html>
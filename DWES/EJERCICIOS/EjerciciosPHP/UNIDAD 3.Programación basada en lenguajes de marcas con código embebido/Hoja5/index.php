<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Ejercicicio 1 -->

    <?php

    require_once './funcionfecha.php';

    fecha();


    ?>


    <!--Ejercicio2 -->
    <?php

    function ($n1, $n2) {

        $sum = $n1 + $n2;

        return $sum;
    }



    ?>

    <!-- Ejercicio3 -->


    <?php

    function ($frase) {
        echo $frase;
    }




    ?>



    <!-- Ejercicio4 -->

    <?php




    function ineteresSimple($capital, $redito, $tiempo)
    {


        $interes = $capital * $redito * $tiempo;
        $interesSimple = $capital + $interes;
    }
    function ineteresCompuesto($capital, $redito, $tiempo)
    {


        $interes = $capital * pow(($redito + 1), $tiempo);
        $interesSimple = $capital - $interes;
    }




    ?>

    <!--Ejercicio 5-->




    <?php



    function esCapicua($n)
    {
        $original = $n;
        $reverso = 0;

        while ($n > 0) {

            $ultimoDigito = $n / 10;
            $reverso = ($reverso * 10) + $ultimoDigito;
            $n = intval($n / 10);
        }

        return $original == $reverso;
    }


    function redondearNumero($n)
    {
        return round($n);
    }


    function  contarDigitos($n)
    {

        return strlen(strval($n)); //Cuenta los caracteres que tiene el numero en int y los devuelve en cadena para verlo

    }

    ?>





<!-- Ejercicio 6 -->


    <?php


    function validarFecha($fecha, $formato = 'd-m-Y')
    {
        $d = DateTime::createFromFormat($formato, $fecha);

        return $d && $d->format($formato) === $fecha;
    }


    ?>

    




<!-- Ejercicio 7 -->


<?php
// Función que valida el formato de una cuenta corriente simple
function validarCuentaCorriente($cuenta) {
    // Comprobar que la cuenta tiene exactamente 20 caracteres numéricos
    if (!ctype_digit($cuenta) || strlen($cuenta) !== 20) {
        return "La cuenta no tiene el formato correcto (debe tener 20 dígitos).";
    }
    
    // Separar los diferentes componentes de la cuenta
    $entidad = substr($cuenta, 0, 4);    // 4 primeros dígitos: entidad
    $oficina = substr($cuenta, 4, 4);    // 4 dígitos siguientes: oficina
    $digitosControl = substr($cuenta, 8, 2);  // 2 dígitos siguientes: dígitos de control
    $numeroCuenta = substr($cuenta, 10, 10);  // Los últimos 10 dígitos: número de cuenta

    // Mostrar cada parte de la cuenta
    echo "Entidad: $entidad\n";
    echo "Oficina: $oficina\n";
    echo "Dígitos de control: $digitosControl\n";
    echo "Número de cuenta: $numeroCuenta\n";

    // Si llegamos hasta aquí, significa que la cuenta tiene el formato correcto.
    return "El formato de la cuenta es correcto.";
}

// Ejemplo de uso
$cuenta = "12345678901234567890";  // Ejemplo de cuenta (20 dígitos)
echo validarCuentaCorriente($cuenta);
?>





<!--Ejercicio 8 -->


<?php

$frase = "Comer algas es realmente sano";
$posicionAlgas = strpos($frase,"algas");

$fraseRemplazada = str_replace("realmente", "muy",  $frase);

$existeAnacardo = strpos($frase,"Anacardo") !== false ? "si":"no";

$invierteOrden = strrev($frase);

?>





</body>

</html>
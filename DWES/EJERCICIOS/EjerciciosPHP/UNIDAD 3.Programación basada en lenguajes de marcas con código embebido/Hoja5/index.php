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







    <?php


    function validarFecha($fecha, $formato = 'd-m-Y')
    {
        $d = DateTime::createFromFormat($formato, $fecha);

        return $d && $d->format($formato) === $fecha;
    }


    ?>





</body>

</html>
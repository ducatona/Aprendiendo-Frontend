<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>

    <?php


    function calcularLetraDni($numero)
    {



        if (is_numeric($numero) || strlen($numero) !== 8) {
            echo ("Introduce un numero de dni valido");
        }

        $letras = [
            'T',
            'R',
            'W',
            'A',
            'G',
            'M',
            'Y',
            'F',
            'P',
            'D',
            'X',
            'B',
            'N',
            'J',
            'Z',
            'S',
            'Q',
            'V',
            'H',
            'L',
            'C',
            'K',
            'L',
            'L'
        ];


        $resto = $numero % 23;


        $letra = $letras[$resto];

        echo ("La letra que le corresponde al dni: $numero  es: $letra");
    }



    ?>


</body>

</html>
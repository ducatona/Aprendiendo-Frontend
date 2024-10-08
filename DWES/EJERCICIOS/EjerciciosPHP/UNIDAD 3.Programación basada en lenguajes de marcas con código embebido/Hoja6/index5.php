<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    $articulos = [

        [

            'codigo' =>  'A001',

            'descripcion' =>  'Articulo 1',

            'existencias'  =>   10

        ],
        [

            'codigo' =>  'A002',

            'descripcion' =>  'Articulo 2',

            'existencias'  =>   20

        ],

        [

            'codigo' =>  'A003',

            'descripcion' =>  'Articulo 3',

            'existencias'  =>   30

        ]


    ];

    function mayorNumeroExistencias($articulos)
    {
        $mye = 0;
        $nombreMayor = '';
        foreach ($articulos as $articulo) {



            if ($articulo['existencias'] > $mye) {

                $mye = $articulo['existencias'];
                $nombreMayor = $articulo['descripcion'];
            }
        }


        return $nombreMayor;
    }


    function sumaExistencias($articulos)
    {



            $totalExistencias = 0;

            foreach ($articulos as $articulo) {

               $totalExistencias += $articulo['existencias'];
            }
            return $totalExistencias;
        }
  
    


    function mostrarArray($articulos)
    {

        foreach ($articulos as $articulo) {

            echo ("$articulo[existencias]");
            echo ("$articulo[descripcion]");
            echo ("$articulo[codigo]");
        }
    }


    ?>






</body>

</html>
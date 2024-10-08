<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

function cargar(){

    $coleccion = [];

    for ($i=0; $i < 21 ; $i++) { 
        
        $coleccion[] = rand(1,100);


    }

    return $coleccion;

}

function imprimirArray($coleccion){

     $resultado = print_r($coleccion);
    echo($resultado);

}

imprimirArray(cargar());

function ordenarArray($coleccion){

sort($coleccion);
}


function mezclarArrays($coleccion1,$coleccion2){

    return array_merge($coleccion1,$coleccion2);

}


?>


    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

$verbos = ['vivir','desayunar','hablar','comer'];




$verbosAleatorios = rand(0,count($verbos)-1);

$verbo =  $verbos[$verbosAleatorios];




$raiz = substr($verbo,0,-2);
$terminacion = substr($verbo,-2);


$pronombres = ['yo','tú','él/ella','nosottos','vosotros', 'ellos'];

if($terminacion=='ar'){
    $conjuncion =  ['o','as','a','amos','ais','an'];

}else if($terminacion='er'){
    $conjuncion =  ['o','es','e','emos','eis','en'];

}else if($terminacion = 'ir'){
    $conjuncion =  ['o','es','e','imos','is','en'];
}



for ($i=0; $i < count($pronombres); $i++) { 

    echo $pronombres[$i]. " ".$raiz . $conjuncion[$i] ;

}


?>


</body>
</html>
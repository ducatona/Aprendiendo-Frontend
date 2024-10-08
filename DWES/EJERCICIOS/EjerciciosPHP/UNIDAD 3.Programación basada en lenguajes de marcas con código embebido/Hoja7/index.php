<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php

require_once('circulo.php');


$circulo1 = new Circulo(5);

$circulo2 = new Circulo(10);



// echo $circulo1->radio;
$circulo2->radio = 20;

echo $circulo2->radio;




?>
</body>
</html>
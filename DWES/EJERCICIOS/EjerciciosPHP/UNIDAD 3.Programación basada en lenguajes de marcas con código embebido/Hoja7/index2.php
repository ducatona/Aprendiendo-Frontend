<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, dinitial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

require_once('coche.php');



$vehiculo1  = new Coche('72208910L', 130);       

$vehiculo1->mostrarInformacion();

$vehiculo1->disminuir(50);
$vehiculo1->mostrarInformacion();


?>
</body>
</html>
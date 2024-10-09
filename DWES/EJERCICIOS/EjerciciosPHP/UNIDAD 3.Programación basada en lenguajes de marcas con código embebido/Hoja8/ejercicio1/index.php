<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    include_once("Empleado.php");
    include_once("Encargado.php");

$empleadoNormal = new Empleado(1400,'Adrian');

$empleadoVip = new Encargado(1400,'Jhonny');



echo $empleadoNormal->getSueldo(1400);
echo $empleadoVip->getSueldo(1400);



?>
</body>
</html>
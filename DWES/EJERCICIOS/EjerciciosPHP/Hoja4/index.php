<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php


$fecha = new DateTime('2022-09-22');

$formato = new IntlDateFormatter('es_Es', IntlDateFormatter::FULL,IntlDateFormatter::NONE);


$formato->setPattern('EEEE, d \'de\', MMMM ,\'de\' y');

echo ucfirst($formato->format($fecha));


?>
</body>
</html>
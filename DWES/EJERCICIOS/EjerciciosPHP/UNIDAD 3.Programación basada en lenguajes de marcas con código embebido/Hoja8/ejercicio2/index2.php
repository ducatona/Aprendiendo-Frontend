<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

include_once("Cuenta.php");
include_once("CuentaAhorro.php");
include_once("CuentaCorriente.php");

$cliente1 = new CuentaAhorro(123456, "Adrián Peña Carnero", 2000, 50, 2); // Cambiar a CuentaAhorro
$cliente1->mostrarInformacion();
$cliente1->aplicarIntereses();
$cliente1->mostrarInformacion(); // Mostrar con los intereses aplicados

echo "<hr>";

$cliente2 = new CuentaCorriente(654321, "María López", 1500, 15); // Cambiar a CuentaCorriente
$cliente2->mostrar();
$cliente2->retirarSaldo(100);
$cliente2->mostrar(); // Mostrar después del retiro











    ?>
</body>

</html>
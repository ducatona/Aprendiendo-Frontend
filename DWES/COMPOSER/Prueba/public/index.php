<?php

require './../vendor/autoload.php';

use App\Controllers\HolaMundoController;

$holaMundoController = new HolaMundoController();
$holaMundoController->index();

echo holaMundo();
?>


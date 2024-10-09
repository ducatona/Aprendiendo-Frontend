<?php
// Incluir las clases necesarias

require_once 'Volador.php'; 
require_once 'ElementoVolador.php';
require_once 'Avion.php';
require_once 'Helicoptero.php';
require_once 'Aeropuerto.php';

// Tu código principal aquí

// Crear un objeto de tipo Aeropuerto
$aeropuerto = new Aeropuerto();

// Crear tres aviones
$avion1 = new Avion('Avión1', 2, 2, 'Compañía A', 10000, new DateTime());
$avion2 = new Avion('Avión2', 2, 2, 'Compañía B', 12000, new DateTime());
$avion3 = new Avion('Avión3', 2, 2, 'Compañía A', 15000, new DateTime());

// Crear tres helicópteros
$helicoptero1 = new Helicoptero('Helicóptero1', 2, 1, 'Propietario1', 4);
$helicoptero2 = new Helicoptero('Helicóptero2', 2, 1, 'Propietario2', 5);
$helicoptero3 = new Helicoptero('Helicóptero3', 2, 1, 'Propietario1', 4);

// Insertar los objetos creados en el aeropuerto
$aeropuerto->insertarElemento($avion1);
$aeropuerto->insertarElemento($avion2);
$aeropuerto->insertarElemento($avion3);
$aeropuerto->insertarElemento($helicoptero1);
$aeropuerto->insertarElemento($helicoptero2);
$aeropuerto->insertarElemento($helicoptero3);

// Probar el método buscar
echo "Buscando Avión1:\n";
$aeropuerto->buscarElemento('Avión1');

echo "\nBuscando Avión Inexistente:\n";
$aeropuerto->buscarElemento('AviónInexistente');

// Probar el método listarCompania
echo "\nListando aviones de Compañía A:\n";
$aeropuerto->listarCompania('Compañía A');

echo "\nListando aviones de Compañía Inexistente:\n";
$aeropuerto->listarCompania('Compañía Inexistente');

// Probar el método rotores
echo "\nListando helicópteros con 4 rotores:\n";
$aeropuerto->rotores(4);

echo "\nListando helicópteros con 6 rotores:\n";
$aeropuerto->rotores(6);

// Realizar el despegue de un avión
echo "\nDespegando Avión1:\n";
$aeropuerto->despegar('Avión1', 5000, 200);

// Realizar el despegue de un helicóptero
echo "\nDespegando Helicóptero1:\n";
$aeropuerto->despegar('Helicóptero1', 80, 100);

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once("Medico.php");
    require_once("Familia.php");
    require_once("Urgencia.php");
    
    $medicos = []; 
    $medicos[] = new Familia("Dr. Pérez", 45, "mañana", 10);
    $medicos[] = new Familia("Dr. López", 55, "tarde", 5);
    $medicos[] = new Familia("Dr. Gómez", 65, "tarde", 20);
    
    $medicos[] = new Urgencia("Dr. Ruiz", 70, "tarde", 15, "Cardiología");
    $medicos[] = new Urgencia("Dr. Torres", 40, "mañana", 12, "Traumatología");
    $medicos[] = new Urgencia("Dr. Martínez", 62, "tarde", 8, "Pediatría"); // Añadido punto y coma

    // Mostrar todos los médicos
    foreach ($medicos as $medico) {
        echo $medico->mostrarInformacion();
    }

    // Contar médicos de urgencia en turno de tarde con más de 60 años
    $medicosMayores60 = 0;

    foreach ($medicos as $medico) {
        if ($medico instanceof Urgencia && $medico->esturnoTarde() === "tarde" && $medico->getEdad() > 60) {
            $medicosMayores60++;
        }
    }
    echo "<p>Número de médicos de urgencia en turno de tarde con más de 60 años: {$medicosMayores60}</p>";

    // Definir el mínimo de pacientes para la verificación
    $min_pacientes = 10; // Asignar un valor

    foreach ($medicos as $medico) {
        if ($medico instanceof Familia && $medico->pacientesSuficientes($min_pacientes)) {
            echo $medico->mostrarInformacion();
        }
    }
    ?>
</body>
</html>

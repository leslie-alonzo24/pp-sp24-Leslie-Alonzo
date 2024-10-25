<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
</head>
<body>
    



<?php

include ('header.php');


// Información sobre el concepto de Framework
$concepto_framework = [
    'Definición' => 'Un framework es una estructura predefinida que proporciona herramientas y bibliotecas para desarrollar aplicaciones de software de manera más eficiente. Sirve como base para construir aplicaciones, reduciendo la cantidad de código necesario y promoviendo mejores prácticas de desarrollo.',
    'Objetivo' => 'Facilitar el desarrollo proporcionando un conjunto de funciones reutilizables, módulos, y reglas que ayudan a estructurar el código de una manera organizada y coherente.',
];

// Ventajas y Desventajas de usar Frameworks
$ventajas_desventajas_framework = [
    'Ventajas' => '<ul>
                    <li>Acelera el desarrollo al proporcionar funciones predefinidas.</li>
                    <li>Fomenta buenas prácticas y estructuras de código limpias.</li>
                    <li>Comunidad activa y soporte extenso.</li>
                    <li>Facilita la escalabilidad y el mantenimiento del código.</li>
                   </ul>',
    'Desventajas' => '<ul>
                      <li>Puede agregar complejidad innecesaria a proyectos pequeños.</li>
                      <li>Requiere tiempo para aprender a usarlos de manera eficiente.</li>
                      <li>Dependencia del framework, lo que podría limitar la flexibilidad en algunos casos.</li>
                     </ul>',
];

// Frameworks Frontend más usados
$frameworks_frontend = [
    'React' => 'Librería JavaScript popular para construir interfaces de usuario dinámicas.',
    'Angular' => 'Framework JavaScript desarrollado por Google, enfocado en el desarrollo de aplicaciones web de una sola página (SPA).',
    'Vue.js' => 'Framework JavaScript progresivo que se puede integrar fácilmente en proyectos existentes.',
    'Svelte' => 'Framework que compila sus componentes en código eficiente y sin dependencia de tiempo de ejecución.',
];

// Frameworks Backend más utilizados
$frameworks_backend = [
    'Laravel' => 'Framework PHP que facilita el desarrollo de aplicaciones web robustas con sintaxis expresiva y elegante.',
    'Django' => 'Framework Python que permite un desarrollo rápido, seguro y escalable.',
    'Express.js' => 'Framework minimalista para Node.js que facilita la creación de aplicaciones y APIs web.',
    'Ruby on Rails' => 'Framework para el lenguaje Ruby que sigue el patrón MVC y facilita el desarrollo rápido de aplicaciones.',
];

// Función para mostrar una tabla (grid)
function mostrarGrid($titulo, $datos) {
    echo "<h2>$titulo</h2>";
    echo "<table border='1' style='width:100%; text-align:left;'>";
    
    foreach ($datos as $clave => $valor) {
        echo "<tr>";
        echo "<th style='background-color: #f2f2f2; padding: 8px;'>$clave</th>";
        echo "<td style='padding: 8px;'>$valor</td>";
        echo "</tr>";
    }

    echo "</table><br>";
}

// Mostrar concepto de Framework
mostrarGrid('Concepto de Framework', $concepto_framework);

// Mostrar ventajas y desventajas de usar Frameworks
mostrarGrid('Ventajas y Desventajas de usar Frameworks', $ventajas_desventajas_framework);

// Mostrar frameworks frontend más usados
mostrarGrid('Frameworks Frontend más Usados', $frameworks_frontend);

// Mostrar frameworks backend más utilizados
mostrarGrid('Frameworks Backend más Utilizados', $frameworks_backend);





?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
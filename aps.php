
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

// Información sobre Frontend
$frontend_info = [
    'Definición' => 'El Frontend es la parte de una aplicación web con la que interactúan los usuarios. Es todo lo que ves y con lo que interactúas directamente en un navegador.',
    'Objetivo' => 'Crear interfaces de usuario interactivas y atractivas que mejoren la experiencia del usuario.',
];

// Tecnologías Frontend
$tecnologias_frontend = [
    'HTML' => 'Lenguaje de marcado utilizado para estructurar el contenido de una página web.',
    'CSS' => 'Lenguaje de estilos utilizado para diseñar y darle formato al contenido HTML.',
    'JavaScript' => 'Lenguaje de programación que permite agregar interactividad a las páginas web.',
];

// Información sobre Backend
$backend_info = [
    'Definición' => 'El Backend es la parte del servidor de una aplicación web que maneja la lógica de negocio, el almacenamiento de datos, y la comunicación con la base de datos y otros servicios.',
    'Objetivo' => 'Gestionar y procesar datos en el servidor para proporcionar una funcionalidad dinámica y eficiente en la aplicación.',
];

// Tecnologías Backend
$tecnologias_backend = [
    'Base de datos' => 'MySQL, PostgreSQL, MongoDB, entre otras. Se encargan de almacenar y gestionar la información.',
    'Servidor web' => 'Apache, Nginx. Son los encargados de servir el contenido web y manejar las solicitudes HTTP.',
    'Lenguaje de programación' => 'PHP, Python, Node.js, Java. Se utilizan para escribir la lógica del servidor.',
];

// Información sobre FullStack
$fullstack_info = [
    'Definición' => 'Un desarrollador FullStack es aquel que tiene conocimientos tanto de Frontend como de Backend. Puede manejar tanto la parte visual como la lógica del servidor de una aplicación web.',
    'Objetivo' => 'Ser capaz de desarrollar una aplicación web completa, abarcando desde la interfaz de usuario hasta la gestión de datos en el servidor.',
];

// Función para mostrar una tabla (grid)
function mostrarGrid($titulo, $datos) {
    echo "<h2 class='color-text' style= 'color: RGB(249,83,0) ;'>$titulo</h2>";
    echo "<table border='1' style='width:100%; text-align:left;'>";
    
    foreach ($datos as $clave => $valor) {
        echo "<tr>";
        echo "<th style='background-color: #f2f2f2; padding: 8px;'>$clave</th>";
        echo "<td style='padding: 8px;'>$valor</td>";
        echo "</tr>";
    }

    echo "</table><br>";
}

// Mostrar información sobre Frontend
mostrarGrid('Frontend', $frontend_info);

// Mostrar tecnologías Frontend
mostrarGrid('Tecnologías Frontend', $tecnologias_frontend);

// Mostrar información sobre Backend
mostrarGrid('Backend', $backend_info);

// Mostrar tecnologías Backend
mostrarGrid('Tecnologías Backend', $tecnologias_backend);

// Mostrar información sobre FullStack
mostrarGrid('FullStack', $fullstack_info);

?>





</body>
</html>
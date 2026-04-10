<?php

//funcion sin parametros
function mostrarTituloPag(){
    echo "<h1>Sistema de procesamiento de estudiante</h1>";
}

//funcion con parametros
function CalcularPromedio($notas){
    $suma = 0;
    $cantidad = 0;
    foreach($notas as $nota){
        $suma += $nota;
        $cantidad++;
    }
    return $suma / $cantidad; 
}

//2da funcion con parametros
function AumentoEdad($Edad, $anios){
    return $Edad + $anios;
}

//ingreso datos
$Nombre = "jose pocoyo luciano gutierrez ";
$Edad = 15;
$notas = [65,89,65,72];
$imagen = "../laboratoriovictoraquino/lab/estudiante.webp";

//verificacion de contenido
$NombreExistente = isset($Nombre);

//procesamiento de datos
$ContenidoSeguro = htmlspecialchars($Nombre);
$ContenidoUrl = urlencode($Nombre);
$PromedioNotas = CalcularPromedio($notas);
$EdadFutura = AumentoEdad($Edad, 5);

//modificar datos
unset($notas[2]);

//organizar datos
$estudiante = [ //struct
    "Nombre" => $ContenidoSeguro,
    "Edad" => $Edad,
    "Promedio" => $PromedioNotas,
    "EdadFutura" => $EdadFutura,
    "Imagen" => $imagen
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>examen</title>
    <link rel="stylesheet" href="lab.css">
</head>
<body>
    <div class = "container">
        <div>
        </div>
        <hr>
        <div>
            <h4>Verificación de Contenido</h4>
            <?php
                echo $NombreExistente ? "<p>El nombre del estudiante existe.</p>" : "<p>El nombre del estudiante no existe.</p>";
            ?>
        </div>
        <hr>
        <div>
            <h4>Procesamiento de Datos</h4>
            <p><strong>Nombre con caracteres especiales convertidos:</strong> <?php echo $ContenidoSeguro; ?></p>
            <p><strong>Nombre en formato URL:</strong> <?php echo $ContenidoUrl; ?></p>
            <p><strong>Promedio de Notas:</strong> <?php echo number_format($PromedioNotas, 2); ?></p>
            <p><strong>Edad en 5 años:</strong> <?php echo $EdadFutura; ?></p>
        </div>
        <hr>
        <div>
<h4>Notas del Estudiante</h4>
        <ul>
            <?php
                foreach($notas as $nota){
                    echo "<li>Nota " . $nota . "</li>";
                }
            ?>
        </ul>
        <hr>

        <div>
            <h4>Datos finales a mostrar</h4>
            <ul>
                <?php
                    foreach($estudiante as $clave => $valor){
                        echo "<li>" . $clave . ": " . $valor . "</li>";
                    }
                ?>
            </ul>
        </div>
    </div> </body>
</html>
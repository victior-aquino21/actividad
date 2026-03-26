<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones PHP</title>
    <link rel="stylesheet" href="actividad.css">
</head>
<body>
    <div class="container">
        <h1>Demostración de Funciones en PHP</h1>

        <?php
        function saludoSimple() {
            return "¡Hola! Esta es una función básica.";
        }

        function fechaActual() {
            return "Hoy es: " . date("d/m/Y");
        }

        function versionPHP() {
            return "Estás usando PHP versión: " . phpversion();
        }

        function saludarPersona($nombre) {
            return "Hola, " . $nombre . ". ¡Bienvenido al sistema!";
        }

        function calcularSuma($a, $b) {
            $resultado = $a + $b;
            return "La suma de $a + $b es igual a: " . $resultado;
        }

        function repetidorTexto($texto, $veces) {
            return "El texto '" . $texto . "' repetido " . $veces . " veces es: " . str_repeat($texto . " ", $veces);
        }
        ?>

        <section>
            <h2>Funciones Básicas (Listas Desordenadas)</h2>
            <ul>
                <li>
                    <strong>Función Saludo:</strong> <?php echo saludoSimple(); ?>
                </li>
                <li>
                    <strong>Función Fecha:</strong> <?php echo fechaActual(); ?>
                </li>
                <li>
                    <strong>Función PHP:</strong> <?php echo versionPHP(); ?>
                </li>
            </ul>
        </section>

        <hr>

        <section>
            <h2>Funciones con Parámetros (Listas Ordenadas)</h2>
            <ol>
                <li>
                    <strong>Personalizada:</strong> <?php echo saludarPersona("Usuario"); ?>
                </li>
                <li>
                    <strong>Matemática:</strong> <?php echo calcularSuma(15, 25); ?>
                </li>
                <li>
                    <strong>Manipulación de Texto:</strong> <?php echo repetidorTexto("PHP", 3); ?>
                </li>
            </ol>
        </section>
    </div>

</body>

<footer>
 <p> victor aquino 5to compu</p>
</footer>
</html>
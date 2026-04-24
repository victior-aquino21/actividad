<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido Pollo Campero</title>
    <link rel="stylesheet" href="formulario.css">
</head>
<body>
    <div class="container">
        <header>
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/56/PolloCampero_Logo.png" alt="Logo Campero" class="logo">
            <h1>¡Haz tu Pedido!</h1>
        </header>

        <form action="" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre Completo:</label>
                <input type="text" id="nombre" name="nombre" required placeholder="Tu nombre aquí">
            </div>

            <div class="form-group">
                <label for="menu">Selecciona tu Menú:</label>
                <select id="menu" name="menu">
                    <option value="Super Campero">Super Campero (2 piezas)</option>
                    <option value="Banquete Familiar">Banquete Familiar (10 piezas)</option>
                    <option value="Camperitos">Camperitos (12 piezas)</option>
                    <option value="Sándwich de Pollo">Sándwich de Pollo</option>
                </select>
            </div>

            <div class="form-group">
                <label>Tipo de Pollo:</label>
                <div class="radio-group">
                    <input type="radio" id="tradicional" name="tipo" value="Tradicional" checked>
                    <label for="tradicional">Tradicional</label>
                    <input type="radio" id="extra" name="tipo" value="Extra Crujiente">
                    <label for="extra">Extra Crujiente</label>
                </div>
            </div>

            <div class="form-group">
                <label for="monto">Monto a cobrar:</label>
                <input type="number" id="monto" name="monto" step="0.01" required placeholder="0.00">
            </div>

            <div class="form-group">
                <label for="notas">Notas Especiales:</label>
                <textarea id="notas" name="notas" rows="3" placeholder="Ej. Sin ensalada, mucha salsa..."></textarea>
            </div>

            <button type="submit" name="enviar" class="btn-enviar">¡Enviar a Cocina!</button>
        </form>

        <?php
        if (isset($_POST['enviar'])) {
            $nombre = $_POST['nombre'];
            $menu = $_POST['menu'];
            $tipo = $_POST['tipo'];
            $montoOriginal = floatval($_POST['monto']);
            $descuento = 0;
            $porcentaje = 0;

            // Lógica de validación de descuentos
            if ($montoOriginal > 300 && $montoOriginal < 500) {
                $porcentaje = 42;
            } elseif ($montoOriginal > 80 && $montoOriginal < 200) {
                $porcentaje = 25;
            } elseif ($montoOriginal > 30) {
                $porcentaje = 10;
            }

            if ($porcentaje > 0) {
                $descuento = $montoOriginal * ($porcentaje / 100);
            }
            $montoFinal = $montoOriginal - $descuento;

            echo "<div class='ticket'>";
            echo "<h3>✅ Pedido Recibido</h3>";
            echo "<p><strong>Cliente:</strong> $nombre</p>";
            echo "<p><strong>Pedido:</strong> $menu ($tipo)</p>";
            echo "<hr>";
            echo "<p><strong>Monto Original:</strong> Q" . number_format($montoOriginal, 2) . "</p>";
            
            if ($porcentaje > 0) {
                echo "<p style='color: green;'><strong>Descuento Aplicado ($porcentaje%):</strong> -Q" . number_format($descuento, 2) . "</p>";
            } else {
                echo "<p><em>No aplica descuento.</em></p>";
            }

            echo "<h4><strong>Total a Pagar: Q" . number_format($montoFinal, 2) . "</strong></h4>";
            echo "<p><em>¡En un momento estará listo!</em></p>";
            echo "</div>";
        }
        ?>
        <script src="script.js"></script> 
    </div>
</body>
</html>
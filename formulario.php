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

            echo "<div class='ticket'>";
            echo "<h3>✅ Pedido Recibido</h3>";
            echo "<p><strong>Cliente:</strong> $nombre</p>";
            echo "<p><strong>Pedido:</strong> $menu ($tipo)</p>";
            echo "<p><em>¡En un momento estará listo!</em></p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
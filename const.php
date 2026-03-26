<!DOCTYPE html>
<html lang="es">
    <head>
      ce  <title>constantes magicas</title>
</head>
<body>
    <h1>constantes magicas </h1>
<p>Las constantes mágicas en PHP son constantes predefinidas que cambian su valor según el contexto donde se utilicen (línea, archivo, clase). Empiezan y terminan con doble guion bajo (__) y no son realmente constantes en sentido estricto, sino sensibles al contexto, útiles para depuración, logging y rutas. </p>
    
<h2>Constantes Mágicas Principales:
</h2>

<p>
__LINE__: El número de línea actual en el archivo.

__FILE__: La ruta completa y el nombre del archivo actual. Si se usa dentro de un include, devuelve el nombre del archivo incluido.

__DIR__: El directorio del archivo. Es equivalente a dirname(__FILE__).

__FUNCTION__: El nombre de la función. Devuelve {closure} para funciones anónimas.

__CLASS__: El nombre de la clase, incluyendo el espacio de nombres (namespace).

__TRAIT__: El nombre del trait, incluyendo el espacio de nombres.

__METHOD__: El nombre del método de la clase.

__NAMESPACE__: El nombre del espacio de nombres actual.

ClassName::class: Devuelve el nombre completo (fQCN) de la clase, ideal para usar con namespace. </p>

<h2>ejemplos practicos</h2>

<?php
echo "Estás en la línea: " . __LINE__ . "\n"; 

echo "La ruta de este archivo es: " . __FILE__ . "\n";

echo "El directorio actual es: " . __DIR__ . "\n";
?>

<?php
function miTest() {
    echo "Ejecutando la función: " . __FUNCTION__ . "\n";
}
miTest();

class Usuario {
    public function saludar() {
        echo "Clase: " . __CLASS__ . "\n";
        echo "Método: " . __METHOD__ . "\n";
    }
}

$obj = new Usuario();
$obj->saludar();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>clase php</title>
</head>
<body>
    <h1>bienvenidos a mi sitio dinamico </h1>

    <p> Hoy es: <?php echo date("d/m/y"); ?></p>

    <?php
    echo "este texto fue generado por php";
    ?>
</body>
</html>

<?php 
include 'includes/header.php';
include 'conexion.php'; // Tu archivo de conexión a Workbench

// Capturamos el ID del peluche que el usuario quiere ver desde la URL
$id_producto = isset($_GET['id']) ? intval($_GET['id']) : 1;

// Buscamos los datos de ese peluche en la base de datos
$stmt = $pdo->prepare("SELECT * FROM productos WHERE id = ?");
$stmt->execute([$id_producto]);
$producto = $stmt->fetch();

if (!$producto) {
    echo "<h2>El peluche no existe</h2>";
    include 'includes/footer.php';
    exit;
}
?>

<div class="producto">
    <!-- Los datos se imprimen directo de la Base de Datos automáticamente -->
    <img src="img/<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">

    <h1><?php echo $producto['nombre']; ?></h1>

    <p class="descripcion">
        <?php echo $producto['descripcion']; ?>
    </p>

    <p class="precio"><?php echo $producto['precio']; ?></p>

    <button onclick="comprar()">Comprar</button>
</div>

<script src="Js/lotso.js"></script>

<?php 
include 'includes/footer.php'; 
?>
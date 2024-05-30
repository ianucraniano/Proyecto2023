<?php 
require_once "conexion.php";

$id = $_GET['idPiezas'];

$sql = "SELECT piezas.*, donante.nombre, donante.apellido 
        FROM piezas 
        JOIN donante ON piezas.Donante_idDonante1 = donante.idDonante 
        WHERE piezas.idPiezas = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
?>

<?php if ($row) { ?>
    <p><strong>Número de Inventario:</strong> <?php echo $row['numeroInventario']; ?></p>
    <p><strong>Especie:</strong> <?php echo $row['especie']; ?></p>
    <p><strong>Estado de Conservación:</strong> <?php echo $row['estadoConservacion']; ?></p>
    <p><strong>Fecha de Ingreso:</strong> <?php echo $row['fechaIngreso']; ?></p>
    <p><strong>Clasificación:</strong> <?php echo $row['clasificacion']; ?></p>
    <p><strong>Donante:</strong> <?php echo $row['nombre'] . ' ' . $row['apellido']; ?></p>
    <p><strong>Observación:</strong> <?php echo $row['observacion']; ?></p>
<?php } else { ?>
    <p>Detalles no encontrados.</p>
<?php } ?>



?>
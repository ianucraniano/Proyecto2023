<?php 
require_once "conexion.php";

// Verificar si se ha pasado el parámetro 'id'
if (isset($_GET['idPiezas'])) {
    $id = $_GET['idPiezas'];

    // Consulta para obtener los detalles de la pieza
    $sql = "SELECT piezas.*, donante.nombre, donante.apellido 
            FROM piezas 
            JOIN donante ON piezas.Donante_idDonante1 = donante.idDonante 
            WHERE piezas.idPiezas = $id";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    // Verificar si se encontraron resultados
    if (!$row) {
        echo "No se encontraron detalles para la pieza con ID $id.";
        exit;
    }

    // Obtener datos adicionales de tablas relacionadas
    $additionalData = [];
    $tables = [
        'Palenteologia' => 'palenteologia',
        'Arqueología' => 'arqueologia',
        'Botánica' => 'botanica',
        'Geología' => 'geologia',
        'Ictiología' => 'icteologia',
        'Oología' => 'oologia',
        'Zoología' => 'zoologia'
    ];

    foreach ($tables as $clasificacion => $table) {
        if ($row['clasificacion'] == $clasificacion) {
            $sqlAdditional = "SELECT * FROM $table WHERE Piezas_idPiezas = ?";
            $stmtAdditional = $conn->prepare($sqlAdditional);
            $stmtAdditional->bind_param('i', $id);
            $stmtAdditional->execute();
            $resultAdditional = $stmtAdditional->get_result();
            $additionalData[$clasificacion] = $resultAdditional->fetch_assoc();
        }
    }

?>

<?php if ($row) { ?>
    <p><strong>Número de Inventario:</strong> <?php echo $row['numeroInventario']; ?></p>
    <p><strong>Especie:</strong> <?php echo $row['especie']; ?></p>
    <p><strong>Estado de Conservación:</strong> <?php echo $row['estadoConservacion']; ?></p>
    <p><strong>Fecha de Ingreso:</strong> <?php echo $row['fechaIngreso']; ?></p>
    <p><strong>Clasificación:</strong> <?php echo $row['clasificacion']; ?></p>
    <p><strong>Donante:</strong> <?php echo $row['nombre'] . ' ' . $row['apellido']; ?></p>
    <p><strong>Observación:</strong> <?php echo $row['observacion']; ?></p>
    
    <?php 
    foreach ($additionalData as $clasificacion => $details) {
        if (!empty($details)) { 
            echo "<h5>Detalles de $clasificacion</h5>";
            foreach ($details as $key => $value) {
                echo "<p><strong>" . ucfirst($key) . ":</strong> " . htmlspecialchars($value) . "</p>";
            }
        }
    }
    ?>
<?php } else { ?>
    <p>Detalles no encontrados.</p>
<?php } ?>

<?php
} else {
    echo "No se ha proporcionado un ID válido.";
}


?>


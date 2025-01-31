<?php
require_once 'conexion.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
  

    // Sanitizar entrada del usuario
    $num = $conex->real_escape_string($_POST['num']);

    // Consultar base de datos
    $query = "SELECT * FROM piezas WHERE numeroInventario LIKE '%$num%' LIMIT 10";
    $resultado = $conex->query($query);

    // Mostrar resultados
    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            echo "<div class='result-item p-2 border-bottom'>
                    <strong>" . htmlspecialchars($fila['numeroInventario']) . "</strong> - " . htmlspecialchars($fila['especie']) . htmlspecialchars($fila['clasificacion']) . "
                  </div>";
        }
    } else {
        echo "<p class='text-muted'>No se encontraron resultados.</p>";
    }

    $conex->close();
}
?>

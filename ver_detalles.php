<?php
include 'conexion.php'; // Asegúrate de que este archivo contiene la conexión a la base de datos

// Verificar si se ha proporcionado un ID
// if (isset($_GET['id']) && is_numeric($_GET['id'])) {
//     $id = intval($_GET['id']);
    
//     // Obtener detalles de la tabla 'piezas'
//     $sql = "SELECT piezas.*, donante.nombreyape
//             FROM piezas 
//             JOIN donante ON piezas.Donante_idDonante1 = donante.idDonante 
//             WHERE piezas.idPiezas = ?";
//     $stmt = $conex->prepare($sql);
//     if ($stmt) {
//         $stmt->bind_param('i', $id);
//         $stmt->execute();
//         $result = $stmt->get_result();
//         $piezas = $result->fetch_assoc();

//         if ($piezas) {
//             // Mostrar detalles de la tabla 'piezas'
//             echo "<h2>Detalles de la pieza</h2>";
//             echo "Número de Inventario: " . $piezas['numeroInventario'] . "<br>";
//             echo "Especie: " . $piezas['especie'] . "<br>";
//             echo "Estado de Conservación: " . $piezas['estadoConservacion'] . "<br>";
//             echo "Fecha de Ingreso: " . $piezas['fechaIngreso'] . "<br>";
//             echo "Clasificación: " . $piezas['clasificacion'] . "<br>";
//             echo "Donante: " . $piezas['nombreyape']. "<br>";
            
//             // Obtener y mostrar detalles de las tablas relacionadas
//             $tables = ['arqueologia', 'botanica', 'geologia', 'icteologia', 'oologia', 'palenteologia', 'zoologia'];
//             foreach ($tables as $table) {
//                 $sql = "SELECT * FROM $table WHERE Piezas_idPiezas = ?";
//                 $stmt = $conex->prepare($sql);
//                 if ($stmt) {
//                     $stmt->bind_param('i', $id);
//                     $stmt->execute();
//                     $result = $stmt->get_result();
//                     $details = $result->fetch_assoc();

//                     if ($details) {
//                         echo "<h3>Detalles de $table</h3>";
//                         foreach ($details as $key => $value) {
//                             echo ucfirst($key) . ": " . $value . "<br>";
//                         }
//                     }
//                     $stmt->close();
//                 }
//             }
//         } else {
//             echo "No se encontraron detalles para el ID proporcionado.";
//         }
//     } else {
//         echo "Error en la preparación de la declaración: " . $conex->error;
//     }
// } else {
//     echo "No se ha proporcionado un ID válido.";
// }

// $conex->close();
function mostrarDetalles($conex, $id, $table) {
    $sql = "SELECT * FROM $table WHERE Piezas_idPiezas = ?";
    $stmt = $conex->prepare($sql);
    if ($stmt) {
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $details = $result->fetch_assoc();

        if ($details) {
            echo "<h3>Detalles de $table</h3>";
            foreach ($details as $key => $value) {
                echo ucfirst($key) . ": " . $value . "<br>";
            }
        } else {
            echo "<h3>No hay detalles adicionales para $table</h3>";
        }
        $stmt->close();
    } else {
        echo "Error en la preparación de la declaración para $table: " . $conex->error;
    }
}

// Verificar si se ha proporcionado un ID
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);
    
    // Obtener detalles de la tabla 'piezas'
    $sql = "SELECT piezas.*, donante.nombreyape
            FROM piezas 
            JOIN donante ON piezas.Donante_idDonante1 = donante.idDonante 
            WHERE piezas.idPiezas = ?";
    $stmt = $conex->prepare($sql);
    if ($stmt) {
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $piezas = $result->fetch_assoc();

        if ($piezas) {
            // Mostrar detalles de la tabla 'piezas'
            echo "<h2>Detalles de la pieza</h2>";
            echo "Número de Inventario: " . $piezas['numeroInventario'] . "<br>";
            echo "Especie: " . $piezas['especie'] . "<br>";
            echo "Estado de Conservación: " . $piezas['estadoConservacion'] . "<br>";
            echo "Fecha de Ingreso: " . $piezas['fechaIngreso'] . "<br>";
            echo "Clasificación: " . $piezas['clasificacion'] . "<br>";
            echo "Donante: " . $piezas['nombreyape']. "<br>";

            // Obtener y mostrar detalles de las tablas relacionadas
            $tables = ['arqueologia', 'botanica', 'geologia', 'icteologia', 'oologia', 'palenteologia', 'zoologia'];
            foreach ($tables as $table) {
                mostrarDetalles($conex, $id, $table);
            }
        } else {
            echo "No se encontraron detalles para el ID proporcionado.";
        }
    } else {
        echo "Error en la preparación de la declaración: " . $conex->error;
    }
} else {
    echo "No se ha proporcionado un ID válido.";
}

$conex->close();

?>

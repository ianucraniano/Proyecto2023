<?php
include 'conexion.php'; // Asegúrate de que este archivo contiene la conexión a la base de datos


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
              if ( $key != "idBotanica" &&  $key != "idGeologia" &&  $key != "idArqueologia" && $key != "idOologia" && $key != "idZoologia" && $key != "idIctiologia" && $key != "idOsteologia" && $key != "idPalenteologia" && $key != "Piezas_idPiezas" && $key != "Piezas_Donante_idDonante"){  

                echo ucfirst($key) . ": " . $value . "<br>";
              }
            }
        } else {
            //echo "<h3>No hay detalles adicionales para $table</h3>";
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
    $sql = "SELECT piezas.*, donante.nombreyape,donante.fecha
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
          
            echo "Donante: " . $piezas['nombreyape']. "<br>"."Fecha: ". $piezas['fecha']. "<br>";

            // Obtener y mostrar detalles de las tablas relacionadas
            $tables = ['Arqueologia', 'Botanica', 'Geologia', 'Icteologia', 'Oologia', 'Palenteologia', 'Zoologia'];
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

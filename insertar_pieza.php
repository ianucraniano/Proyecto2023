<?php 

session_start();

// Conexion a la Base de Datos
require_once "conexion.php";

// Funcion de Validacion de Datos
require_once "funcionv.php";

$error = "";

if (!empty(trim($_POST['numeroInventario'])) && !empty(trim($_POST['especie'])) && 
    !empty(trim($_POST['estadoConservacion'])) && !empty(($_POST['fechaIngreso'])) && 
    !empty(trim($_POST['nombre'])) && !empty(trim($_POST['clasificacion'])) && 
    !empty($_POST['cantidadpiezas'])) {

    if (Validacion()) {
        $num = $_POST['numeroInventario'];
        $especie = $_POST['especie'];
        $estado = $_POST['estadoConservacion'];
        $fecha = $_POST['fechaIngreso'];
        $donante = $_POST['nombre'];
        $clasificacion = $_POST['clasificacion'];
        $obs = $_POST['observacion'];
        $cantidadp = $_POST['cantidadpiezas'];

        // Insertar en la tabla donante
        $sqldon = "INSERT INTO donante(nombreyape) VALUES('$donante')";
        $resultDonante = mysqli_query($conex, $sqldon);

        if ($resultDonante) {
            $ultimoid = mysqli_insert_id($conex);
            $idusu = $_SESSION['idusuario'];

            // Insertar en la tabla piezas
            $sqlPiezas = "INSERT INTO piezas(numeroInventario, especie, estadoConservacion, fechaIngreso, Cantidad_piezas, clasificacion, observacion, Donante_idDonante1, usuarios_idusuarios) 
                          VALUES('$num', '$especie', '$estado', '$fecha', $cantidadp, '$clasificacion', '$obs', $ultimoid, $idusu)";
            
            $resultPiezas = mysqli_query($conex, $sqlPiezas);

            if ($resultPiezas) {
                header("Location: menupiezas.php?mensaje=Pieza agregada!&tipo=success");
                exit;
            } else {
                if (mysqli_errno($conex) == 1062) {
                    $error = "Error, número de inventario duplicado";
                } else {
                    $error = "Error en la inserción de datos: " . mysqli_error($conex);
                }
                header("Location: menupiezas.php?mensaje=Error al agregar pieza&tipo=error" . urlencode($error));
                exit;
            }
        } else {
            $error = "Error al insertar donante: " . mysqli_error($conex);
            header("Location: menupiezas.php?mensaje=Error&tipo=error" . urlencode($error));
            exit;
        }
    } else {
        header("Location: menupiezas.php?mensaje=Error en la validación de datos&tipo=error");
        exit;
    }
} else {
    header("Location: form_agregarp.php?mensaje=Todos los campos son obligatorios&tipo=error");
    exit;
}
?>

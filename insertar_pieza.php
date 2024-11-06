<?php 

session_start();

// Conexion a la Base de Datos
require_once "conexion.php";

// Funcion de Validacion de Datos
require_once "funcionv.php";

$error = "";



 

session_start();

// Conexión a la Base de Datos
require_once "conexion.php";
require_once "funcionv.php";

$error = "";

// Validación de campos obligatorios
if (!empty(trim($_POST['numeroInventario'])) && !empty(trim($_POST['especie'])) && 
    !empty(trim($_POST['estadoConservacion'])) && !empty(trim($_POST['fechaIngreso'])) && 
    !empty(trim($_POST['nombre'])) && !empty(trim($_POST['clasificacion'])) && 
    !empty($_POST['cantidadpiezas'])) {

    if (Validacion()) {
        // Variables de la tabla `piezas`
        $num = $_POST['numeroInventario'];
        $especie = $_POST['especie'];
        $estado = $_POST['estadoConservacion'];
        $fecha = $_POST['fechaIngreso'];
        $donante = $_POST['nombre'];
        $clasificacion = $_POST['clasificacion'];
        $obs = $_POST['observacion'] ?? ''; // Observación opcional
        $cantidadp = $_POST['cantidadpiezas'];

        // Iniciar transacción
        mysqli_begin_transaction($conex);

        // Insertar en la tabla `donante`
        $sqldon = "INSERT INTO donante(nombreyape) VALUES('$donante')";
        $resultDonante = mysqli_query($conex, $sqldon);

        if ($resultDonante) {
            $ultimoid = mysqli_insert_id($conex);
            $idusu = $_SESSION['idusuario'];

            // Insertar en la tabla `piezas`
            $sqlPiezas = "INSERT INTO piezas(numeroInventario, especie, estadoConservacion, fechaIngreso, Cantidad_piezas, clasificacion, observacion, Donante_idDonante1, usuarios_idusuarios) 
                          VALUES('$num', '$especie', '$estado', '$fecha', $cantidadp, '$clasificacion', '$obs', $ultimoid, $idusu)";
            $resultPiezas = mysqli_query($conex, $sqlPiezas);

            if ($resultPiezas) {
                $ultimoidpieza = mysqli_insert_id($conex);

                // Inserción específica según clasificación
                $insercionEspecifica = realizarInsercionPorClasificacion($clasificacion, $ultimoidpieza, $ultimoid, $conex);
                
                if ($insercionEspecifica) {
                    // Confirmar transacción y redirigir
                    mysqli_commit($conex);
                    header("Location: menupiezas.php?mensaje=Pieza agregada!&tipo=success");
                    exit;
                } else {
                    $error = "Error al insertar en la clasificación específica.";
                }
            } else {
                $error = "Error en la inserción de piezas: " . mysqli_error($conex);
            }
        } else {
            $error = "Error al insertar donante: " . mysqli_error($conex);
        }

        // En caso de error, revertir transacción
        mysqli_rollback($conex);
        header("Location: menupiezas.php?mensaje=" . urlencode($error) . "&tipo=error");
        exit;
    } else {
        header("Location: menupiezas.php?mensaje=Error en la validación de datos&tipo=error");
        exit;
    }
} else {
    header("Location: form_agregarp.php?mensaje=Todos los campos son obligatorios&tipo=error");
    exit;
}

// Función para inserción según clasificación
function realizarInsercionPorClasificacion($clasificacion, $ultimoidpieza, $ultimoid, $conex) {
    global $conex;
    switch ($clasificacion) {
        case 'zoologia':
            return insertarZoologia($ultimoidpieza, $ultimoid, $conex);
        case 'botanica':
            return insertarBotanica($ultimoidpieza, $ultimoid, $conex);
        case 'paleontologia':
           return insertarPaleontologia($ultimoidpieza, $ultimoid, $conex);
        case 'arqueologia':
            return insertarArqueologia($ultimoidpieza, $ultimoid, $conex);
        case 'osteologia':
            return insertarOsteologia($ultimoidpieza, $ultimoid, $conex);
        case 'geologia':
            return insertarGeologia($ultimoidpieza, $ultimoid, $conex);
        case 'icteologia':
            return insertarIcteologia($ultimoidpieza, $ultimoid, $conex);
       case 'oologia':
           return insertarOologia($ultimoidpieza, $ultimoid, $conex);
        // Agregar más casos según clasificación
        default:
            return false;
    }
}

// Ejemplo de función de inserción para `zoologia`
function insertarZoologia($ultimoidpieza, $ultimoid, $conex) {
    global $conex;
    if (!empty($_POST['reino']) && !empty($_POST['division']) && 
        !empty($_POST['phylum']) && !empty($_POST['clase']) && 
        !empty($_POST['orden']) && !empty($_POST['familia']) && 
        !empty($_POST['esp']) && !empty($_POST['clasi'])) {

        $reino = $_POST['reino'];
        $division = $_POST['division'];
        $phylum = $_POST['phylum'];
        $clase = $_POST['clase'];
        $orden = $_POST['orden'];
        $familia = $_POST['familia'];
        $esp = $_POST['esp'];
        $clas = $_POST['clasi'];
        $sql = "INSERT INTO zoologia(clasificacion, reino, division, phylum, clase, orden, familia, especie, Piezas_idPiezas, Piezas_Donante_idDonante) 
                VALUES('$clas', '$reino', '$division', '$phylum', '$clase', '$orden', '$familia', '$esp', $ultimoidpieza, $ultimoid)";
        
        return mysqli_query($conex, $sql);
    }
    return false;
}

function insertarBotanica($ultimoidpieza, $ultimoid, $conex) {
    global $conex;
    if (!empty($_POST['reino']) && !empty($_POST['division']) && 
        !empty($_POST['phylum']) && !empty($_POST['clase']) && 
        !empty($_POST['orden']) && !empty($_POST['familia']) && 
        !empty($_POST['esp']) && !empty($_POST['clasi'])) {

        $reino = $_POST['reino'];
        $division = $_POST['division'];
        $phylum = $_POST['phylum'];
        $clase = $_POST['clase'];
        $orden = $_POST['orden'];
        $familia = $_POST['familia'];
        $esp = $_POST['esp'];
        $clas = $_POST['clasi'];
        $sql = "INSERT INTO botanica(clasificacion, reino, division, phylum, clase, orden, familia, especie, Piezas_idPiezas, Piezas_Donante_idDonante) 
                VALUES('$clas', '$reino', '$division', '$phylum', '$clase', '$orden', '$familia', '$esp', $ultimoidpieza, $ultimoid)";
        
        return mysqli_query($conex, $sql);
    }
    return false;
}

function insertarPaleontologia($ultimoidpieza, $ultimoid, $conex) {
    global $conex;
    if(!empty($_POST['era'])&& !empty($_POST['periodo'])){
        $era = $_POST['era'];
         $periodo = $_POST['periodo'];
         $sql = "INSERT INTO paleontologia(era, periodo, Piezas_idPiezas, Piezas_Donante_idDonante) 
                 VALUES('$era', '$periodo', $ultimoidpieza, $ultimoid)";
        
        return mysqli_query($conex, $sql);
    }
    return false;
}

function insertarArqueologia($ultimoidpieza, $ultimoid, $conex) {
    global $conex;
    if(!empty($_POST['material'])&& !empty($_POST['integidad'])&& !empty($_POST['estetica'])){
        $material = $_POST['material'];
         $integridad = $_POST['integridad'];
      $estetica = $_POST['estetica'];
        $sql = "INSERT INTO arqueologia(IntegridadHistorica, estetica, material, Piezas_idPiezas, Piezas_Donante_idDonante) 
                VALUES('$integridad', '$estetica', '$material', $ultimoidpieza, $ultimoid)";
        
        return mysqli_query($conex, $sql);
    }
    return false;
}

function insertarOsteologia($ultimoidpieza, $ultimoid, $conex) {
    global $conex;
    if( !empty($_POST['clasiO'])&& !empty($_POST['espeO'])){
        $clasiO=$_POST['clasiO'];
         $espeO=$_POST['espeO'];
        $sql = "INSERT INTO osteologia(especie, clasificacion, Piezas_idPiezas, Piezas_Donante_idDonante) 
                 VALUES('$espeO', '$clasiO', $ultimoidpieza, $ultimoid)";
        
        return mysqli_query($conex, $sql);
    }
    return false;
}
function insertarGeologia($ultimoidpieza, $ultimoid, $conex) {
    global $conex;
    if(!empty($_POST['tipo'])){            
        $tipo = $_POST['tipo'];
          $sql = "INSERT INTO geologia(tipo, Piezas_idPiezas, Piezas_Donante_idDonante) 
                  VALUES('$tipo', $ultimoidpieza, $ultimoid)";
        
        return mysqli_query($conex, $sql);
    }
    return false;
}

function insertarIcteologia($ultimoidpieza, $ultimoid, $conex) {
    global $conex;
    if( !empty($_POST['clasiI'])&& !empty($_POST['espeI'])){
        $clasiI=$_POST['clasiI'];
       $espeI=$_POST['espeI']; // Corrección de nombre
        $sql = "INSERT INTO icteologia(especie, clasificacion, Piezas_idPiezas, Piezas_Donante_idDonante) 
               VALUES('$espeI', '$clasiI', $ultimoidpieza, $ultimoid)";
        
        return mysqli_query($conex, $sql);
    }
    return false;
}
function insertarOologia($ultimoidpieza, $ultimoid, $conex) {
    global $conex;
    if(!empty($_POST['especieO'])&& !empty($_POST['clasifi'])&& !empty($_POST['tipoO'])){
        $especieO = $_POST['especieO'];
         $clasifi = $_POST['clasifi'];
        $tipoO = $_POST['tipoO'];
        $sql = "INSERT INTO oologia(clasificacion, tipo, especie, Piezas_idPiezas, Piezas_Donante_idDonante) 
                 VALUES('$clasifi', '$tipoO', '$especieO', $ultimoidpieza, $ultimoid)";
        
        return mysqli_query($conex, $sql);
    }
    return false;
}


   

?>

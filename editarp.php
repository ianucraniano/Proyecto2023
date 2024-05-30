<?php
session_start();

// Conexion a la BD
require_once "conexion.php";

//Funcion de Validacion de Datos

require_once "funcionv.php";


$error = "";

 // Recibe el id oculto desde el form_editar

 $id=$_POST['idPiezas'];

 // Crea una variable de sesión llamada ids para guardar el id  recibido 

 $_SESSION['ids']=$id;

// echo $_SESSION['ids'].$_POST['idPiezas'];
// die();

 if(!empty(trim($_POST['numeroInventario'])) && !empty(trim($_POST['especie'])) && !empty(trim($_POST['estadoConservacion'])) && !empty(trim($_POST['fechaIngreso'])) && !empty(trim($_POST['clasificacion'])) && !empty(trim($_POST['donante']))){

	if (Validacion()){
     
    $num=$_POST['numeroInventario'];      
    $especie=$_POST['especie'];     
    $estado=$_POST['estadoConservacion'];
    $fecha=$_POST['fechaIngreso'];
    $clasificacion=$_POST['clasificacion'];
    $donante=$_POST['donante'];
    
  

   
       $sql="UPDATE piezas,donante SET piezas.numeroInventario='$num',piezas.especie='$especie',piezas.estadoConsevacion='$estado',piezas.fechaIngreso='$fecha', donante.nombreyape='$donante' WHERE (piezas.Donante_idDonante1=donante.idDonante) and piezas.idPiezas=$id"; 

       $result=mysqli_query($conex,$sql);

    //die($sql);

       if ($result){
          
         
          header("Location:menupiezas.php?msje=ok");

      }else{ 
          $error.=" Error en la insercion";
         header("Location:form_editarp.php?msje=".$error);
      }
  
      
    }
      
}
        // Se arma la sentencia SQL de Actualización
        
      
        // Ejecuta la sentencia

       

       //die($sql);

        // Evalúa si se realizó la actualización de algun dato


?>
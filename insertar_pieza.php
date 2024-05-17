<?php

// Conexion a la Base de Datos Biblioteca 

 require_once "conexion.php";

 //Funcion de Validacion de Datos

 require_once "funcionv.php";





$error = "";

if(!empty(trim($_POST['numeroInventario'])) && !empty(trim($_POST['especie'])) && 
   !empty(trim($_POST['estadoConservacion'])) && !empty(trim($_POST['fechaIngreso'])) && !empty(trim($_POST['nombre']))&& !empty(trim($_POST['clasificacion']))){
	

	if (Validacion()){
         
		$num = $_POST['numeroInventario'];
		$especie = $_POST['especie'];
		$estado = $_POST['estadoConservacion'];
        $fecha=$_POST['fechaIngreso'];
		$donante=$_POST['nombre'].$_POST['apellido'];
        $clasificacion=$_POST['clasificacion'];
            
        $sql="INSERT INTO piezas(numeroInventario,especie,estadoConservacio,fechaIngreso,clasificacion) VALUES('$num','$especie','$estado','$fecha','$clasificacion')";
		$sql="INSERT INTO donante(nombre,apellido) VALUES('$donante')";

        $result=mysqli_query($conex,$sql);

        //die($sql);

        
           
     
     }
	
	 if ($result){
			
           
		header("Location:form_agregarp.php?mensaje=ok");

	}else{ 
		$error.="<br> Error en la insercion de usuario";
		header("Location:form_agregarp.php?mensaje=".$error);
	}
	
}

  

	

?>
<?php

session_start();
// Conexion a la Base de Datos Biblioteca 

 require_once "conexion.php";

 //Funcion de Validacion de Datos

 require_once "funcionv.php";




$error = "";


//echo $_POST['numeroInventario']." ".$_POST['especie']." ".$_POST['estadoConservacion']." ".$_POST['fechaIngreso']." ".$_POST['nombre']." ".$_POST['clasificacion']." ".$_POST['cantidadpiezas'];


if(!empty(trim($_POST['numeroInventario'])) && !empty(trim($_POST['especie'])) && 
!empty(trim($_POST['estadoConservacion'])) && !empty(trim($_POST['fechaIngreso'])) && !empty(trim($_POST['nombre'])) && !empty(trim($_POST['clasificacion'])) && !empty($_POST['cantidadpiezas'])){
    


	if (Validacion()){
        
		$num = $_POST['numeroInventario'];
		$especie = $_POST['especie'];
		$estado = $_POST['estadoConservacion'];
        $fecha=$_POST['fechaIngreso'];
		
		$donante_n=$_POST['nombre'];
		$donante_a='perez';

        $clasificacion=$_POST['clasificacion'];
		$obs=$_POST['observacion'];
		$cantidadp=$_POST['cantidadpiezas'];
            
        
		$sql="INSERT INTO donante(nombre,apellido) VALUES('$donante_n','$donante_a')";

        $result=mysqli_query($conex,$sql);

		$ultimoid=mysqli_insert_id($conex);
		$idusu=$_SESSION['idusuario'];
        
        //die($sql);

        $sql="INSERT INTO piezas(numeroInventario,especie,estadoConservacion,fechaIngreso,Cantidad_piezas,clasificacion,observacion,Donante_idDonante1,usuarios_idusuarios) VALUES('$num','$especie','$estado','$fecha',$cantidadp,'$clasificacion','$obs',$ultimoid,$idusu)";
           

		//die($sql);
		$result=mysqli_query($conex,$sql);
		


     }
	
	 if ($result){
			
           
		header("Location:form_agregarp.php?mensaje=ok");

	}else{ 
		$error.="<br> Error en la insercion";
		header("Location:form_agregarp.php?mensaje=".$error);
	}
	
}

  

	

?>
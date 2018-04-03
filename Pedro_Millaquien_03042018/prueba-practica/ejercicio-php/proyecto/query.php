<?php

include "conection.php";

if(isset($_POST['action']) && $_POST['action'] == 'edit') {
	// Metodo POST para la actualización de los datos cuando se presiona el boton eliminar
	$id = $_POST['id'];
	$name = $_POST['_name'];
	$direccion = $_POST['_direccion'];
	$web = $_POST['_web'];
	$email = $_POST['_email_contacto'];
	$query = "Update tb_empresas Set _name ='".$name."', _direccion ='".$direccion."', _web ='".$web."', _email_contacto ='".$email."' where  id =".$id."";
	if($mysql->query($query)){
		echo "Ok";
	}else{
		echo "Error " . $mysql->error;
	 }
	 mysqli_close($mysql);
	 header('Location: index.php');
}



if(isset($_GET['action']) && $_GET['action'] == 'delete') {
	// Metodo GET para eliminar el registro de la base de datos
	$id = $_GET['id'];
	
	$query = "Delete  FROM tb_archivo WHERE id_empresa = ".$id;
	if($mysql->query($query)){
		echo "Ok";
	}else{
		echo "Error " . $mysql->error;
	 }
	 $query = "Delete  FROM tb_empresas WHERE id = ".$id;
	if($mysql->query($query)){
		echo "Ok";
	}else{
		echo "Error  " . $mysql->error;
	 }
	 mysqli_close($mysql);
	 header('Location: index.php');
}



if(isset($_GET['show']) && $_GET['show'] == 'edit') {
	$id = $_GET['id'];
	// Realizar una consulta MySQL para obtener la empresa con el ID seleccionado
	$query = "SELECT * FROM tb_empresas WHERE id = ".$id;
	$result = $mysql->query($query);
	$result_row = mysqli_fetch_assoc($result);

	// Mostrar datos en el template-list.php
	$_GET['id']=$id;
	$_GET['name']=$result_row['_name'];
	$_GET['direccion']=$result_row['_direccion'];
	$_GET['web']=$result_row['_web'];
	$_GET['email']=$result_row['_email_contacto'];
}

// Realizar una consulta MySQL
$query = "SELECT * FROM tb_empresas ";
$result = $mysql->query($query);

include 'template-list.php';

// Liberar resultados
mysqli_free_result($result);

// Cerrar la conexión
mysqli_close($mysql);

?>
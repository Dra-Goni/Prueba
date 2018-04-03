<?php

	// Datos para la conexion al servido
	$BD_host     = 'localhost';
	$BD_user     = 'root';
	$BD_password = '';
	$BD='test-practica';
	// Conectando, seleccionando la base de datos
	$mysql = new mysqli($BD_host,$BD_user,$BD_password,	$BD);

?>
<?php 
	$conexion= mysql_connect('localhost', 'aleran', '362210');
	$db= mysql_select_db("prueba");
	if (!$conexion || !$db) die ("no se pudo conectar ".mysql_error());
?>
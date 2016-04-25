<?php 
	ini_set("session.cookie_lifetime", 3600);
	ini_set("session.gc_maxlifetime", 3600);
	session_start();
		if (($_SESSION["autorizado"]!=TRUE)||($_SESSION["tipo"]!="Administrador" )) {
		header("Location:./autorizar.php");
		}
	echo "<br>Bienvenid@: ".$_SESSION["usuario"]." <a href='./logout.php'>--Cerrar Sesión--</a><br><br>";
?>	
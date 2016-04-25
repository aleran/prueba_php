<?php
	if (isset($_POST["ci_estudiante"])) {
		include("conexion.php");
		$sql="DELETE FROM estudiantes WHERE ci_estudiante='".$_POST["ci_estudiante"]."'";
		$rs=mysql_query($sql) or die(mysql_error());
		if(mysql_affected_rows()==0) echo "no existe registro";
		echo "eliminado";

	}
?>
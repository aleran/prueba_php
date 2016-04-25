<?php
	if(isset($_POST["ci_estudiante"])) {
		include("conexion.php");
		$sql="SELECT ci_estudiante FROM estudiantes WHERE ci_estudiante='".$_POST["ci_estudiante"]."'";
		$rs=mysql_query($sql)or die(mysql_error());
		$num=mysql_num_rows($rs);
		if ($num === 1) echo "<script>alert('Cedula ya registrada');window.location='insertar.html';</script>";
		$sql="INSERT INTO estudiantes (ci_estudiante,nombres,apellidos,telefono) VALUES('".$_POST["ci_estudiante"]."', '".$_POST["nombres"]."', '".$_POST["apellidos"]."', '".$_POST["telefono"]."')";
		$rs2=mysql_query($sql) or die (mysql_error());
		echo "insertado";
	}
?>
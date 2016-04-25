<?php
	if(isset($_POST["ci_estudiante"])) {
		include("conexion.php");
		$sql="SELECT * FROM estudiantes WHERE ci_estudiante='".$_POST["ci_estudiante"]."'";
		$rs=mysql_query($sql) or die (mysql_error());
		$row=mysql_fetch_array($rs);
		if($row== FALSE) echo "<script>alert('no existe registro');window.location='consultar.html'</script>";
		else echo "Cedula :".$row["ci_estudiante"]." nombre: ".$row["nombres"]." apellido ".$row["apellidos"]." telefono ".$row["telefono"];
	}
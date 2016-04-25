<form action="modificar.php" METHOD="POST">
	<input type="text" name="ci_estudiante">
	<input type="text" name="nombres">
	<input type="text" name="apellidos">
	<input type="text" name="telefono">
	<button>Enviar</button>
</form>
<?php
	if (isset($_POST["ci_estudiante"])) {
		include("conexion.php");
		/*$sql="SELECT * FROM estudiantes WHERE ci_estudiante='".$_POST["ci_estudiante"]."'";
		$rs=mysql_query($sql) or die(mysql_error());
		$num=mysql_num_rows($rs);
		if($num===0) echo "<script>alert('no existe registros');window.location='modificar.php'</script>";*/
		$sql="UPDATE estudiantes SET nombres='".$_POST["nombres"]."', apellidos='".$_POST["apellidos"]."', telefono='".$_POST["telefono"]."' WHERE ci_estudiante='".$_POST["ci_estudiante"]."'";
		$rs2=mysql_query($sql) or die (mysql_error());
		if(mysql_affected_rows()==0) echo "no existe registro";
		else echo "modificado";
	}
?>
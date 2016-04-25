<form action="academicos.php" METHOD="POST">
	<input type="text" name="ci_estudiante">
	<button>Consultar</button>
</form>
<?php
	if (isset($_POST["ci_estudiante"])) {
		include("conexion.php");
		$sql="SELECT * FROM estudiantes JOIN carreras ON estudiantes.ci_estudiante=carreras.ci_estudiante  JOIN asignacion_materias ON estudiantes.ci_estudiante=asignacion_materias.ci_estudiante AND estudiantes.ci_estudiante='".$_POST["ci_estudiante"]."'";
		$rs=mysql_query($sql) or die(mysql_error());
		$row=mysql_fetch_array($rs);
		if ($row==FALSE) {
			echo "no hay registros que coincidan";
		}
		else echo "cedula: ".$row["ci_estudiante"]." - nombre: ".$row["nombres"]." - apellido: ".$row["apellidos"]." - carrera: ".$row["carrera"]." -codigo de materia: ".$row["codigo_materia"].""; 
	}

?>
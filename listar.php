<?php
	include("conexion.php");
	$sql="SELECT * FROM estudiantes";
	$rs=mysql_query($sql) or die(mysql_error());
	$num= mysql_num_rows($rs);
	if($num===0) echo "<script>alert('no existen registros');</script>";
	while($row= mysql_fetch_array($rs)) echo "<P>". $row["ci_estudiante"]. "-". $row["nombres"]. "-". $row["apellidos"]. "-".  $row["telefono"]."</P>";

		/*if($rs!=NULL){
    		if(mysql_num_rows($rs)>0){
      			while($row=mysql_fetch_array($rs)){
         		//here you can work with the results...
        		echo "<P>". $row["ci_estudiante"]. "-". $row["nombres"]. "-". $row["apellidos"]. "-".  $row["telefono"]."</P>";
      			}
  			}else{
      		//no results, you can put a message here...
   			}
   			mysql_free_result($rs);
 		}

 		mysql_close();*/
?>
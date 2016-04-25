<?php
	session_start();
	$_SESSION["autorizado"] = FALSE;
	$_SESSION["usuario"] = "";
?>

<?php 

		if (isset($_POST["usuario"])) {
			include("./connection/connection.php");
            $sql="SELECT * FROM usuarios WHERE usuario='".$_POST["usuario"]."'";
            $rs=$db->Execute($sql) or die($db->ErrorMsg());
			
			if (md5($_POST["clave"])==($rs->fields["clave"])){
			
				$_SESSION["autorizado"] = TRUE;
				$_SESSION["usuario"] = $_POST["usuario"];
				$_SESSION["tipo"] = $rs->fields["tipo"];
					if ($_SESSION["tipo"] == "Administrador"){
						header("Location:./Administrador.php");
					}
					
					if ($_SESSION["tipo"] == "Operador"){
						header("Location:./operador.php");
					}							
					
					if ($_SESSION["tipo"] == "Auxiliar"){
						header("Location:./auxiliar.php");
					}
					
					if ($_SESSION["tipo"] == "Otro"){
						header("Location:./otro.php");
					}
					
			}else{
				echo "<script>alert('Usuario o Clave Invalida');window.location='autorizar.php';</script>";
				
				}
			
			
  
		}else{?> 	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<style type="text/css">
#ENTRAR {
	background-image: url(ENTRAR.png);
	height: 53px;
	width: 128px;
}
body,td,th {
	color: #FFF;
	font-size: 30px;
}
#Consultas {
	background-image: url(consultas.png);
	height: 50px;
	width: 128px;
}
body {
	background-color: #72A6FC;
}
</style>
</head>


<body>
<table width="1062" height="872" border="1" align="center">
  <tr>
    <td width="958" height="199" bgcolor="#0000FF"><div align="center"><img src="logo.jpg" alt="PS" width="401" height="137" longdesc="logo.jpg" align="texttop" /></div></td>
  </tr>
  <tr>
    <td height="594" align="center" bgcolor="#FFFFFF">   <FORM  ACTION="autorizar.php" METHOD="POST">
			<p align="center">&nbsp;</p>
		<table width="311" height="147" border="1">
			  <tr>
			    <td width="301" bgcolor="#0000FF"><p align="center"><strong>Iniciar Sesion</strong></p>
		          <p align="center"><strong>Usuario:
	              <input name="usuario"  autofocus="autofocus" required="required" />
	              <br />
	              Clave:     
                  <input type="password" name="clave"  required="required" />
	              </strong></p>
                  <p align="center">
                    <strong>
                    <input type="submit" value="Aceptar" />
                  </strong></p>
                <p>&nbsp;</p></td>
		      </tr>
	    </table>
			<div align="center"></div>
			<div align="center"></div>
			<div align="center"></div>
			<div align="center"></div>
		<div align="center"></div>
			<p align="center">&nbsp;</p>
	</FORM></td>
  </tr>
  <tr>
    <td height="52" bgcolor="#0000FF"><strong>&nbsp;
      <marquee>
        SU  SALUD EN BUENAS  MANOS...!
      </marquee>
    </strong></td>
  </tr>
</table>
<div id="CREAR USUARIO"></div>

<map name="Map" id="Map">
  <area shape="rect" coords="90,74,138,97" href="#" />
  <area shape="rect" coords="285,94,455,170" href="#" />
</map>
</body>
</html>
 <?php }
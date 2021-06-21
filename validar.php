
	<?php 
	session_start();
	$usuario= $_POST['usuario'];
	$pasword = $_POST['contraseña'];
	

	//conectarDB
	$conexion=mysqli_connect("localhost","root","","proyecto");
	$consulta="SELECT * FROM usuarios WHERE username = '$usuario' and pasword ='$pasword'";
	$resultado=mysqli_query($conexion,$consulta);

	$filas=mysqli_num_rows($resultado);
	if ($filas>0) {
		
		$_SESSION['usuarioSesion']=$usuario;
		
		header("Location: indexSesion.php");
		
	} else {
		echo "Error en la autentificación";
	}
	mysqli_free_result($resultado);
	mysqli_close($conexion);
	
 ?>
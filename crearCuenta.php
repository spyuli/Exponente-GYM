<?php

require 'conexion.php';



if (!empty($_POST)){
	//Realizamos el seguimiento de los errores
	$errorGerente = null;
	$usuarioError = null;
	$nombreError = null;
	$apellidoError = null;
	$emailError = null;
	$passwordError = null;
	$edadError = null;




	//Seguimiento de los valores enviados
	$usuario =$_POST['usuario'];
	$nombre =$_POST['nombre'];
	$apellido =$_POST['apellido'];
	$email =$_POST['email'];
	$password =$_POST['password'];
	$edad =$_POST['edad'];


	//Validacion de la entrada de datos en el formulario
	$valid = true;
	if (empty($usuario) || $usuario=="Gerente"){//usuario
		$usuarioError = 'Error de usuario';
		$valid = false;
	}
	if (empty($nombre)){//Nombre
		$nombreError = 'Debes ingresar un nombre';
		$valid = false;
	}
	if (empty($apellido)){//Apellido
		$apellidoError = 'Debes ingresar un apellido';
		$valid = false;
	}
	if (empty($email)){//Correo electronico
		$emailError = 'Debes ingresar un correo electrónico';
		$valid = false;
	}else if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$emailError = 'Ingresa un correo electrónico válido';
		$valid = false;
	}
	if (empty($password)){//pasword
		$passwordError = 'Debes ingresar una contraseña válida';
		$valid = false;
	}
	if (empty($edad)){//pasword
		$passwordError = 'Debes ingresar tu edad';
		$valid = false;
	}



	//Insertamos el registro en la tabla usuarios
	if ($valid){
	$pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql ='INSERT INTO usuarios (username, nombre, apellido, email, pasword,edad) values (?, ?, ?, ?, ?,?)';
	$q = $pdo->prepare($sql);
	$q->execute(array($usuario,$nombre,$apellido,$email,$password,$edad));
	Database::disconnect();
	header("Location: modal.html");
	}

}//IF POST

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="crearCuenta.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title>Registrarse</title>
</head>
<body style="overflow: auto; ">

<div class="float-start">
        <a href="index.html"><img src="logoSF.PNG" width="300" height="300"></a>
    </div>

	<div class="center" >
    	<div class="header">Registro de Usuario</div>
		<form class="form" action="crearCuenta.php" method="POST">
			<!--Div formato1-->
			<div class="main-w3layouts wrapper">
	
				<!--Div formato1-->
				<div class="main-agileinfo">
					<!--Datos para usuario del cliente-->
					<div class="control-group <?php echo !empty($usuarioError)?'error':'';?>">
						<!--<label class="control-label">Usuario</label>-->
						<div class="controls">
							<input type="text" name="usuario" placeholder="Usuario " value="<?php echo !empty($usuario)?$usuario:'';?>" required>
							<i class="fas fa-user"></i>
							<?php if (!empty($usuarioError)): ?>
								<br>
							<span class="help inline">
								<?php echo $usuarioError; ?>
							</span>
							<?php endif; ?>
						</div>
					</div>
					<!--Datos para nombre del cliente-->
					<div class="control-group <?php echo !empty($nombreError)?'error':'';?>">
						<!--<label class="control-label">Nombre</label>-->
						<div class="controls">
							<br>
							<input required type="text" name="nombre" placeholder="Nombre" value="<?php echo !empty($nombre)?$nombre:'';?>">
							<i class="fas fa-font"></i>
							<?php if (!empty($nombreError)): ?>
								<br>
							<span class="help inline">
								<?php echo $nombreError; ?>
							</span>
							<?php endif; ?>
						</div>
					</div>
					<!--Datos para apellido  del cliente-->
					<div class="control-group <?php echo !empty($apellidoError)?'error':'';?>">
						<!--<label class="control-label">Apellido</label>-->
						<div class="controls">
							<br>
							<input required type="text" name="apellido" placeholder="Apellido" value="<?php echo !empty($apellido)?$apellido:'';?>">
							<i class="fas fa-font"></i>
								<?php if (!empty($apellidoError)): ?>
									<br>
							<span class="help inline">
								<?php echo $apellidoError; ?>
							</span>
							<?php endif; ?>
						</div>
					</div>
					<!--Datos para el correo del cliente-->
					<div class="control-group <?php echo !empty($emailError)?'error':'';?>">
						<!--<label class="control-label">Correo electronico</label>-->
						<div class="controls">
							<br>
							<input required type="text" name="email" placeholder="Correo electrónico" value="<?php echo !empty($email)?$email:'';?>">
							<i class="fas fa-at"></i>
								<?php if (!empty($emailError)): ?>
									<br>
							<span class="help inline">
								<?php echo $emailError; ?>
							</span>
							<?php endif; ?>
						</div>
					</div>
					<!--Datos para contraseña del cliente-->
					<div class="control-group <?php echo !empty($passwordError)?'error':'';?>">
					<!--<label class="control-label">Contraseña</label>-->
					<div class="controls">
						<br>
						<input required type="password" name="password" placeholder="Contraseña" value="<?php echo !empty($password)?$password:'';?>">
						<i class="fas fa-lock"></i>
						<?php if (!empty($passwordError)): ?>
							<br>
						<span class="help inline">
						<?php echo $passwordError; ?>
					</span>
					<?php endif; ?>
					</div>
					</div>
					<br>
					<!--Datos para edad del cliente-->
					<div class="control-group <?php echo !empty($edadError)?'error':'';?>">
					<!--<label class="control-label">Usuario</label>-->
						<div class="controls">
							<input required min="18" max="100" type="number" name="edad" placeholder="Edad " value="<?php echo !empty($edad)?$edad:'';?>">
							<i class="fas fa-user"></i>
							<?php if (!empty($edadError)): ?>
								<br>
							<span class="help inline">
							<?php echo $edadError; ?>
							</span>
							<?php endif; ?>
						</div>
					</div>

					<!--aceptar brn-->
					<div class="form-actions">
						<!--<a type="submit" class="btn btn-primary" href="modal.html">Registrar</a>-->
						<!--BOTON REGISTRAR E INICIAR SESION-->
						<div >
							<input type="submit" value= "Registrar">
							<label>¿Ya tienes tu registro? <a  href="inicioSesion.html"> Inicia Sesión</a></label>
							<!--<button type="submit" class="btn btn-success">Registrar</button>-->
						</div>
					
					
					</div>
				</div>		
			</div>

	
		</form>
	</div>
</body>
</html>
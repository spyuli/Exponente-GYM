<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>SESION GERENTE</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/bulma@0.9.1/css/bulma.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">

<style type="text/css" media="screen">
	
	.btn-dark{
  		width: 100%;
	}
	.btn-light{
  		width: 100%;
	}

</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg is-warning" role="navigation" style="background-color: black">
        
        <div class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="indexSesion.php"><img src="logoSF.PNG"  ></a> 
            </div>

            
        </div>
    </nav>

	<div class="row align-items-center  bg-dark" style="text-align: center;">
		    <div class="col border">
      	  <h3 class="text-center  text-light">COMENTARIOS ENVIADOS POR LOS USUARIOS <img src="correoImg.png" alt="" style="width: 90px;margin-left: 10px"></h3>
        </div>
      </div>

	<div class="container-fluid" style="height: 650px;">

		<div class="container-fluid  h-100 bg-light">
			<br>

			<h4>Seleccione a un usuario para ver sus comentarios acerca de Exponente GYM:</h4>	
			
			<?php
				$carpeta = "gestionComentarios/comentarios/";
				//abre la carpeta señalada
				if ($flujo = opendir($carpeta)) {
					while (false != ($archivo = readdir($flujo))) {
						$cadena = substr($archivo, 0, -4);

						//crea el vinculo al archivo mostrarArchivo pasando el nombre de archivo cliqueado
						echo "<a href=gestionComentarios/mostrarArchivo.php?nombre=$archivo>$cadena</a><br>";
					}
					closedir($flujo);
				}
			?>
						
					
		</div>		


	</div>

	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col bg-light" style="text-align: right; font-size: 20px">
				<a class="text-danger" href="gestionComentarios/eliminarComentario.php">¿Desea eliminar algun comentario?</a>
			</div>

		</div>
	

	</div>

	<div class="container-fluid border">
		<div class="row align-items-center">
			<div class="col border bg-dark" style="height: 70px; text-align: center;">
				<img src="logoSF.PNG" width="70" height="70">
			</div>

		</div>
	

	</div>
</body>
</html>
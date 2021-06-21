<?php
session_start();
if ($_SESSION['usuarioSesion']== null) {
header("Location: inicioSesion.html");
}
if($_SESSION['usuarioSesion']=="Gerente"){
  header("Location: sesionGerente.html");
}
?>
<!DOCTYPE html>
<html>
<head>

	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Exponente GYM</title>

	<link href="EstiloHome.css" rel="stylesheet" type="text/css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>


<! -- barra navegacion -->
<nav class="navbar navbar-expand-lg navbar-light " role="navigation" style="background-color: black">
  <div class="container-fluid">
  	<!--   <a class="navbar-brand" href="#">Exponente GYM</a>-->
  <img src="logoSF.PNG" width="70" height="70">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav m-auto" >
 


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" style= "color: white; " role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Bienvenido <?php echo $_SESSION['usuarioSesion']; ?>
          </a>             
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="CanvasPluggin/index.html">Logo</a></li> 
            <li><a class="dropdown-item" href="cerrarSesion.php">Cerrar Sesión</a></li>                
          </ul>
          
        </li>
        <li>
          <a class="nav-link" href="gestionComentarios/crearComentario.php" style= "color: white; ">Comentarios</a>
        </li>
        <li>
          <a class="nav-link" href="carritocompras/tienda.php" style= "color: white; ">Tienda</a>
        </li>
         <img src="fb.PNG" width="50" height="50">
      </ul>

    </div>
  </div>
</nav>


<!-- carrusel-->


<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="principal1.JPG" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="principal2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="principal3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!--titulos/objGenerales -->
<div id="divisor">
  <h2 class="display-1 text-center"> <strong>OBJETIVO GENERAL<strong></h2>
</div>
<!--code -->
<div class="container-fluid" style="background-color:  #edce45">
  <div class="row">
    <div class="col-sm">
      <img src="pesas1.png" alt="" width="370" height="370">
    </div>
    <div class="col-sm" style="font-family: Copperplate Gothic">
      Brindar un servicio de calidad orientado a entender a las necesidades individuales de los clientes proporcionando bienestar, salud y un verdadero compromiso de empresa-cliente
    </div>
    <div class="col-sm">
      <img src="pesas2.png" alt="" width="370" height="370">
    </div>
  </div>
</div>

<div id="ubicacion" style="background-color:  #e13030 ">
  <div class="row">
    <div class="col-sm">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1037.0295191129824!2d-99.51638404421527!3d17.562760391816944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cbed3c161470b5%3A0xf60d4b5c7cc22c50!2sExponente%20GYM!5e0!3m2!1ses!2smx!4v1616820270818!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
    </div>
    <div class="col-md-7" style="text-align: center; font-size: 30px; font-family: Copperplate Gothic">
      <p>EXPONENTE GYM<br> Te está buscando, visítanos.<br>El cambio es ahora</p>

    </div>
  </div>
  
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>
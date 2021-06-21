<?php
session_start();
if ($_SESSION['usuarioSesion']== null) {
header("Location: inicioSesion.html");
}
?>

<?php
header("Location: tienda.php");

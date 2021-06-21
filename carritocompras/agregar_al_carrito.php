<?php
session_start();
if ($_SESSION['usuarioSesion']== null) {
header("Location: inicioSesion.html");
}
?>


<?php
include_once "funciones.php";
if (!isset($_POST["id_producto"])) {
    exit("No hay id_producto");
}
agregarProductoAlCarrito($_POST["id_producto"]);
header("Location: tienda.php");

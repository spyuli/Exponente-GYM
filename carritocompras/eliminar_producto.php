<?php
session_start();
if ($_SESSION['usuarioSesion']== null) {
header("Location: inicioSesion.html");
}
?>

<?php
if (!isset($_POST["id_producto"])) {
    exit("No hay datos");
}

include_once "funciones.php";
eliminarProducto($_POST["id_producto"]);
header("Location: productos.php");

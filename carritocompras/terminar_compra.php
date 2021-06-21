<?php
session_start();
if ($_SESSION['usuarioSesion']== null) {
header("Location: inicioSesion.html");
}
?>

<?php
# Es responsabilidad del programador hacer algo con los productos
include_once "funciones.php";
//$productos = obtenerProductosEnCarrito();
# Puede que solo quieras los ids, para ello invoca a obtenerIdsDeProductosEnCarrito();
//var_dump($productos);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras</title>
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
</head>

<body>
<div
class="jumbotron">
<center><h1 class="display-4"> Paso Final</h1></center>
<hr class="my-4">
<center><p class="lead"> Estas a punto de pagar en Gym Exponente:


<p> Gracias por tu Compra</p></center>
</div>
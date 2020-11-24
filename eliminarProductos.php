<?php

include("BaseDatos.php");

$id = $_GET["id"];


$transaccion = new BaseDatos();


$consultaSQL = "DELETE FROM productos WHERE idproducto='$id'";

$transaccion->eliminarDatos($consultaSQL);


header("Location: listaProductos.php");










?>

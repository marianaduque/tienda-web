<?php 
include("BaseDatos.php");


$id=$_GET ["id"];


if (isset($_POST["botonEditar"])){

    $nombre=$_POST["nombreEditar"];
    $precio=$_POST["precioEditar"];
    $descripcion = $_POST["descripcionEditar"];


$transaccion=new BaseDatos();

$consultaSQL="UPDATE productos SET nombre='$nombre', precio='$precio',descripcion='$descripcion' WHERE idproducto ='$id'";


$transaccion->editarDatos($consultaSQL);


header("location:listaProductos.php");


}















?>
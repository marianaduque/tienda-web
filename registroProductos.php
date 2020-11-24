<?php

 include ("BaseDatos.php");
  
  if (isset($_POST["botonEnvio"])){

    // 1.recibir los datos desde la vista (interfaz de usuario)
    $nombre = $_POST["nombre"];
    $marca=$_POST["marca"];
    $precio=$_POST ["precio"];
    $descripcion=$_POST["descripcion"];
    $imagen=$_POST["imagen"];

    // 2.crear una copia de la clase base de datos 
    // crear un objeto de la clase base de datos

    $transaccion=new BaseDatos();

    // 3.Crear una consulta SQL para agregar datos 
    $consultaSQL= "INSERT INTO productos ( nombre, marca, precio, descripcion, imagen) VALUES ('$nombre','$marca','$precio','$descripcion', '$imagen')";
  
  // 4.Insertar la funcion para insertar datos de la clase BaseDatos
   $transaccion->agregarDatos($consultaSQL);

   header("location:listaProductos.php");
}

?>
<?php
 $servidor = "localhost";
 $usuario = "usuario_tienda";
 $password = "segura123";
 $base_datos = "tienda";
 // Crear conexión
 $conexion = new mysqli($servidor, $usuario, $password, $base_datos);
 // Verificar conexión
 if ($conexion->connect_error) {
 die("Error en la conexión: " . $conexion->connect_error);
 } else {
 echo "Conexión exitosa a la base de datos.";
 }
 ?>
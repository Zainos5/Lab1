<?php
 include 'conexion.php';
 $nombre = "Laptop";
 $precio = "15000.00";
 $sql = "INSERT INTO productos (nombre, precio) VALUES ('$nombre', '$precio')";
 if ($conexion->query($sql) === TRUE) {
 echo "Producto registrado correctamente.";
 } else {
 echo "Error: " . $conexion->error;
 }
 $conexion->close();
 ?>